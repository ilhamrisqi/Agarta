@extends('layout')
@section('container')




        <div class="row justify-content-center p-5">
            <h1 class="text-center fw-light fs-1 p-3" style="font-family: 'Helvetica Neue'">{{$title}}</h1>
            @foreach($tampilan ['image1'] as $gallery)
            <div class="col-12 text-center ">
                <img class="p-3" src="/image potrait/{{$gallery}}" alt="" style="height: 550px; width: 400px;" >
            </div>
            @endforeach
        </div>


@endsection
