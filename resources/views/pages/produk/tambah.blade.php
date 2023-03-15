@extends('pages.main')

@section('content')
<h3 class="mb-5">Tambah Produk</h3>

	<div class="col-6">
		<form action="/products" method="POST" enctype="multipart/form-data">
      @csrf
			<div class="mb-3">
				<label for="nama-produk" class="form-label">Judul Produk</label>
				<input type="text" name="judulProduk" id="judulProduk" class="form-control" required>
        @error('judulProduk')
            <small class="text-denger">{{ $message }}</small>
        @enderror
			</div>
			<div class="mb-3">
				<label for="deskripsi" class="form-label">Deskripsi Produk</label>
				<textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" required></textarea>
        @error('deskripsi')
            <small class="text-denger">{{ $message }}</small>
        @enderror
			</div>

			<div class="mb-3">
				<label for="harga" class="form-label">Harga Produk</label>
				<input type="number" name="harga" id="harga" class="form-control" required>
        @error('harga')
            <small class="text-denger">{{ $message }}</small>
        @enderror
			</div>

			<div class="mb-3">
				<label for="gambar" class="form-label">Gambar Produk</label>
				<input type="file" name="gambar" id="gambar" class="form-control" required>
        @error('gambar')
            <small class="text-denger">{{ $message }}</small>
        @enderror
			</div>

			<button type="submit" class="btn btn-custom">Simpan</button>
		</form>
	</div>

@endsection