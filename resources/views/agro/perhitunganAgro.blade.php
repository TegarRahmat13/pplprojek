<style>
    h2 {
        margin-top: 10%;
        text-align: center;
        text-decoration-color: #005B45;
    }
    .column_1, .column_2 {
    float: left;
    width: 50%;
    margin-top: 5%;
    }
    .column_1 {
        padding-left: 50px;
    }
    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    .box1{
    width:80%;
    height:40%;
    background:#159895;
    }
    .input__box {
        margin-top: 20px;
        margin-left: 20px;
        width: 200px;
        height: 30px;
        border: none;
        background: transparent;
        color: white;
        font-size: 20px;

    }
    .text_hasil {
        margin-top: 30px;
        text-align: center;
        color: white;
        font-size: 20px;
    }
    .input__hasil {
        border: none;
        width: 50%;
        height: 50px;
        background: transparent;
        font-size: 15px;
        color: white;
    }
    .btn__save {
        position: relative;
        top: 20px;
        text-align: center;
        float: unset;
        background: #159895;
        color: white;
        width: 100px;
        border-radius: 5px;
        font-size: 20px;
        align-items: center;
        margin-left: 50%;
    }
</style>
@extends('header.main')

@section('container')
    <h2>ANALISIS PERHITUNGAN PRODUKSI</h2>

    <div class="row">
        <div class="column_1">
            <p>Bulan Produksi Awal</p> <br>
            <input type="text" style="border: none;border-bottom: 2px solid #159895;background: transparent;margin-bottom: 10px;display: block;width:50%;"> <br> <br>
            <p>Bulan Produksi Akhir</p><br>
            <input type="text" style="border: none;border-bottom: 2px solid #159895;background: transparent;margin-bottom: 10px;display: block; width:50%;">
        </div>
        <div class="column_2">
            <div class="box1">
                <input class="input__box" type="text" name="" id=""> <br>
                <input class="input__box" type="text" name="" id="">
                <div class="text_hasil">
                    <p>Hasil</p>
                    <input class="input__hasil" type="text" name="" id="">
                </div>
            </div>
        </div>
    </div>
    <div class="btn___simpan">
        <button  class="btn__save" type="submit" style="background:#159895;">Oke</button>
    </div>
@endsection