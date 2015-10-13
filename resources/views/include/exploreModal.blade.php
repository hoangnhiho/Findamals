<script>
function correctAns(animal){
	animalArray[randnumber] = tempArray[0] + ' ' + (parseInt(tempArray[1])+1).toString();
	// console.log(animalArray[randnumber]);
	// console.log(animalArray);
	var url = "{{url('addExp')}}" + "/" + animal + "/1";
	$.ajax({
		url : url,
		success : function (data) {
			$(".modal").modal('hide');
			$("#correntAns").modal('show');
			$("#winModalTitle").html("YAY Winning!!! Point added " + animal);
		}
	});
}
function loadCollection(){
	$(".modal").modal('hide');
	window.location.replace("{{url('collection')}}");
}

</script>

<!-- Accept or Flee Modal-->
<div id="acceptModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
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

@include('include.koalaModal')
@include('include.wallabyModal')
@include('include.wombatModal')
@include('include.bilbyModal')
@include('include.kangarooModal')

<!-- Correct / Incorrection Modals -->
<div id="correntAns" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="winModalTitle"></h4>
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
				<button type="button" class="close" data-dismiss="modal">&times;</button>
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
<div id="howToPlay" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">How to play</h4>
			</div>
			<div class="modal-body">
			<img src="images/howToPlay.PNG" style="width:100%;">
			<!-- 	<p>Use arrow keys to navigate your avatar and explore the terrains.</p>
				<p>If an object moves, <strong>CLICK IT!!</strong></p>
				<p>Meet animals and get to know them better by learning amazing facts and them and their habitats.</p>
				<p>Answer questions and earn stars.</p>
				<p>Unlock terrains with your stars. Explore even more terrains and meet more amazing animals</p>
			 --></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
