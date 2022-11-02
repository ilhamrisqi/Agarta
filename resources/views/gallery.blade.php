@extends('layout')
@section('container')

    <div class="justify-content-md-center row text-center ">
        <div class="row row-cols-lg-3 p-5 ">


            @php($i=0)

            @foreach($tampilan as $tes)

                    <div class="col-lg-4  col-md-6 col-sm-12 p-lg-3 p-md-3">
                        <div class="card mx-auto  "data-aos="fade-up"
                             data-aos-anchor-placement="center-center"
                             data-aos-duration="5000"
                             style="width: 15rem;">

                            <img src="/image/{{$tes['image']}}" class="card-img-top w-100 " >
                            <a class="text-center p-3 fw-light btn "style="font-family:'Helvetica Neue'" href="/subgallery/{{$tes['id']}}">{{$tes['subtext']}}</a>
                        </div>
                    </div>
            @endforeach




            </div>
        </div>
    </div>



@endsection
