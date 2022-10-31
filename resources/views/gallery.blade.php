@extends('layout')
@section('container')

    <div class="justify-content-md-center row text-center ">
        <div class="row row-cols-lg-3 p-5  ">


            @php($i=0)
            @foreach($tampilan as $tes)

                    <div class="col-lg-4  col-md-6 p-lg-3">
                        <div class="card mx-auto " style="width: 15rem;">

                            <img src="/image/{{$tes['image']}}" class="card-img-top w-100 " >
                            <a class="text-center m-3 fw-light btn " href="/subgallery" style="font-family:'Helvetica Neue'">{{$tes['subtext']}}</a>
                        </div>
                    </div>
            @endforeach




            </div>
        </div>
    </div>



@endsection
