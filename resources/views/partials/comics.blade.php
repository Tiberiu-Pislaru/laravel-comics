@extends('layouts.default');

@section('content')
<div class="container-serie">

    <div class="current-series">
        CURRENT SERIES
    </div>

    <div class="container-card">
    @foreach ($data as $comic)
        
        <div class="card" >
            <div class="img-card">
                <img src="{{$comic["thumb"]}}" alt="">
            </div>
            <div class="title-card">
                {{$comic["series"]}}
            </div>
        </div>
    
    @endforeach
    </div>

    <div class="more">
        LOAD MORE
    </div>
</div>
@endsection

{{-- @dump($data) --}}