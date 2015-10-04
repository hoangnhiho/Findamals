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
  <link type="text/css" rel="stylesheet" href="/css/terrain3CSS.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/exploreModalCSS.css" /> 
  <link type="text/css" href="{{ asset('/css/navCSS.css') }}" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="css/modalWindowDefault.css" />
  <link rel="stylesheet" type="text/css" href="css/modalWindowComponent.css" />
  
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="{{ asset('/js/leilaJS.js') }}"></script>
  <script type="text/javascript"> 
      $(document).bind("mobileinit", function () {
      $.event.special.tap.tapholdThreshold = 0;
  });
  </script>
  <script src="js/modernizr.custom.js"></script>
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/jquery.spritely.js" type="text/javascript"></script> 
  <script src="/js/terrain1dataJS.js" type="text/javascript"></script> 
  @include('include.hiddenVariables') 
  <script src="/js/terrain3JS.js" type="text/javascript"></script>
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
<!--   <nav>
    <ul class="clearfix">
      <li><a class="current" href="{{ url('/') }}">Finamals</a></li>
      <li><a href="{{ url('/leila') }}">Collection Page</a></li>
            <li><a href="#">?</a></li>
            <li class="last"><a href="{{ url('/auth/logout') }}">Logout</a></li>
    </ul>
  </nav> -->
 

  <!-- Notifications Manager -->
  <div id="notifications"><div class="inner"></div><span class="close">x</span></div>
  
  <div id="wrapper">   
  <div id="container">
    <div class="nav-container">
      <nav class="nav">
        <ul>
          <li><img id="nav-logo" src="{{ asset('/images/findamals-logo.png') }}"></li>
          <li><a href="{{ url('/terrain1') }}"><img src="{{ asset('/images/nav-bush-icon-active.png') }}" alt="bush terrain icon" class="nav-icon inactive"></a></li>
          <li><a href="{{ url('/terrain2') }}"><img src="{{ asset('/images/nav-rainforest-icon-active.png') }}" alt="rainforest terrain icon" class="nav-icon inactive"></a></li>
          <li><a href="{{ url('/terrain3') }}"><img src="{{ asset('/images/nav-ocean-icon-active.png') }}" alt="ocean terrain icon" class="nav-icon"></a></li>
          <li><a href="{{ url('/leila') }}"><img src="{{ asset('/images/nav-collection.png') }}" alt="animal collection icon" class="nav-icon inactive"></a></li>
          <li><a href="#"><img src="{{ asset('/images/nav-help.png') }}" alt="help icon" class="nav-icon inactive"></a></li>
          <li class="last"><a href="#"><img src="{{ asset('/images/nav-user.png') }}" alt=" user account icon" class="nav-icon inactive"></a></li>
        </ul>
      </nav>
    </div>
   </div>


    <!-- Main Road -->
    <div id="mainRoad" class="road"></div>
    <!-- Me -->
    <div id="daniel"></div>

	<!-- ====All OBJECTS BELOW==== -->
    <!-- Collision OBJECTS BELOW -->
    
    <!-- Trees -->
    <div id="treeHeaderLeft" class="colObject leftColObject"></div>
    <div id="treeHeaderRight" class="colObject rightColObject"></div>

    <div id="treeLeft" class="treeBorder"></div>
    <div id="treeRight" class="treeBorder"></div>

    <div id="treeLeft1" class="colObject leftColObject"></div>
    <div id="treeLeft2" class="colObject leftColObject"></div>
    
    <div id="treeRight1" class="colObject rightColObject"></div>
    <div id="treeRight2" class="colObject rightColObject"></div>

    <div id="treeFooterLeft" class="colObject leftColObject"></div>
    <div id="treeFooterRight" class="colObject rightColObject"></div>

    <!-- Caves -->
    <div id="cave1" class="colObject rightColObject"></div>
    <div id="cave2" class="colObject leftColObject"></div>
    <div id="cave3" class="colObject rightColObject"></div>
    <div id="cave4" class="colObject leftColObject"></div>

    <!-- Rocks -->
    <div id="rock1" class="colObject leftColObject"></div>
    <div id="rock2" class="colObject leftColObject"></div>
    <div id="rock3" class="colObject rightColObject"></div>

    <div id="rock4" class="phazeObject"></div>
	
	<!-- Phaze OBJECTS BELOW -->
    <!-- Path -->
    <div id="path" class="phazeObject"></div>

    <!-- Grass -->
    <div id="longGrass1" class="phazeObject"></div>
    <div id="longGrass2" class="phazeObject"></div>

    <!-- ====End of ALL Objects==== -->

    <!-- Next terrain: Ocean -->
    <div id="endOcean" class="ocean"></div>   

    
  </div>

<img src="../images/wood.png" style="display: none;" />


<button type="button" class ="gamePad btn btn-default" id = "arrowUp"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowDown"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowLeft"> </button>
<button type="button" class ="gamePad btn btn-default" id = "arrowRight"></button>
<button class="md-trigger" data-modal="modal-4">Blur</button>
<!--$('#modal-4').addClass('md-show') $('#modal-4').removeClass('md-show')-->
<div class="md-modal md-effect-4" id="modal-4">
  <div class="md-content">
    <h3>Modal Dialog</h3>
    <div>
      <p>This is a modal window. You can do the following things with it:</p>
      <ul>
        <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
        <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
        <li><strong>Close:</strong> click on the button below to close the modal.</li>
      </ul>
      <button class="md-close">Close me!</button>
    </div>
  </div>
</div>
@include('include.exploreModal')
<div class="md-overlay"></div><!-- the overlay element -->
</body>
  <script src="js/modalCustomJs/classie.js"></script>
  <script src="js/modalCustomJs/modalEffects.js"></script>

  <!-- for the blur effect -->
  <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
  <script>
    // this is important for IEs
    var polyfilter_scriptpath = '/js/';
  </script>
  <script src="js/modalCustomJs/cssParser.js"></script>
  <script src="js/modalCustomJs/css-filters-polyfill.js"></script>
</html>