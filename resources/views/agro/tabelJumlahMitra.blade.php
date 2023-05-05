
<style>
table {
    position: relative;
    width: 50%;
    top: 20%;
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
            <th>Nama Mitra</th>
            <th>Kebutuhan</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td><a href="detailTabelJumlahMitra">Lihat</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
@endsection
    
