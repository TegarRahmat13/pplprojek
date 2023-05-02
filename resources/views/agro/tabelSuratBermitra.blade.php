<style>
    table {
        position: relative;
        width: 50%;
        top: 0;
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
    </style>
    
@extends('header.main')

@section('container')
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pengaju</th>
            <th>Detail</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td><a href="#">Lihat</a></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
@endsection