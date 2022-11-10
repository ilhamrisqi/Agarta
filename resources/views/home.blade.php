
@extends('layout')
@section('container')
<div class="bg-light mt-auto p-50  row d-flex justify-content-between  align-items-center" >

    <div class="col-12 col-lg-6 p-5 d-flex justify-content-center text-center" data-aos="zoom-in" data-aos-duration="2000">
        <h1 class=" text-center fs-4 p-5"> “ {{$maincontnt}} “</h1>
    </div>


    <div id="carouselExampleInterval" class="carousel slide col-12 col-lg-6" data-bs-ride="carousel" data-aos="zoom-in" data-aos-duration="2000">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner p-5 img-fluid">
                <div class="carousel-item active img-fluid">
                    <img src="image/MBZZ0541.JPEG" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item ">
                    <img src="image/wed01.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="image/IMG_1235.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
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



    <div class=" mt-5 p-50 row d-flex row justify-content-center px-3" >
        <div class="col-3 justify-content-center text-center" data-aos="zoom-in" data-aos-duration="2000">
            <a href="/gallery" class="link-dark fs-4 fw-light" style="text-decoration: none">Wedding</a>
        </div>
        <div class="col-4 justify-content-center text-center" data-aos="zoom-in" data-aos-duration="2000">
            <a href="/gallery" class="link-dark fs-4 fw-light" style="text-decoration: none">Prewedding</a>
        </div>
        <div class="col-4  justify-content-center text-center" data-aos="zoom-in" data-aos-duration="2000">
            <a href="/gallery" class="link-dark fs-4 fw-light" style="text-decoration: none">Engagement</a>
        </div>
    </div>

    <div class=" justify-content-center row p-5">

        <img data-aos="zoom-in" data-aos-duration="2000" src="{{$subimg}}" class="col-12 col-lg-6 p-5 d-flex justify-content-center img-fluid" style="width: 400px; height: 550px;" >

            <div class="col-12 col-lg-5 mt-5 d-flex justify-content-center text-center" data-aos="zoom-in" data-aos-duration="2000">
                <div>
                    <h1 class=" text-center p-5 fs-2"> {{$subcontnt}}
                        <div class="row mt-3">
                            <div class="col-12 mt-3" >
                                <button type="button" class="btn btn-dark text-center btn-lg"><a href="/contact" class="link-light" style="text-decoration: none">{{$contactbtn}}</a></button>
                            </div>
                        </div>
                    </h1>
                </div>
            </div>
    </div>





@endsection
