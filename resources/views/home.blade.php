@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in! <a href="{{url('/leila')}}">Leila's dev area | </a><a href="{{url('/helen')}}">Helen's dev area | </a><a href="{{url('/paul')}}">Paul's dev area </a> <br /> <br />
                    Click ----> <a href="{{url('/demo')}}"><strong>here</strong></a> <---- for some DEMO fun!!
                    
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
