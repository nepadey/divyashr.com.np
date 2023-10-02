@extends('layout/app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div style="text-align:center; width=50%; height=50%; padding: top 50%;">
        <div><h1> Thank You {{ $inquery->name}}</h1></div>
        <a href="/" class="btn btn-primary" role="button">Go Back</a>
    </div>

@endsection
