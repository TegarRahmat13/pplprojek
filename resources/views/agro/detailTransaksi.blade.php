<style>
    * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    font-size: 20px;
    margin-top: 10%;
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.input_ {
    border: none;
    font-size: 20px;
}
</style>
@extends('header.main')

@section('container')
    <div class="row">
    <div class="column">
        
    </div>
    <div class="column" >
        <p style="margin-top: 50px;">Nama</p>
        <input class="input_" type="text"> <br> <br>
        <p>Tanggal</p>
        <input class="input_" type="text">
    </div>
</div>
@endsection