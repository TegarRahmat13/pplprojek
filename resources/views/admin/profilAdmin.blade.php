<style>
    * {
        box-sizing: border-box;
    }
    
    /* Create three equal columns that floats next to each other */
    .column {
        margin-top: 10%;
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
    h1{
        font-size: 30px;
        margin-top: 10px;
        margin-left: 50px;
    }
    hr {
        width: 80px;
        height: 4px;
        margin-top: 0;
        background: #159895;
        margin-left: 50px;
    }
    p{
        margin-top: 10px;
        font-size: 20px;
    }
    .form_input {
        height: 30px;
        width: 200px;
        margin-top: 5px;
        border: 2px solid #159895;
        border-radius: 5px;
        color: black;
        font-size: 15px;
    }
    .button{
        margin-left: 50%;
    }

    </style>
@extends('header.layout')

@section('layout')
    <H1>PROFILE</H1>
    <hr>
    <div class="row">
        <div class="column">
            <div class="c_1">

            </div>
        </div>
        <div class="column">
            <div class="c_2">
                <p>Username</p>
                <input class="form_input" type="text" name="" id="">
                <p>No Telepon</p>
                <input class="form_input" type="text" name="" id="">
            </div>
        </div>
        <div class="column">
            <div class="c_3">
                <p>Email</p>
                <input class="form_input" type="text" name="" id="">
                <p>Alamat</p>
                <input class="form_input" type="text" name="" id="">
            </div>
        </div>
    </div>
    <div class="button">
        <a href="createProfil" style="background:#159895;color:white;text-align: center;font-size:15px;width: 120px;margin-right:10%;">EDIT</a>
        <a href="updateProfil"style="background:#159895;color:white;text-align: center;font-size:15px;width: 120px;">TAMBAH</a>
    </div>
@endsection