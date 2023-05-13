<style>
    .btn_kotak {
        margin-top: 10% ;
        position: absolute;
        top: 0;
        width: auto;
        height: auto;
    }
    .btnkotakkanan {
        background: #159895;
        color: white;
        position: absolute;
        width: 354px;
        height: 360px;
        left: 770px;
    
    }
    .btnkotakkiri {
        background: #159895;
        color: white;
        position: absolute;
        width: 354px;
        height: 360px;
        left: 316px;
    
    }
    </style>

@extends('header.main')

@section('container')
    <div class="btn_kotak">
        <a href="perhitunganAgro">
            <div class="btnkotakkanan">
                <div class="btnperhitungan">
                    <img src="../../image/money-dollar-circle-line.png" alt="">
                    <br>Perhitungan
                </div>
            </div>
        </a>
        <a href="tabelLaporan">
            <div class="btnkotakkiri">
                <div class="btnperhitungan">
                    <img src="../../image/bar-chart-box-line.png" alt="">
                    <br>Laporan
                </div>
            </div> 
        </a>
    </div>
@endsection