@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Janji Temu</h1>
    <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Buat Janji Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pasien</th>
                <th>Konselor</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $key => $appointment)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $appointment->patient->name }}</td>
                <td>{{ $appointment->counselor->name }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->status }}</td>
                <td>
                    <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus janji temu ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
