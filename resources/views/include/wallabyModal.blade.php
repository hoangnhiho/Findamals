<!-- Wallaby Modal-->
<div id="wallabyQuest0" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wallaby Question 1</h4>
			</div>
			<div class="modal-body">
				<h1>What animal is this? </h1>
				<img class="" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Kangaroo</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Crocodile</button></br>
				<button type="button" class="btn btn-default" id="wallaby" onclick="correctAns(this.id)">3. Brush-Tailed Rock Wallaby</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Rock Wallaby</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wallabyQuest1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wallaby Question 2</h4>
			</div>
			<div class="modal-body">
				<h1>Where do Brush-Tailed Rock Wallabies live?  </h1>
				<img class="" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Ocean</button></br>
				<button type="button" class="btn btn-default" id="wallaby" onclick="correctAns(this.id)">2. Rock piles and cliff lines</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Bushes</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. City</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wallabyQuest2" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wallaby Question 3</h4>
			</div>
			<div class="modal-body">
				<h1>How big is the population of Brush-Tailed Rock Wallabies? </h1>
				<img class="" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="wallaby" onclick="correctAns(this.id)">1. Extinct, need human protection</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Consistently growing</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Stable, the same number of species</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. They died out like dinosaurs</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wallabyQuest3" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wallaby Question 4</h4>
			</div>
			<div class="modal-body">
				<h1>In which states do Brush-Tailed Rock Wallabies live?  </h1>
				<img class="" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="wallaby" onclick="correctAns(this.id)">1. Queensland, New South Wales, Victoria </button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Perth</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Tasmania</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Asia</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wallabyQuest4" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wallaby Question 5</h4>
			</div>
			<div class="modal-body">
				<h1>In what other country can you find a Brush-tailed Rock Wallaby? </h1>
				<img class="" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. New Zealand</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. England</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Brazil</button></br>
				<button type="button" class="btn btn-default" id="wallaby" onclick="correctAns(this.id)">4. Hawaii</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wallabyQuest5" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wallaby Question 6</h4>
			</div>
			<div class="modal-body">
				<h1>What is another name for a Brush-tailed Rock Wallaby?</h1>
				<img class="" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="wallaby" onclick="correctAns(this.id)">1. Western Rock Wallaby</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Tree Kangaroo </button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Red-necked Wallaby</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Whip-tail Wallaby</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>