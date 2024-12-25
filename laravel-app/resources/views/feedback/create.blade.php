@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kirim Feedback</h1>

    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" class="form-control" max="5" min="1" placeholder="1-5" required>
        </div>
        <div class="form-group mt-3">
            <label for="comment">Komentar</label>
            <textarea name="comment" id="comment" class="form-control" rows="5" placeholder="Masukkan komentar" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
    </form>
</div>
@endsection
