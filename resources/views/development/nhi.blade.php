<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<title>Findamals</title>
        <link href="http://fonts.googleapis.com/css?family=Lekton" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet" type="text/css">
        		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="/css/reset.css" />    
        <link type="text/css" rel="stylesheet" href="/css/style.css" /> 
        <link type="text/css" rel="stylesheet" href="/css/nhiCSS.css" /> 

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <script type="text/javascript">	
            $(document).bind("mobileinit", function () {
        		$.event.special.tap.tapholdThreshold = 0;
    		});
		</script>
        <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <script src="/js/jquery-ui.min.js"></script>
        <script src="/js/jquery.spritely.js" type="text/javascript"></script> 
        <script src="/js/data.js" type="text/javascript"></script>  
        <script src="/js/nhiJS.js" type="text/javascript"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>




        <script type="text/javascript">	
            $(document).ready(function(){
                $('#innerLoading .me').sprite({fps: 9, no_of_frames: 3}).spState(1);
                var game = new Game();
            });	

            function startGame() {
                $('html, body').animate({scrollTop: 0});
                $('#loadingGame').fadeOut('fast', function(){
                    $(this).remove();
                })
            }
        </script>

    </head>
<body onload="startGame()">

	<!-- Loader -->
	<div id="loadingGame"> 
		<div id="innerLoading">
			<div class="me"></div>
			<p>Just a few moments</p>
			<span>Don't go anywhere...</span>
		</div>
	</div>

	<!-- Navigation -->
	<nav>
		<ul class="clearfix">
			<li><a class="current" href="{{ url('/') }}">Finamals</a></li>
			<li><a href="{{ url('/leila') }}">Leila</a></li>
			<li><a href="{{ url('/helen') }}">Helen</a></li>
			<li><a href="{{ url('/paul') }}">Paul</a></li>
            <li><a href="#portfolioHouse">The Team</a></li> 
            <li><a href="#aboutHouse">About us</a></li>
            <li><a href="#howToPlay">?</a></li>
            <li class="last"><a href="{{ url('/auth/logout') }}">Logout</a></li>
		</ul>
	</nav>

	<!-- Notifications Manager -->
	<div id="notifications"><div class="inner"></div><span class="close">x</span></div>
	
	<div id="wrapper">			
		
		<!-- Main Text -->
		<hgroup id="myInfo">
			<h1>FindAmals <br />weeee</h1>
			<h2>Pokemon Wannabies</h2>
		</hgroup>

		<!-- Start Text -->
		<p id="startText">
			<img src="images/keyboardArrows.png" alt="keyboard arrows" />
			Start playing by using <br />the keyboard arrows
		</p>

		<!-- Start Cave -->
		<div id="startCave" class="cave"></div>		
		<div id="startCaveHole" class="caveHole"></div>
		<div id="startCaveHoleTrack" class="caveHoleTrack"></div>
		
		<!-- Main Road -->
		<div id="mainRoad" class="road"></div>
<!-- 		<div id="leftFence"></div>
		<div id="rightFence"></div> -->
		
		<!-- Me -->
		<div id="daniel"></div>
		
		<!-- Stop Station 1 -->
		<!-- <div id="aboutRoad" class="road side"></div> -->


		<!-- View -->
<!-- 		<div id="rightTrees" class="trees"></div>
		<div id="leftGrass" class="grass"></div> -->

		<!-- End Cave -->
		<div id="endSea" class="sea"></div>		
		<div id="endBridge" class="bridge"></div>
		<!-- <div id="endCaveHoleGlow"></div> -->
		<div id="boat" class="isMoored">
			<div class="meSail"></div>
		</div>
		<div id="contact">
			<h1>Stay In Touch</h1>
			<div id="mysocial">
				<a href="http://il.linkedin.com/" target="_blank"><img src="images/social/linkedin.png" alt="LinkedIn" /></a>
				<a href="https://plus.google.com/" target="_blank"><img src="images/social/google.png" alt="Google+" /></a>
				<a href="http://twitter.com/" target="_blank"><img src="images/social/twitter.png" alt="Twitter" /></a>
				<a href="http://facebook.com/" target="_blank"><img src="images/social/facebook.png" alt="Facebook" /></a>
				<a href="mailto:fake@fakemail.com"><img src="images/social/gmail.png" alt="Gmail" /></a>
			</div>
			<p>Feel free to leave your comment about anything you want.</p>
			<div id="comments">
				<div id="disqus_thread"></div>
				<script type="text/javascript">					
					var disqus_shortname = 'FindAamals'; 									
					(function() {
						var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
		</div>

		<!-- Flowers -->
		<div class="trees t1"></div>

		<div class="flowers r1"></div>
		<div class="flowers r2"></div>
		<div class="flowers r3"></div>
		<div class="flowers r4"></div>
		<div class="flowers r5"></div>
		<div class="flowers r6"></div>
		<div class="flowers r7"></div>
		<div class="flowers r8"></div>
		<div class="flowers r9"></div>
		<div class="flowers r10"></div>
		<div class="flowers r11"></div>
		<div class="flowers r12"></div>
		
	</div>
	
	<div id="howToPlay">
		<div class="lightbox">
			<div class="inner howtoplay">
				<h2>How To Play?</h2>
				<article>					
					<div id="htpArrows" class="box clearfix">
						<div class="icon"></div>
						<p>Move by using the keyboard arrows</p>
					</div>
					<div id="htpHouses" class="box clearfix">
						<div class="icon"></div>
						<p>Enter houses to get some information about me and my projects</p>
					</div>
					<div id="htpMouse" class="box clearfix">
						<div class="icon"></div>
						<p>Teleport yourself directly to a specific point in the portfolio by left click</p>
					</div>
					<div id="htpEsc" class="box clearfix">
						<div class="icon"></div>
						<p>Press the "Esc" key to leave buildings and close the notifications bar</p>
					</div>
					<div id="htpShare" class="box clearfix">
						<div class="icon"></div>
						<p>Share me with your friends :)</p> 
					</div>
      	</article>				
			</div>
			<!--<div style="text-align: center; margin-top: 10px;"><a href="http://compareninja.com" target="_blank"><img src="http://danielsternlicht.com/images/cnbanner.png"></a></div>-->
		</div>
	</div>

<img src="../images/wood.png" style="display: none;" />


<button type="button" class ="gamePad btn btn-default" id = "arrowUp"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowDown"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowLeft"> </button>
<button type="button" class ="gamePad btn btn-default" id = "arrowRight"></button>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Animal Attack</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-danger" data-dismiss="modal">Fight</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>