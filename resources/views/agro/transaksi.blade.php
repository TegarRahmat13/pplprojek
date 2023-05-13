<style>
    h2 {
        text-align: center;
        margin-top: 10%;
    }
    table {
        position: relative;
        width: 50%;
        margin-top: 10px;
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
    <h2>RIWAYAT TRANSAKSI</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Mitra</th>
            <th>Tanggal</th>
            <th>Bukti</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td><a href="detailTransaksi">Lihat</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
@endsection