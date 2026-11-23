@extends('layouts.app2')

@section('content')

<style>
    .hero-boulangerie {

        text-align: center;
        background-image: url("{{ asset('Pictures/p.jpg') }}");

    }

    .hero-boulangerie h1 {
        font-family: 'Playfair Display', serif;
        font-size: 56px;
        color: #4B4B4B;
        margin-bottom: 30px;
    }

    .hero-boulangerie h2 {
        font-family: 'Lato', sans-serif;
        font-size: 24px;
        color: #4B4B4B;
        font-weight: 400;
        margin-bottom: 40px;
    }

    .btn-visit-shops {
        display: inline-block;
        padding: 10px 30px;
        border: 2px solid #4B4B4B;
        color: #4B4B4B;
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 1px;
        transition: all 0.3s;
    }

    .btn-visit-shops:hover {
        background-color: #4B4B4B;
        color: white;
    }

    .baking-goods-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 180px;
        background-image: url("{{ asset('images/baking_goods_bar.png') }}");
        background-size: cover;
        background-position: bottom center;
        background-repeat: no-repeat;
    }

    .container-mid{
        margin-top: 150px;
    }
</style>

<div class="hero-boulangerie">
<div class="container-mid">
        <h1 style="color: rgb(0, 0, 0);">The Authentic French Boulangerie</h1>
        <h2 style="color: rgb(0, 0, 0)">Baked with love and tradition, brought from France to you</h2>
        <a href="https://maps.app.goo.gl/Wek5oN9ipy6KDVU8A" class="btn-visit-shops" style="color: rgb(0, 0, 0)">Visit Our Shops</a>
    </div>

    <div class="baking-goods-bar"></div>

</div>



@endsection



