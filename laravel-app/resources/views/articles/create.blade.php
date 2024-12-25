@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Artikel Baru</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul artikel" required>
        </div>
        <div class="form-group mt-3">
            <label for="content">Konten</label>
            <textarea name="content" id="content" class="form-control" rows="5" placeholder="Masukkan isi artikel" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
