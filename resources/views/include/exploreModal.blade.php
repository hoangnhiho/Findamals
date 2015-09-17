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
	window.location.replace("{{url('leila')}}");
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
				<img class="" id="animalImg" src="http://orig02.deviantart.net/6e18/f/2010/255/3/b/battle_on_mt__silver_by_serain-d2yjudv.jpg" alt="Findamals Koala Character" style="width:100%">
				
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
				<h4 class="modal-title">Sorry, wrong answer :( </h4>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Return to game</button>
				<a type="button" class="btn btn-default" onclick="loadCollection()">Go to Collection Page</a>
			</div>
		</div>
	</div>
</div>


