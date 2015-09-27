<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" charset="utf-8"content="width=1024, initial-scale=1.5">
  <title>Findamals</title>
  <link href="http://fonts.googleapis.com/css?family=Lekton" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet" type="text/css">
      <!-- Latest compiled and minified CSS -->
  <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/reset.css" />    
  <link type="text/css" rel="stylesheet" href="/css/baseTerrainCSS.css" /> 

  <link type="text/css" rel="stylesheet" href="/css/nhiCSS.css" /> 

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript"> 
      $(document).bind("mobileinit", function () {
      $.event.special.tap.tapholdThreshold = 0;
  });
  </script>
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/jquery.spritely.js" type="text/javascript"></script> 
  <script src="/js/nhiDataJS.js" type="text/javascript"></script> 
  @include('include.hiddenVariables') 
  <script src="/js/nhiJS.js" type="text/javascript"></script>
  <script src="/js/bootstrap.min.js" type="text/javascript"></script>
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
      <li><a href="{{ url('/leila') }}">Collection Page</a></li>
            <li><a href="#">?</a></li>
            <li class="last"><a href="{{ url('/auth/logout') }}">Logout</a></li>
    </ul>
  </nav>

  <!-- Notifications Manager -->
  <div id="notifications"><div class="inner"></div><span class="close">x</span></div>
  
  <div id="wrapper">   
    <!-- Main Road -->
    <div id="mainRoad" class="road"></div>
    <!-- Me -->
    <div id="daniel"></div>

    <!-- OBJECTS BELOW -->
    <!-- Trees -->
    <div id="treeHeaderLeft" class="colObject leftColObject"></div>
    <div id="treeHeaderRight" class="colObject rightColObject"></div>


    <div id="treeLeft" class="treeBorder"></div>
    <div id="treeRight" class="treeBorder"></div>

    <div id="treeLeft1" class="colObject leftColObject"></div>
    
    <div id="treeRight1" class="colObject rightColObject"></div>
    <div id="treeRight2" class="colObject rightColObject"></div>

    <div id="treeFooterLeft" class="colObject leftColObject"></div>
    <div id="treeFooterRight" class="colObject rightColObject"></div>

    <!-- Caves -->
    <div id="cave1" class="colObject rightColObject"></div>
    <div id="cave2" class="colObject leftColObject"></div>
    <div id="cave3" class="colObject rightColObject"></div>
    
    <!-- Rocks -->
    <div id="rock1" class="colObject leftColObject"></div>
    <div id="rock2" class="colObject leftColObject"></div>
    <div id="rock3" class="colObject rightColObject"></div>

    <!-- Path -->
    <div id="path" class="phazeObject"></div>

    <div id="longGrass1" class="phazeObject"></div>
    <div id="longGrass2" class="phazeObject"></div>

    <!-- End of Objects -->
    <!-- Sea -->
    <div id="endSea" class="sea"></div>   
    <div id="endBridge" class="bridge"></div>

    <div id="boat" class="isMoored">
      <div class="meSail"></div>
    </div>
    <div id="contact">
      <h1>Stay In Touch</h1>
      <p>Feel free to leave your comment about anything you want.</p>
      <div id="comments">
        <noscript>Please enable JavaScript to view the <a>comments powered by Disqus.</a></noscript>
      </div>
    </div>

    
  </div>

<img src="../images/wood.png" style="display: none;" />


<button type="button" class ="gamePad btn btn-default" id = "arrowUp"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowDown"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowLeft"> </button>
<button type="button" class ="gamePad btn btn-default" id = "arrowRight"></button>

@include('include.exploreModal')
</body>

</html>