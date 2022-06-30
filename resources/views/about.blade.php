@extends('layouts.main')
@push('title')
    <title>About</title>
@endpush

@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <h1>
       <center>
        About page 
       </center>
    </h1>

    <div class="container">
        <span>Name:- {!!$name!!}</span>
        <span>Surename:- {!!$surname!!}</span>
    </div>
</body>
</html>
@endsection

