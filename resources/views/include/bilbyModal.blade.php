<!-- Bilby Modal-->
<div id="bilbyQuest0" class="modal fade animalQuest animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Bilby Question 1</h4>
			</div>
			<div class="modal-body">
				<h1>What animal is this? </h1>
				<img class="" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals Bilby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Frog</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Turtle</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Platypus </button></br>
				<button type="button" class="btn btn-default" id="bilby" onclick="correctAns(this.id)">4. Greater Bilby </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="bilbyQuest1" class="modal fade animalQuest animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Bilby Question 2</h4>
			</div>
			<div class="modal-body">
				<h1>What color is the fur of Greater Bilby? </h1>
				<img class="" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals Bilby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Black and white</button></br>
				<button type="button" class="btn btn-default" id="bilby" onclick="correctAns(this.id)">2. Blue-grey</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Green</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Brown </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="bilbyQuest2" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Bilby Question 3</h4>
			</div>
			<div class="modal-body">
				<h1>Greater Bilby usually lives: </h1>
				<img class="" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals Bilby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. 20 days</button></br>
				<button type="button" class="btn btn-default" id="bilby" onclick="correctAns(this.id)">2. 5 years</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. 1 year</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. 30 years</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="bilbyQuest3" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Bilby Question 4</h4>
			</div>
			<div class="modal-body">
				<h1>Greater Bilby does not need: </h1>
				<img class="" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals Bilby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. To eat</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. To sleep</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. To drink water</button></br>
				<button type="button" class="btn btn-default" id="bilby" onclick="correctAns(this.id)">4. To rest</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="bilbyQuest4" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Bilby Question 5</h4>
			</div>
			<div class="modal-body">
				<h1>Greater Bilby has very long: </h1>
				<img class="" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals Bilby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="bilby" onclick="correctAns(this.id)">1. Ears</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Tail</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Claws</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Nose </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="bilbyQuest5" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Bilby Question 6</h4>
			</div>
			<div class="modal-body">
				<h1>Greater Bilby has very long: </h1>
				<img class="" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals Bilby Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="bilby" onclick="correctAns(this.id)">1. Ears</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Tail</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Claws</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Nose </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>