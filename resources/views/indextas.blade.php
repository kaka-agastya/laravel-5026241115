@extends('template')
@section('judul_halaman', 'Data Tas')
@section('konten')
    <a href="/tas/tambah" class="btn btn-primary my-4"> + Tambah tas Baru</a>
    <p>Cari Data tas :</p>
    <form action="/tas/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari tas .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success mb-4">
    </form>
    <table class="table table-striped table-hover" {{-- border="2" --}}>
        <tr>
            <th>Kode Tas</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($tas as $p)
            <tr>
                <td>{{ $p->kodetas }}</td>
                <td>{{ $p->merktas }}</td>
                <td>{{ $p->stocktas }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/tas/edit/{{ $p->kodetas }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/tas/hapus/{{ $p->kodetas }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $tas->links() }}
    {{-- back & next --}}
@endsection

{{-- <?php
echo $tas;
?> --}}
