<!doctype html>
<html>
	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<title>Findamals</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,300">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Paytone+One">
	<link rel="stylesheet" href="../css/helenCSS.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#C18CD7', '#2CB6CF', '#84D035'],
				anchors: ['homePage', 'aboutPage', 'teamPage'],
				menu: '#menu',
				scrollingSpeed: 500
			});
		});
	</script>
</head>
<body>
	<ul id="menu">
		<li data-menuanchor="homePage">
			<a href="#homePage">Home</a>
		</li>
		<li data-menuanchor="aboutPage">
			<a href="#aboutPage">About</a>
		</li>
		<li data-menuanchor="teamPage">
			<a href="#teamPage">Team</a>
		</li>
	</ul>
	<div id="fullpage">
		<div class="section active" id="section1">

			<div class="row">
				<div class="col-sm-7">
					<!-- left Content -->
					<div id="logo">
						<img src="../images/findamals-logo.png"/>
					</div>
					<img src="../images/login/cockatoo.png" id="parrot"/>
					<h2>
						Welcome to Findamals.
					</h2>
					<ul>
						<li> Discover and play with amazing animals
						</li>
						<li> Learn more about extinct Queensland species
						</li>
						<li> Have fun!
						</li>
					</ul>

					<!-- End left Content -->
				</div>
				<div class="col-sm-4">
				<!-- login class = col-sm-4 -->
					<div class="panel panel-default">
						<div class="panel-body">
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li class="error">{{ $error }}</li> 
										@endforeach
									</ul>
								</div>
							@endif
		                    @if (session('status')) 
		                        <div class="alert alert-success">
		                            {{ Session::get('status') }}
		                        </div>
		                    @endif
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<div class="col-md-12">
										<input type="name" class="form-control" name="name" value="{{ old('name') }}"placeholder="Name">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-9">
										<input type="password" class="form-control" name="password"placeholder="Password">
									</div>
									<div class="col-md-3">
										<button type="submit" class="btn btn-primary">Login</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				<!-- end of login and start of register -->

			<div class="panel panel-default">
				<div class="panel-heading">New to Findamals? Register</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<div class="col-md-12">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}"placeholder="Name">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<input type="email" class="form-control" name="email" value="{{old('email')}}"placeholder="Email">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<input type="password" class="form-control" name="password"placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8">
								<input type="password" class="form-control" name="password_confirmation"placeholder="Confirm password">
							</div>
							<div class="col-md-4">
								<button type="submit" class="btn btn-warning">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
					<!-- end class = col-sm-4 -->
				</div>
			</div>

			
			<img src="../images/login/frog.png" id="frog"/>
			<img src="../images/login/wombat.png" id="wombat"/>
		</div>
		<div class="section" id="section2">
			<div class="slide">
				<div class="desc">
					<h1>About</h1>
					<p>Findamals is built for kids. The game helps kids:</p>
					<ul>
						<li>
							Learn about extinct native Queensland animals
						</li>
						<li>
							Explore their natural habitats
						</li>
						<li>
							Learn, play and have fun!
						</li>
					</ul>
				</div>
				<div class="pict">
					<img src="../images/login/bilby.png" id="bilby">
					<img src="../images/login/queensland.png" id="queensland">
					<img src="../images/login/wallaby.png" id="wallaby">
					<img src="../images/login/platypus.png" id="platypus">
				</div>
			</div>
			<div class="slide">
				<div class="desc">
					<h1>About</h1>
					<p>How It's Built</p>
					<p>Data is retrieved using API from:</p>
					<ul>
						<li>
							Trove, the National Library of Australia, for historical articles
						</li>
						<li>
							Wikipedia, the Free Encyclopedia for factual information
						</li>
						<li>
							Wikimedia Commons for amazing photos of native animals
						</li>
					</ul>
				</div>
				<div class="pict">
					<img src="../images/login/commons.png" id="wiki">
					<img src="../images/login/wikipedia.png" id="wikipedia">
					<img src="../images/login/trove.png" id="trove">
				</div>
			</div>
			<div class="slide">
				<div class="desc">
					<h1>About</h1>
					<p>What's inside</p>
					<ul>
						<li>
							12 native Queensland animals
						</li>
						<li>
							70+ images and articles to help kids learn more about extinct species
						</li>
						<li>
							70+ quiz questions to help kids memorize key data
						</li>
					</ul>
				</div>
				<div class="pict">
					<img src="../images/login/sun.png" id="sun">
				</div>
			</div>

		</div>
		<div class="section" id="section3">
			<div class="content">
				<h1>Team</h1>
				<div id="teams">
					<h2>
						The great team behind Findamals made the game a reality.
					</h2>				
					<div class="member">
						<span class="name">Leila Watson</span>
						<img src="../images/login/leila.png">
						<span class="role">Team Leader</span>
					</div>
					<div class="member">
						<span class="name">Nhi Ho</span>
						<img src="../images/login/nhi.png">
						<span class="role">Backend Developer</span>
					</div>
					<div class="member">
						<span class="name">Paul Lai</span>
						<img src="../images/login/paul.png">
						<span class="role">Designer</span>
					</div>
					<div class="member">
						<span class="name">Helen Nesterenko</span>
						<img src="../images/login/helen.png">
						<span class="role">Designer</span>
					</div>
				<div>
			</div>
		</div>
	</div>
	</body>
</html>