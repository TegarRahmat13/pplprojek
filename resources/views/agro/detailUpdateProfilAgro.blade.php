<style>
    *{
        box-sizing: border-box;
        margin-top: 20px;
    }
    .row{
        display:grid;
        grid-template-columns: 33.33% 33.33% 33.33%;
        justify-content: center;
        text-align: left;
        font-size: 20px;
        height: 300px;
        color: #159895;
    }
    .column1 {
        justify-content: center;
        text-align: center;
        margin: 10px;
        width: 300px;
    }
    .btn_edit {
        background: #159895;
        color: white;
        width: 100px;
        text-align: center;
        float: left;
        border-radius: 5px;
        margin: 0;
    }
    .btn_tambah {
        background: #159895;
        color: white;
        width: 100px;
        text-align: center;
        float: right;
        border-radius: 5px;
        margin: 0;

    }
    .btn_simpan, .btn_submit {
        width: 100px;
        height: 30px;
        margin-left: 50%;
        margin-right: 50%;
        margin-top: 10%;
        color: white;
        
    }
    hr {
        margin-top: 0;
        border: 0;
        width: 50px;
        height: 4px;
        background: #159895;
        margin-left:5%
    }
    .btn_col1 {
        margin-left: 30%;
    }
</style>

@extends('header.main')
@section('container')
<h1 style="margin-left:5% ;" >Profile</h1>
<hr>
    <div class="row">
        <div class="column1">
            <input type="file" name="image" id="" style="margin-top: 30%" >
        <br>
        <div class="btn_col1">
            <div class="btn_tambah">
                    </div>
        </div>
        </div>
        <div class="column2">
            <label for="">Username</label><br>
                <input type="text" name="update_name" class="form-control"   id="exampleInputEmail1" style="height: 10%; width: 60%" ><br><br>
            <label for="">Nomor Telepon</label><br>
                <input type="number" name="update_nomortelepon" class="form-control" id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
            <label for="">Nama Usaha</label><br>
                <input type="text" name="update_namausaha" class="form-control"  id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
            <label for="">Harga</label><br>
                <input type="number" name="update_harga" class="form-control"  id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
        </div>
        <div class="column3">
            <label for="">Email</label><br>
                    <input type="email" name="update_email"  id="exampleInputEmail1" style="height: 10%; width: 60%" ><br><br>
                <label for="">Alamat</label><br>
                    <input type="text" name="update_alamatProfil"  id="exampleInputEmail1" style="height: 10%; width: 60%"><br><br>
                <label for="">Deskripsi</label><br>
                    <input type="text" name="update_deskripsi"  id="exampleInputEmail1" style="height: 35%; width: 60%"><br><br>
        </div>
    </div>
    <div class="btn_simpan">
        <button type="submit" value="update profile" name="submit" class="btn_submit" style="background:#159895;">Submit</button>
    </div>
        </form>
@endsection
