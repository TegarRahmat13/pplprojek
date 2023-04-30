<style>
    table {
        margin-top: 15%;
        margin-left: 20%;
        margin-right: 20%;
        width: 60%;
        border-collapse: collapse;

    }
    table, th, td {
        text-align: center;
        border: 3px solid #159895
    }
    th
    {
        color: white;
        background-color: #159895;
    }
</style>
@extends('header.main2')

@section('container2')
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pelaku Agro</th>
            <th>Kebutuhan</th>
            <th>Detail</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td><a href="detailPembayaranMitra">Lihat</a></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
@endsection