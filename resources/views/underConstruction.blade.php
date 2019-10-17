@extends('layouts.app')

@section('content')

<section class="under-construction">
    <div class="overlay"></div>
    <div class="content">
        {{-- <i class="fas fa-tools 5fx"></i> --}}
        <img src="{{asset('images/under-construction.png')}}" alt="">
        {{-- <h1>Under Construction</h1> --}}
        <p>This section of the website is being developed.</p>
    </div>

</section>

@endsection
