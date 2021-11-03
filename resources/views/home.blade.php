@extends('layouts.app')

@section('title', 'home')
@section('content')
    <div class="container my-4">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://townsquare.media/site/622/files/2016/02/CA_ImageHeader.jpg?w=1200&h=0&zc=1&s=0&a=t&q=89" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://icv2.com/images/article_thumbs/650x650_bafdb1648ac0960ea80adc9ea0177b44b919313d2bf871fdc4fc0321.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.mos.cms.futurecdn.net/ut88Um8qgyGufPCDeoPu4S.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a style="color:blue;" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span 
                class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
@endsection

<script>
    // $('.carousel').carousel();

    $('.carousel').carousel({
        interval: 2000
    });
</script>