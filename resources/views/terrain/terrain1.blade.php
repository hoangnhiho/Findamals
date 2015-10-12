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
  <link type="text/css" rel="stylesheet" href="/css/terrain1CSS.css" /> 
  <link type="text/css" rel="stylesheet" href="/css/exploreModalCSS.css" /> 
  <link type="text/css" href="{{ asset('/css/app.css') }}" rel="stylesheet">
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

  <!-- Notifications Manager -->
  <div id="notifications"><div class="inner"></div><span class="close">x</span></div>
  
  <div id="wrapper">   

  <div class="nav-container">
    <nav class="nav">
        <ul>
        <li><img id="nav-logo" src="{{ asset('/images/findamals-logo.png') }}"></li>
        <li><a href="#"><img src="{{ asset('/images/nav-bush-icon-active.png') }}" alt="bush terrain icon" class="nav-icon" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bush Terrain"></a></li>
        @if ($terrainValue >= 2)
        <li><a href="{{ url('/terrain2') }}"><img src="{{ asset('/images/nav-rainforest-icon-active.png') }}" alt="rainforest terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Rainforest Terrain"></a></li>
        @else 
        <li class="locked"><img src="{{ asset('/images/nav-rainforest-icon-locked.png') }}" alt="rainforest terrain icon locked" class="nav-icon"></li>
        @endif

        @if ($terrainValue == 3)
        <li><a href="{{ url('/terrain3') }}"><img src="{{ asset('/images/nav-ocean-icon-active.png') }}" alt="ocean terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ocean Terrain"></a></li>
        @else 
        <li class="locked" ><img src="{{ asset('/images/nav-ocean-icon-locked.png') }}" alt="ocean terrain icon locked" class="nav-icon"></li>
        @endif

        <li><a href="{{ url('/collection') }}"><img src="{{ asset('/images/nav-collection.png') }}" alt="animal collection icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="My Collection"></a></li>
        <li><img data-toggle="modal" data-target="#howToPlay" src="{{ asset('/images/nav-help.png') }}" alt="help icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="How to Play"></li>
        <li class="last"><a href="#"><img src="{{ asset('/images/nav-user.png') }}" alt=" user account icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="My Profile"></a></li>
      </ul>
    </nav>
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
    <div id="treeLeft3" class="colObject leftColObject"></div>
    <div id="treeLeft4" class="secretObject colObject leftColObject"></div>
    <div id="treeLeft5" class="colObject leftColObject"></div>
    <div id="treeLeft6" class="secretObject colObject leftColObject"></div>
    
    <div id="treeRight1" class="secretObject colObject rightColObject"></div>
    <div id="treeRight2" class="colObject rightColObject"></div>
    <div id="treeRight3" class="colObject rightColObject"></div>

    <div id="treeFooterLeft" class="colObject leftColObject"></div>
    <div id="treeFooterRight" class="colObject rightColObject"></div>

    <!-- Caves -->
    <div id="cave1" class="colObject rightColObject"></div>
    <div id="cave2" class="secretObject colObject leftColObject"></div>
    <div id="cave3" class="secretObject colObject rightColObject"></div>
    <div id="cave4" class="colObject leftColObject"></div>

    <!-- Rocks -->
    <div id="rock1" class="colObject leftColObject"></div>
    <div id="rock2" class="colObject leftColObject"></div>
    <div id="rock3" class="colObject rightColObject"></div>
	
	<!-- Phaze OBJECTS BELOW -->
    <!-- Path -->
    <div id="path" class="phazeObject"></div>

    <!-- Grass -->
    <div id="longGrass1" class="phazeObject"></div>
    <div id="longGrass2" class="phazeObject"></div>
    <div id="longGrass3" class="phazeObject"></div>

    <!-- Blossom -->
    <div id="blossom1" class="phazeObject"></div>
    <div id="blossom2" class="phazeObject"></div>

    <!-- ====End of ALL Objects==== -->

    <!-- Sea -->
    <div id="endTerrain1" class="sea"></div>   
    <div id="terrain2" class="terrainChange phazeObject"></div>

  </div>

<img src="../images/wood.png" style="display: none;" />


<button type="button" class ="gamePad btn btn-default" id = "arrowUp"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowDown"></button>
<button type="button" class ="gamePad btn btn-default" id = "arrowLeft"> </button>
<button type="button" class ="gamePad btn btn-default" id = "arrowRight"></button>

@include('include.exploreModal') 
</body>

<script type="text/javascript">

$( document ).ready(function() {
	if (parseInt($('#koalaExp').val()) + parseInt($('#wallabyExp').val()) + parseInt($('#wombatExp').val()) 
		+ parseInt($('#bilbyExp').val()) + parseInt($('#kangarooExp').val()) == 0 ){
		$('#howToPlay').modal('show');  
	} 
	//this needs needs to be repetitively added to all terrain pages
	$('.secretObject').click(function(e){
		if (nearSecret==1){
			tempString = animalArray[0];//0 is koala as default
			if(this.id == 'treeRight1'){
		    	tempString = animalArray[0];//0 is koala
			}else if(this.id == 'treeLeft4'){
				tempString = animalArray[1];//1 is wallaby
			}else if(this.id == 'cave2'){
				tempString = animalArray[2];//2 is wombat
			}else if(this.id == 'cave3'){
				tempString = animalArray[3];//3 is bilby
			}else if(this.id == 'treeLeft6'){
				tempString = animalArray[4];//4 is kangaroo
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