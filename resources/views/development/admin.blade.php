@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				  <div class="panel-heading">
				    	<h3 class="panel-title">This is admin's Dev Area.</h3>
				  </div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/expSave') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">User Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="userExp" value="{{ $userData->userExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Wallaby Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="wallabyExp" value="{{ $userData->wallabyExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Kaola Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="kaolaExp" value="{{ $userData->kaolaExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Wombat Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="wombatExp" value="{{ $userData->wombatExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">platypus Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="platypusExp" value="{{ $userData->platypusExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Cassowary Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="cassowaryExp" value="{{ $userData->cassowaryExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Frog Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="frogExp" value="{{ $userData->frogExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Whale Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="whaleExp" value="{{ $userData->whaleExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Turtle Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="turtleExp" value="{{ $userData->turtleExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Shark Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="sharkExp" value="{{ $userData->sharkExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Bilby Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="bilbyExp" value="{{ $userData->bilbyExp }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Kangaroo Experience</label>
							<div class="col-md-6">
								<input type="number" class="form-control" name="kangarooExp" value="{{ $userData->kangarooExp }}">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
		



@endsection