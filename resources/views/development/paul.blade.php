@extends('app')

@section('content')
<link href="{{ asset('/css/paulCSS.css') }}" rel="stylesheet">
<script src="{{ asset('/js/paulJS.js') }}"></script>

This is Paul's Dev Area. </br></br>

Write html code below </br></br>

user exp = {{$userData->userExp}} </br>
kaola exp = {{$userData->kaolaExp}} </br>
whale exp = {{$userData->whaleExp}} </br>
same for wallaby wombat platypus cassowary frog turtle etc
@endsection