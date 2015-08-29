@extends('app')

@section('content')
<link href="{{ asset('/css/helenCSS.css') }}" rel="stylesheet">
<script src="{{ asset('/js/helenJS.js') }}"></script>

This is Helen's Dev Area. </br></br>

Write html code below </br></br>

user exp = {{$userData->userExp}} </br>
kaola exp = {{$userData->kaolaExp}} </br>
whale exp = {{$userData->whaleExp}} </br>
same for wallaby wombat platypus cassowary frog turtle etc
@endsection