<style>
    * {
        box-sizing: border-box;
    }
    
    /* Create three equal columns that floats next to each other */
    .column__1, .column__2, .column__3 {
        margin-top: 15%;
        float: left;
        width: 33.33%;
        padding: 10px;
        height: 300px; /* Should be removed. Only for demonstration */
    }
    
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .text_center {
        margin-top: 20px;
    }
    .input_center {
        margin-bottom: 30px;
        border: none;
        border-bottom: 2px solid #696969;
        width: 250px;
        height: 30px;
        font-size: 15px;
        color: black;
    }
    .btn_save {
        position: relative;
        top: 20px;
        text-align: center;
        float: unset;
        background: #005B45;
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
    <div class="row">
        <div class="column__1">

    </div>
    <div class="column__2">
        <div class="text_center">
            <p>Nama Mitra</p>
            <input class="input_center" type="text"> <br>
            <p>Nomor Telepon</p>
            <input class="input_center" type="text"> <br>
            <p>Usaha</p>
            <input class="input_center" type="text"> <br>
        </div>
    </div>
    <div class="column__3">

    </div>
    </div>
    <div class="btn_save">
        <a href="">Lunas</a>
    </div> 
@endsection