<style>
    .kemitraanDetail__section{
        padding-top: 4rem;
    }
    .kemitraanDetail{
        grid-template-columns: repeat(auto-fit,minmax(200px, 1fr));
        align-items: flex-end;
        justify-content: center;
        padding-top: 2.5rem;
    }
    .kemitraan-img{
        max-height: 400px;
    }
    .kemitraanDetail__left{
        display: flex;
        justify-content: center;
    }
    .kemitraanDetail__right h1{
        margin-top: 10%;
        font-size: 4rem;
        font-weight: 600;
        padding-bottom: 2.5rem;
    
    }
    .leftName__info,.leftLoc__info{
        flex-direction: row;
        gap: 1.5rem;
        align-items: center;
        font-size: 1.5rem;
        padding-bottom: .5rem;
        font-weight: 500;
    }
    .leftDetail__info{
        font-weight: 500;
        padding-bottom: 1.5rem;
    }
    .kemitraanDetail__button{
        padding: .8rem 1.5rem;
        background-color: var(--hijau-muda);
        color: white;
        font-size: 1.5rem;
        border-radius: .5rem;
        border: none;
        cursor: pointer;
        transition: background .3s;
    }
    .kemitraanDetail__button:hover{
        background-color: var(--hijau-tua);
    }
</style>
@extends('header.main2')

@section('container2')
@foreach ($Detail_kemitraan as $item)
<div class="kemitraanDetail grid">
    <div class="kemitraanDetail__left">
        <img class="kemitraan-img" src="../../image/mitra/kangkung.jpg" alt="">
    </div>
    <div class="kemitraanDetail__right">
        <h1 class="leftUsaha__info">
            {{ $item->namausaha }}
        </h1>
        <div class="leftName__info flex">
            <i class="ri-user-line" style="margin-right: 10px;"></i>{{ $item->user->name }}
        </div>
        <div class="leftName__info flex">
        <i class="ri-money-dollar-circle-line" style="margin-right: 10px;"></i>{{ $item->harga }}
        </div>
        <div class="leftLoc__info flex">
            <i class="ri-map-pin-line" style="margin-right: 10px;" ></i>{{ $item->alamat }}
        </div>
        <p class="leftDetail__info">
        {{$item->deskripsi}}
        </p>
        <button class="kemitraanDetail__button" onclick="location.href='pembuatanFormulirMitra'">
        AJUKAN KERJASAMA
        </button>
    </div>
</div>
@endforeach
    
@endsection