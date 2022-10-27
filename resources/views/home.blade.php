
@extends('layout')
@section('container')
<div class="bg-light mt-auto p-50  row d-flex justify-content-between  align-items-center">

    <div class="col-12 col-lg-6 p-5 d-flex justify-content-center text-center">
        <h1 class=" text-center fs-4 p-5"> “ Great photography is about Depth of feeling , not depth of field “</h1>
    </div>


    <div id="carouselExampleInterval" class="carousel slide col-12 col-lg-6" data-bs-ride="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active p-5 img-fluid">
                    <img src="image/MBZZ0541.JPEG" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item p-5">
                    <img src="image/wed01.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item p-5">
                    <img src="image/IMG_1235.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item p-5">
                    <img src="image/MBZZ4035.JPG" class="d-block w-100" alt="...">
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



    <div class=" mt-md-5 p-50 row d-flex row justify-content-center">
        <div class="col-4  col-sm-4 justify-content-center text-center">
            <a href="" class="link-dark fs-3 fw-light" style="text-decoration: none">Wedding</a>
        </div>
        <div class="col-4  col-sm-4 justify-content-center text-center">
            <a href="" class="link-dark fs-3 fw-light" style="text-decoration: none">Pre Wedding</a>
        </div>
        <div class="col-4  col-sm-4 justify-content-center text-center">
            <a href="" class="link-dark fs-3 fw-light" style="text-decoration: none">Engagement</a>
        </div>
    </div>

    <div class="mt-md-5 p-25 row d-flex p-5 ">


        <div class="col-12 col-lg-6 ">
            <img src="image/prewed1BZZ3743.jpg" class="d-block w-75 " >
        </div>

{{--        text button--}}
        <div class="col-12 col-md-6 justify-content-center align-item-center " >
            <h1 class=" text-center fs-3 fw-light"> “ Great photography is about Depth of feeling , not depth of field “</h1>
            <button type="button" class="btn btn-secondary  justify-content-center align-item-center">Button</button>
        </div>


    </div>



@endsection
