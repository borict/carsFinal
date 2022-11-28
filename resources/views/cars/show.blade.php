{{-- 
@extends('layouts.master')

    <div>
        <h4>Leave a comment</h4>
        <form method="GET" action="/cars/{{$car->id}}">
            
        </form>
    </div>

    <div>
        
    </div>
@endsection --}}

{{-- @extends('layouts.app') --}}

@section('title', $car->title)

@section('content')
  <a href="/cars"><< Show all cars</a>
  <h2>Car Title: {{ $car->title }}</h2>
  <p>Car Producer: {{ $car->producer }}</p>
  <p>Number of dors: {{ $car->number_of_dors }}</p>
@endsection