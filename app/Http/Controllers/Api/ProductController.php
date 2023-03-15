<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // masukan sesuai dengan data di database
    public function index()
    {           
        Log::info("User sedang menampilkan semua data Produk");
        $produk = Product::select('id','judulProduk','deskripsi','harga','gambar')->get();
        return response()->json([
            'data' =>$produk
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(),[
            'judulProduk'  => 'required',
            'deskripsi'   => 'required',
            'harga'       => 'required|integer',
            'gambar'      => 'required|image|mimes:jpg,png|max:4096'
        ]);

        if  ($validasi->fails())
        {
            return response()->json($validasi->error(),422);
        }

        $gambar = $request->file('gambar')->store('public/images');
        $data = Product::create([
            'judulProduk' => $request->judulProduk,
            'deskripsi'   => $request->deskripsi,
            'harga'       => $request->harga,
            'gambar'      => $gambar
        ]);

        Log::info("User Sedang Mendambahkan data");
        return response()->json([
            'status'   => 'Berhasil',
            'data'     => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::select('id', 'judulProduk', 'deskripsi', 'harga', 'gambar')->where('id',$id)->first();
        // log 
        Log::info("User sedang menampilkan data produk by id");
        return response()->json([
            "data" => $product
        ],200);
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validasi = Validator::make($request->all(),[
            'judulProduk'  => 'required',
            'deskripsi'   => 'required',
            'harga'       => 'required|integer'
        ]);

        // Respon validasi gagal

        if ($validasi->fails()){

            return response()->json($validasi->errors(),422);
        }

        Product::where('id', $id)->update($request->all());
        
        Log::info("User sedang mengubah data");
        return response()->json([
           

            "status" => "upsate sukses"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();

        if($product->gambar)
        {
            Storage::delete($product->gambar);
        }

        $product->delete();

        Log::info("User Sedang menghapus produk");
        return response()->json([
            "status"  => "Hapus Suksess"
        ]);
    }
}
