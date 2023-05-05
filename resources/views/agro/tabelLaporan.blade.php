<style>
    table {
        position: relative;
        width: 50%;
        margin-top: 10%;
        left: 25%;
        margin-bottom: 20px;
        text-align: center;
        border-collapse: collapse;

    }
    table, th, td {
        text-align: center;
        border: 3px solid #159895
    }
    th
    {
        background-color: #159895;
    }
    .btntambah {
        position: relative;
        top: 0;
        text-align: center;
    }
</style>

@extends('header.main')

@section('container')
    <table>
        <tr>
            <th>No</th>
            <th>Tanggal Produksi</th>
            <th>Deskripsi</th>
            <th>Produksi Awal</th>
            <th>Produksi Akhir</th>
        </tr>
        @foreach ($laporans as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->tgl_produksi }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ $item->produksi_awal }}</td>
            <td>{{ $item->produksi_akhir }}</td>
        </tr>
        @endforeach
    </table>
    <a href="detailTabelLaporan">
    <div class="btntambah">
        <img src="../../image/add-circle-line.png" alt="">
        <br>Tambah Laporan
    </div>
    </a>
@endsection

