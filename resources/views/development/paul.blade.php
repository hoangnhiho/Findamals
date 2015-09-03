@extends('app')

@section('content')
<link href="{{ asset('/css/paulCSS.css') }}" rel="stylesheet">
<script src="{{ asset('/js/paulJS.js') }}"></script>

This is Paul's Dev Area. </br></br>

Write html code below </br></br>

user exp = {{$userData->userExp}} </br>
koala exp = {{$userData->koalaExp}} </br>
whale exp = {{$userData->whaleExp}} </br>
wombat exp = {{$userData->wombatExp}} </br>
same for wallaby wombat platypus cassowary frog turtle etc
Hello world
@endsection