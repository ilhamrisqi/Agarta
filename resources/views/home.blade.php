
@extends('layout')
@section('container')
<div class="bg-light mt-auto p-50 row d-flex justify-content-between  align-items-center">

    <div class="col-12 col-md-6 d-flex justify-content-center`">
        <h1 class="text-center">weeqweqewe</h1>
    </div>

    <div id="carouselExampleInterval" class="carousel slide col-12 col-md-5" data-bs-ride="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/FIAN6392.JPEG" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="image/wed01.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/wed011.JPG" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



    <div class=" mt-auto p-50 row d-flex row justify-content-center">
        <div class="col-12  col-md-4 ">
            <h1>1</h1>
        </div>
        <div class="col-4"><h2>2</h2></div>
    </div>

@endsection
