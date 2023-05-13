<style>
    h2 {
        margin-top: 10%;
        text-align: center;
        color: #159895;
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
    <h2>BUKTI PEMBAYARAN</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Mitra</th>
            <th>Status</th>
            <th>Bukti</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td><a href="detailMitraPembayaran">Lihat</a></td>
        </tr>
    </table>
@endsection