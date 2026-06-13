@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <h2>Data Nilai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('kuliah.create') }}" class="btn btn-primary my-4">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($kuliah as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>
                    @if ($row->NilaiAngka >= 81)
                        A
                    @elseif ($row->NilaiAngka >= 61)
                        B
                    @elseif ($row->NilaiAngka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>{{ $row->NilaiAngka * $row->SKS }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data Nilai.</td>
            </tr>
        @endforelse
    </table>
@endsection
