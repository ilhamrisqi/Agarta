@extends('layout')
@section('container')

    <div class="justify-content-md-center row text-center ">
        <div class=" p-5 justify-content-center">


            @php($i=0)

            @foreach($tampilan as $tes)


                <div class="card mb-3" style="border: 0 solid transparent">
                    <div class="row g-0">
                        <div class="col-md-3 p-3"  data-aos="zoom-in">
                            <img src="/image/{{$tes['image']}}" class="img-fluid rounded-start" alt="...">
                            <a href="/subgallery/{{$tes['id']}}"></a>
                        </div>
                        <div class="col-md-8 d-flex" style="align-items: center; justify-content: center" data-aos="zoom-in" >
                            <div class="card-body" style="max-width: 500px">
                                <h5 class="card-title">{{$tes['subtext']}}</h5>
                                <p class="card-text">{{$tes['maindesc']}}</p>
                                <a class="card-text" href="/subgallery/{{$tes['id']}}"><button type="button" class="btn btn-dark">See more</button></a>
                            </div>
                        </div>
                    </div>
                </div>

{{--                    <div class="col-lg-4  col-md-6 col-sm-12 p-lg-3 p-md-3 mb-2 ">--}}
{{--                        <div class="card mx-auto  "data-aos="fade-up"--}}
{{--                             data-aos-duration="5000"--}}
{{--                             >--}}

{{--                            <img src="/image/{{$tes['image']}}" class="card-img-top w-100 " >--}}
{{--                            <a class="text-center p-3 fw-light btn "style="font-family:'Helvetica Neue'" href="/subgallery/{{$tes['id']}}">{{$tes['subtext']}}</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
            @endforeach




            </div>
        </div>
    </div>



@endsection
