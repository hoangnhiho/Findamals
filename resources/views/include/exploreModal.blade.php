<script>
function correctAns(animal){
	animalArray[randnumber] = tempArray[0] + ' ' + (parseInt(tempArray[1])+1).toString();
	animalArrayObjects[randnumber].exp = (parseInt(tempArray[1])+1).toString();
	var url = "{{url('addExp')}}" + "/" + animal + "/1";
	$.ajax({
		url : url,
		success : function (data) {
			$(".modal").modal('hide');
			$("#correntAns").modal('show');
			$("#winModalTitle").html("YAY Winning!!! Point added " + animal);
		}
	});
	var tempNextTerrainCheck = 0;
	for (i = 0; i < animalArrayObjects.length; i++) { 
		tempNextTerrainCheck = tempNextTerrainCheck + parseInt(animalArrayObjects[i].exp);
	}
	if (tempNextTerrainCheck == 5){
		if (terrainValue == 'terrain1'){
			window.location.replace("{{url('terrain1')}}");
		}else if (terrainValue == 'terrain2'){
			window.location.replace("{{url('terrain2')}}");
		}
		
	}
}
function loadCollection(){
	$(".modal").modal('hide');
	window.location.replace("{{url('collection')}}");
}

</script>

<!-- Fonts -->
  <link type="text/css"href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' >
  <link type="text/css"href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' >
  
<!-- Accept or Flee Modal-->
<div id="acceptModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 
				<h4 class="modal-title">Found Animal</h4>
			</div>
			<div class="modal-body">
				<img class="" id="animalImg" src="http://orig02.deviantart.net/6e18/f/2010/255/3/b/battle_on_mt__silver_by_serain-d2yjudv.jpg" alt="Findamals Koala Character">
				
			</div>
			<div class="modal-footer">
				<button id="acceptBtn" type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" href="">Discover</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>
@if ($_SERVER['REQUEST_URI'] == '/terrain1')
	@include('include.koalaModal')
	@include('include.wallabyModal')
	@include('include.wombatModal')
	@include('include.bilbyModal')
	@include('include.kangarooModal')
@elseif ($_SERVER['REQUEST_URI'] == '/terrain2')
	@include('include.cockatooModal')
	@include('include.platypusModal')
	@include('include.cassowaryModal')
	@include('include.frogModal')
@elseif ($_SERVER['REQUEST_URI'] == '/terrain3')
	@include('include.whaleModal')
	@include('include.turtleModal')
	@include('include.sharkModal')
@else
	<!-- SOMETHING WENT WRONG!!! -->
@endif

<!-- Correct / Incorrection Modals -->
<div id="correntAns" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 
				<h4 class="modal-title" id="winModalTitle"></h4>
			</div>
			<div class="modal-body">
				<img class="" id="animalImg" src="images/happy-koala.png" alt="Findamals Koala Character">
				
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Return to game</button>
				<a type="button" class="btn btn-default" onclick="loadCollection()">Go to Collection Page</a>
			</div>
		</div>
	</div>
</div>

<div id="incorrectAns" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 
				<h4 class="modal-title">Oops! Wrong answer</h4>
			</div>
			<div class="modal-body">
				<img class="" id="animalImg" src="images/crying.png" alt="Findamals Koala Character">
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Return to game</button>
				<a type="button" class="btn btn-default" onclick="loadCollection()">Go to Collection Page</a>
			</div>
		</div>
	</div>
</div>

<!-- How to Play Modal-->

<!-- How to Play Modal-->
<div id="howToPlay" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 
				<h4 class="modal-title">How to play</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-2 howToPlayImg">
						<img src="images/keyboardArrows.png">
					</div>
					<div class="col-sm-10 howToPlayText">
						<p>Use the arrow keys or buttons to navigate your avatar and explore the terrains.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 howToPlayImg">
						<img src="images/tutorial_find.png">
					</div>
					<div class="col-sm-10 howToPlayText">
						<p>Find animals to collect by exploring and tapping on objects in the terrain</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 howToPlayImg">
						<img src="images/tutorial_fact.png">
					</div>
					<div class="col-sm-10 howToPlayText">
						<p>Meet animals and get to know them better by learning amazing facts and them and their habitats</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 howToPlayImg">
						<img src="images/tutorial_star.png">
					</div>
					<div class="col-sm-10 howToPlayText">
						<p>Play quizzes to earn stars, add animals to your collection and discover interesting photos and articles!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 howToPlayImg">
						<img src="images/tutorial_keyBlue.png">
					</div>
					<div class="col-sm-10 howToPlayText">
						<p>Unlock terrains with your stars. Explore even more terrains and meet more amazing animals</p>
					</div>
				</div>

				
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>


<!-- Accept or Flee Modal-->
<div id="unlockModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				 
				<h4 class="modal-title">Contraguations!!! Next Terrain has been unlocked!!</h4>
			</div>
			<div class="modal-body">
				<img class="" id="animalImg" src="images/aboutImg.png" alt="Findamals Koala Character">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>