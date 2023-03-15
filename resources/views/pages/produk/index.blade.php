@extends('pages.main')

@section('content')
<h3 class="mb-5">Halaman Kelola Data Produk</h3>

<a href="/products/create" class="btn btn-md btn-custom mb-3">Tambah Produk</a>


@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <div class="tambah">
  <button type="button" class="btn btn" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
@endif


<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id Produk</th>
        <th>Judul Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $show)
      <tr>
        <td>{{ $show->id }}</td>
        <td>{{ $show->judulProduk }}</td>
        <td>{{ $show->deskripsi }}</td>
        <td>Rp. {{ number_format($show->harga, '0',',',',') }}</td>
        <td><img src="{{ Storage::url($show->gambar) }}" alt="{{ $show->judulProduk }}" width="400" class="img-thumbnail"></td>
        <td>  
        <div class="ww">
        <div class="tombol1">
            
          <a href="/products/{{ $show->id }}/edit" class="tombol">Edit</a>
            </div>
		          <form action="/products/{{ $show->id }}" method="POST" class="">
				    @method('delete')
				    @csrf
                  <div class="tombol2">
				 <button type="submit" class="button">Hapus</button>
                </div>
			  </form>
            </div>
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection