<style>
    * {
        box-sizing: border-box;
    }
    .row{
        margin-top: 10%;
        margin-left: 20%;
        justify-content: center;
        text-align: left;
        color: #159895;
    }
    
    /* Create two equal columns that floats next to each other */
    .column_1, .column_2 {
        margin-top: 10%;
        color: #159895;
        position: relative;
        margin: 0;
        float: left;
        width: 50%;
        padding: 15px;
        height: 300px; /* Should be removed. Only for demonstration */
    }
    
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .btn___simpan {
        position: relative;
        top: 0;
        text-align: center;
        float: unset;
        background: #159895;
        color: white;
        width: 100px;
        border-radius: 5px;
        font-size: 20px;
        align-items: center;
        left: 50%;
    }
    </style> 

@extends('header.main')

@section('container')
<form action="{{ route('tambah_laporan') }}" method="POST">
    @csrf
    <div class="row">
        <div class="column_1">
            <label>Tanggal Produksi</label> <br>
                <input type="date" name="tgl_produksi" style="height: 15%; width: 50%;" ><br><br>
            <label>Produksi Awal</label> <br>
                <input name="produksi_akhir" type="number" style="height: 15%; width: 50%;">Kg
        </div>
        <div class="column_2">
            <label style="margin-right: 40%;">Deskripsi</label> <br>
                <input name="deskripsi" type="text" placeholder="Masukkan deskripsi" style="height: 15%; width: 50%;"><br>
                <br>
                <label style="margin-right: 30%;">Produksi Akhir</label> <br>
                <input name="produksi_awal" type="number" style="height: 15%; width: 50%;">Kg
        </div>
    </div>
    <div class="btn___simpan">
        <button type="submit" class="btn_submit" style="background:#159895;">Simpan</button>
    </div>
</form>
@endsection
