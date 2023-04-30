<style>
    .foto__Usaha {
        position: absolute;
        width: 200px;
        height: 372px;
        margin-left: 20%;
        top: 188px;
        margin-right: 30%;
        margin-bottom: 20%;
    }
    .isi_detail_usaha {
        margin-top: 10%;
        margin-left: 40%;
        width: 237px;
        height: 100px;
        font-style: normal;
        font-weight: 500;
        color: #159895;
    }
    .tabel_keperluan_usaha {
        position: absolute;
        float: center;
        margin-left: 13%;
        align-items: center;
        grid-gap: 20px;
        top: 60%;
        color: white;
        font-size: 15px;
    }
    .btn_lunas   {
        background: #005B45 ;
        position: absolute;
        top: 75%;
        padding: 10px;
        border-radius: 5px;
        justify-content: center;
        color: white;
        width: 100px;
        text-align: center;
        margin: 10px;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
    .gmbr_upload {
        width: 150px;
        height: 150px;
        top: 188px;
        float: right;
        margin-right: 15%;
    }
</style>
@extends('header.main')

@section('container')
    <div class="rincian_transaksi_mitra">
        <div class="foto__Usaha">
            <img src="../../image/ppku.jpg" alt="Foto Usaha">
        </div>
        <div class="isi_detail_usaha">
            <label for="">Nama Mitra</label><br>
                <input type="text" name="name" id="" style="height: 30%; width: 150%" ><br><br>
            <label for="">Nomor Telepon</label><br>
                <input type="number" name="name" id="" style="height: 30%; width: 150%"><br><br>
            <label for="">Usaha</label><br>
                <input type="text" name="name" id="" style="height: 30%; width: 150%">
        </div>
    </div>
    <div class="tabel_keperluan_usaha">
            <input type="text" name="name" id="" style="width: 1000px; border-radius:5px; -moz-border-radius:4px; background:#159895; height:50px;">
        </div>
    <div class="gmbr_upload">
        <img src="../../image/bukti_transaksi.jpg" alt="">
    </div>
    <div class="btn_lunas">
        <a href="/pembayaran">Lunas</a>
    </div>
@endsection