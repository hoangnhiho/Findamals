<html>
    <head>
        <link href="http://fonts.googleapis.com/css?family=Lekton" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="/css/reset.css" />    
        <link type="text/css" rel="stylesheet" href="/css/style.css" /> 

        <!-- Scripts -->

        <script src="/js/jquery-1.6.3.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
        <script src="/js/jquery.spritely.js" type="text/javascript"></script>  
        <script src="/js/data.js" type="text/javascript"></script>  
        <script src="/js/game.js" type="text/javascript"></script>

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

        <!-- Google Analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-23746310-1']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
<body onload="startGame()">
	<!-- Facebook like -->
	<div id="fb-root"></div>

	<!-- Google +1 -->
	<script type="text/javascript">
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>

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
	
	<!--
	<div id="share">
		<div class="fb-like" data-href="http://danielsternlicht.com/" data-send="false" data-layout="box_count" data-width="50" data-show-faces="false" data-font="lucida grande"></div>
		<a href="https://twitter.com/share" data-url="http://danielsternlicht.com" data-count="vertical" data-via="dsternlicht" class="twitter-share-button">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<div class="g-plusone" data-size="tall" data-href="http://danielsternlicht.com"></div>
	</div>
	-->
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
		<div id="leftFence"></div>
		<div id="rightFence"></div>
		
		<!-- Me -->
		<div id="daniel"></div>
		
		<!-- Stop Station 1 -->
		<div id="aboutRoad" class="road side"></div>
		<div id="aboutHouse" class="house">
			<div class="door"></div>
			<div class="lightbox">
				<div class="inner about">
					<h2>Findamals</h2>
					<img src="images/aboutImg.png" alt="Charizard" /> <!--http://orig04.deviantart.net/fa4b/f/2011/338/4/0/charizard_by_kawiko-d4i57kw.png-->
					<article>
						<p><strong>Hi There</strong>!</p>
						<p>
							We are <strong>Findamals </strong> and we're a highly motivated <strong>Front/Back End Developer</strong> 
                            with a great passion for <br />UX and Web Design.
						</p>
                        <p>
                            Findamals is web application using a touch-based interface primarily aimed at tablet devices. 
                            However it also must be fully responsive and usable on mobile and desktop devices.
                        </p>
                        <p><strong>Tech:</strong>!</p>
                        <p>
                            Web App Language: PHP <br />
                            Web App Frameworks: Laravel 5.0<br />
                            Frontend Languages: HTML5, CSS3 and JavaScript<br />
                            Frontend Frameworks/extensions: Bootstrap, jQuery and spritely.js<br />
                            Backend database management system: mySQL<br />
                            IDE: Brackets<br />
                            Server/zone: uqcloud.net<br />
                            APIs: Trove (Photo, Video, Article), Qld Wildlife (Names, Photo, Status), Wikipedia (intro text)<br />
                        </p>
                        <p>Cheers,<br />Findamals</p>
                   </article>
				</div>
			</div>
		</div>
		<div id="aboutSign" class="sign"><span>About Findamals</span></div>
		<div id="aboutHole" class="hole"></div>

		<!-- Stop Station 2 -->
		<div id="servicesRoad" class="road side"></div>
		<div id="servicesHouse" class="house">
			<div class="door"></div>
			<div class="lightbox">
				<div class="inner services">
					<h2>Services & Skills</h2>
					<section>
						<h3>Things that I do</h3>
						<div id="sWebsites" class="box clearfix">
							<div class="icon"></div>
							<h4>Beautiful Websites</h4>
							<p>We design beautiful websites with a large emphasis for <strong>UX and UI design</strong>.</p>
						</div>
						<div id="sCode" class="box clearfix">
							<div class="icon"></div>
							<h4>Awesome Web Apps</h4>
							<p>We enjoy developing web apps with great concepts. Clean code, Maintenance, Short schedules & Great results are the way we work.</p>
						</div>
						<div id="sThinking" class="box clearfix">
							<div class="icon"></div>
							<h4>Creative Direction</h4>
							<p>If you have an idea for a new website or web app, we can help you expanding your idea and make it happen.</p>
						</div>
					</section>
					<section id="skillsList">
						<h3>How?</h3>
						<ul>
							<li>Photoshop</li>
							<li>Illustrator</li>
							<li>UX Touch</li>
						</ul>
						<ul>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>JavaScript, jQuery</li>
							<li>Wordpress</li>
							<li>PHP & MySQL</li>
						</ul>
						<ul>
							<li>Research</li>
							<li>Out Of The Box Thinking</li>
							<li>Innovation</li>
							<li>Web Trends Analyzing</li>
						</ul>
					</section>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div id="servicesSign" class="sign"><span>Services & Skills</span></div>
		<div id="servicesHole" class="hole"></div>
		
		<!-- Stop Station 3 -->
		<div id="portfolioRoad" class="road side"></div>
		<div id="portfolioHouse" class="house">
			<div class="door"></div>
			<div class="lightbox">
				<div class="inner portfolio clearfix">
					<h2>Findamals Team</h2>
					<div class="portfolioBox">
						<div class="inner">
							<a class="portfolioImg" href="{{ url('/leila') }}" target="_blank">
								 <img src="../images/login/leila.png" alt="Leila" /> 
							</a>
							<h4>Leila</h4>
							<p>Project leader, time management, front and back-end development, UX, art direction, documentation, final check on documentation</p>
						</div>
					</div>
					<div class="portfolioBox">
						<div class="inner">
							<a class="portfolioImg" href="{{ url('/helen') }}" target="_blank">
								 <img src="../images/login/helen.png" alt="helen" /> 
							</a>
							<h4>Helen</h4>
							<p>UX, UI, Visual design, user research and testing, documentation, front-end development, content management</p>
						</div>
					</div>
					<div class="portfolioBox">
						<div class="inner">
							<a class="portfolioImg" href="{{ url('/paul') }}" target="_blank">
								 <img src="../images/login/paul.png" alt="paul" /> 
							</a>
							<h4>Paul</h4>
							<p>UX, UI, Visual design, user research and testing, documentation, front-end development</p>
						</div>
					</div>
					<div class="portfolioBox">
						<div class="inner">
							<a class="portfolioImg" href="{{ url('/demo') }}" target="_blank">
								 <img src="../images/login/nhi.png" alt="nhi" /> 
							</a>
							<h4>Nhi</h4>
							<p>Technical lead, front and back-end development, documentation</p>
						</div>
					</div>
				
					<div class="shelf"></div>
				</div>
			</div>
		</div>
		<div id="portfolioSign" class="sign"><span>Findmals Team Members</span></div>
		<div id="portfolioHole" class="hole"></div>

		<!-- View -->
		<div id="rightTrees" class="trees"></div>
		<div id="leftGrass" class="grass"></div>

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

</body>
</html>