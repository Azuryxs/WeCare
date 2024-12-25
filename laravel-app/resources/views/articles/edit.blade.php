@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}" required>
        </div>
        <div class="form-group mt-3">
            <label for="content">Konten</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $article->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection
