@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Artikel</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Buat Artikel Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $key => $article)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->user->name }}</td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus artikel ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
