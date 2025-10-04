<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
<body>
@extends('home.layout')
@section('home-title') Encounter @endsection
@section('home-content')

{!! breadcrumbs(['Encounter' => 'encounter']) !!}

<h2 class="mb-3 text-center">Something's in the bushes...</h2>
<p class="text-center">Do you want to investigate?</p>
<div class="p-5" style="background-image: url('https://files.catbox.moe/l2snsu.png'); background-size:cover;">
<div class="card m-auto" style="max-width: 400px">
<button class="btn btn-success " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Investigate...
  </button>
</div>
</div>
</p>
<div class="collapse m-auto" id="collapseExample">
  <div class="card card-body text-center">
            <h2 class="text-center">Encounter Traits:</h2>
            @foreach($traits as $trait)
                <span class="badge badge-pill badge-success mb-2 p-2 mx-auto w-10" style="font-size:15px">{{ $trait }}</span>
            @endforeach

            <h2 class="text-center mt-3">Mutations:</h2>
            @foreach ($mutations as $mutation)
                <span class="badge badge-pill badge-info mb-2 p-2 mx-auto w-10" style="font-size:15px">{{ $mutation }}</span>
            @endforeach

            <hr>

    <div>
        <button class="badge badge-pill badge-outline mb-2 p-2 mx-auto" style="background-color:{{ $primary_color }};font-size:15px">{{ $primary_color }}</button> <br>
        <button class="badge badge-pill badge-outline mb-2 p-2 mx-auto" style="background-color:{{ $secondary_color }};font-size:15px">{{ $primary_color }}</button> <br>
        <button class="badge badge-pill badge-outline mb-2 p-2 mx-auto" style="background-color:{{ $membrane_color }};font-size:15px">{{ $primary_color }}</button> <br> <hr>


<div class="text-center">
    {!! Form::button('Claim', ['class' => 'btn btn-success mb-2', 'type' => 'submit']) !!}
    <nav aria-label="breadcrumb ">
  <ol class="breadcrumb text-center m-auto">
    <li class="breadcrumb-item text-center m-auto"> Go to our myo redemption channel with a screenshot of what you've got! <br>
    You can reload as many times as you want but once you claim it you have to wait for a year for the next</li>
  </ol>
</nav>

</div>

    </div>
    </div>
@endsection
  </div>

</div>
</body>
</html>
