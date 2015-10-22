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
  
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript"> 
      $(document).bind("mobileinit", function () {
      $.event.special.tap.tapholdThreshold = 0;
  });
  </script>
  <script src="/js/jquery-ui.min.js"></script>
  <script src="/js/jquery.spritely.js" type="text/javascript"></script> 
  <script src="/js/terrain1dataJS.js" type="text/javascript"></script> 
  @include('include.hiddenVariables') 
  <script src="/js/terrain1JS.js" type="text/javascript"></script>
  <script src="/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript"> 
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
        $('#innerLoading .me').sprite({fps: 9, no_of_frames: 3}).spState(1);
        var game = new Game();
        $('.inactive').hover(
       function(){ $(this).removeClass('inactive') },
       function(){ $(this).addClass('inactive') }
      )
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

@include('include.audio')

  <!-- Notifications Manager -->
  <div id="notifications"><div class="inner"></div><span class="close">x</span></div>
  
  <div id="wrapper">   
  <div id="container">
    <div class="nav-container">
      <nav class="nav">
        <ul>
        <li><a href="{{ url('/collection') }}"><img id="nav-logo" src="{{ asset('/images/findamals-logo.png') }}"></a></li>
          <li><a href="{{ url('/terrain1') }}"><img src="{{ asset('/images/nav-bush-icon-active.png') }}" alt="bush terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bush Terrain"></a></li>
          @if ($terrainValue >= 2)
          <li><a href="{{ url('/terrain2') }}"><img src="{{ asset('/images/nav-rainforest-icon-active.png') }}" alt="rainforest terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Rainforest Terrain"></a></li>
          @else 
          <li class="locked"><img src="{{ asset('/images/nav-rainforest-icon-locked.png') }}" alt="rainforest terrain icon locked" class="nav-icon "></li>
          @endif

          @if ($terrainValue == 3)
          <li><a href="#"><img src="{{ asset('/images/nav-ocean-icon-active.png') }}" alt="ocean terrain icon" class="nav-icon " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ocean Terrain"></a></li>
          @else 
          <li class="locked" ><img src="{{ asset('/images/nav-ocean-icon-locked.png') }}" alt="ocean terrain icon locked" class="nav-icon"></li>
          @endif

          <li><a href="{{ url('/collection') }}"><img src="{{ asset('/images/nav-collection.png') }}" alt="animal collection icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="My Collection"></a></li>
          <li><img data-toggle="modal" data-target="#howToPlay" src="{{ asset('/images/nav-help.png') }}" alt="help icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="How to Play"></li>
          <li class="last"><a href="{{ url('/auth/logout') }}"><img src="{{ asset('/images/nav-user.png') }}" alt=" user account icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Logout"></a></li> 
      </ul>
      </nav>
    </div>
   </div>


    <!-- Main Road -->
    <div id="mainRoad" class="road"></div>
    <!-- Me -->
    <div id="daniel"></div>

    <div id="startRainForest" class="forest"></div> 
    <div id="terrain2" class="terrainChange phazeObject"></div>

	<!-- ====All OBJECTS BELOW==== -->
    <!-- Collision OBJECTS BELOW -->
    
    <!-- Rocks -->
    <div id="rockHeaderLeft" class="colObject leftColObject"></div>
    <div id="rockHeaderRight" class="colObject rightColObject"></div>

    <div id="rockLeft" class="rockBorder"></div>
    <div id="rockRight" class="rockBorder"></div>

    <div id="rockLeft1" class="colObject leftColObject"></div>
    <div id="rockLeft2" class="colObject leftColObject"></div>
    
    <div id="rockRight1" class="colObject rightColObject"></div>
    <div id="rockRight2" class="colObject rightColObject"></div>

    <div id="rockFooterLeft" class="colObject leftColObject"></div>
    <div id="rockFooterRight" class="colObject rightColObject"></div>

    <!-- Caves -->
    <div id="cave1" class="secretObject colObject rightColObject"></div>
    <div id="cave2" class="colObject leftColObject"></div>    
    <div id="cave3" class="colObject leftColObject"></div>
 

    <!-- Rocks -->
    <div id="rock1" class="colObject leftColObject"></div>
    <div id="rock2" class="colObject leftColObject"></div>
    <div id="rock3" class="colObject rightColObject"></div>
    <div id="rock4" class="colObject leftColObject"></div>
    <div id="rock5" class="colObject leftColObject"></div>
    <div id="rock6" class="colObject rightColObject"></div>
    <div id="rock7" class="colObject leftColObject"></div>
    <div id="rock8" class="colObject rightColObject"></div>
    <div id="rock9" class="secretObject colObject leftColObject"></div>
    
    <!-- Ferrys -->
    <div id="ferry1" class="colObject rightColObject"></div>
    <div id="ferry2" class="secretObject colObject leftColObject"></div>

    <!-- Shells -->
    <div id="shell1" class="colObject leftColObject"></div>
    <div id="shell2" class="colObject leftColObject"></div>
    <div id="shell3" class="colObject leftColObject"></div>
	
	<!-- Phaze OBJECTS BELOW -->
    <!-- Path -->
    

    <!-- Grass -->
    <div id="longGrass1" class="phazeObject"></div>
    <div id="longGrass2" class="phazeObject"></div>
    
    <!-- Cave -->
    <div id="cave01" class="phazeObject"></div>
    <div id="cave02" class="phazeObject"></div>
    <div id="cave03" class="phazeObject"></div>
    <div id="cave04" class="phazeObject"></div>


    <!-- ====End of ALL Objects==== -->

    
  </div>

<button type="button" class ="gamePad btn btn-default" id = "arrowUp"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowDown"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowLeft"> </button>
<button type="button" class ="gamePad btn btn-default" id = "arrowRight"></button>

@include('include.exploreModal')

</body>
<script type="text/javascript">

$( document ).ready(function() {
  //this needs needs to be repetitively added to all terrain pages
  $('.secretObject').click(function(e){
    if (nearSecret==1){
      tempString = animalArray[0];//0 is whale as default
      if(this.id == 'rock9'){
        randnumber = 0;
        tempString = animalArray[randnumber];//0 is whale
      }else if(this.id == 'cave1'){
        randnumber = 1;
        tempString = animalArray[randnumber];//1 is turtle
      }else if(this.id == 'ferry2'){
        randnumber = 2;
        tempString = animalArray[randnumber];//2 is shark
      }

        tempArray = tempString.split(" ");
        tempAnimal = "#" + tempArray[0] + "Quest" + tempArray[1];
        var tempURL = globalURL + 'images/animals/' + tempArray[0] + ".png";
        $('#animalImg').attr('src', tempURL);
        $('#acceptBtn').attr('href', tempAnimal);
        $('#acceptModal').modal('show');
    }
  });

});
</script>
</html>