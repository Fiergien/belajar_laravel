@extends('pages.main')

@section('content')
<h3 class="mb-5">Edit Produk</h3>

<div class="col-6">
  <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
    @method("put")
    @csrf
    <div class="mb-3">
      <label for="nama-produk" class="form-label">Nama Produk</label>
      <input type="text" name="judulProduk" id="judulProduk" class="form-control" value="{{ $product->judulProduk }}" required>
      @error('judulProduk')
          <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="mb-3">
      <label for="nama-produk" class="form-label">Deskripsi Produk</label>
      <textarea rows="5" class="form-control" name="deskripsi" id="deskripsi" required>{{ $product->deskripsi }}</textarea>
      @error('judulProduk')
      <small class="text-danger">{{ $message }}</small>
  @enderror 
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga Produk</label>
      <input type="number" class="form-control" name="harga" id="harga" value="{{ $product->harga }}" required>
      @error('judulProduk')
      <small class="text-danger">{{ $message }}</small>
  @enderror
    </div>
    <button type="submit" class="btn btn-custom">Edit</button>
  </form>
</div>
    
@endsection 