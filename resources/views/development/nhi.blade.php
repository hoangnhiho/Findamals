@extends('app')

@section('content')
<link href="{{ asset('/css/paulCSS.css') }}" rel="stylesheet">
<script src="{{ asset('/js/paulJS.js') }}"></script>
<script src="{{ asset('/js/virtualjoystick.js') }}"></script>

This is Nhi's Dev Area. </br></br>

Write html code below </br></br>

user exp = {{$userData->userExp}} </br>
kaola exp = {{$userData->kaolaExp}} </br>
whale exp = {{$userData->whaleExp}} </br>
wombat exp = {{$userData->wombatExp}} </br>
same for wallaby wombat platypus cassowary frog turtle etc
Hello world


<script type="text/javascript">
	var joystick = new VirtualJoystick({
                      mouseSupport: true,
		      stationaryBase: true,
                      baseX: 200,
                      baseY: 700,
		      limitStickTravel: true,
		      stickRadius: 50
   });

</script>


@endsection