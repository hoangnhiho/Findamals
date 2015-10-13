<!-- Kangaroo Modal-->
<div id="kangarooQuest0" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kangaroo Question 1</h4>
			</div>
			<div class="modal-body">
				<h1>What animal is this? </h1>
				<img class="" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals Kangaroo Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="kangaroo" onclick="correctAns(this.id)">1. Red Kangaroo</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Platypus</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Common Mistfrog </button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Loggerhead Turtle  </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="kangarooQuest1" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kangaroo Question 2</h4>
			</div>
			<div class="modal-body">
				<h1>What is the largest terrestrial mammal native to Australia? </h1>
				<img class="" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals Kangaroo Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Squirrel Glider</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Echidna</button></br>
				<button type="button" class="btn btn-default" id="kangaroo" onclick="correctAns(this.id)">3. Red Kangaroo</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Frog</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="kangarooQuest2" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kangaroo Question 3</h4>
			</div>
			<div class="modal-body">
				<h1>Red kangaroos typically live in groups of: </h1>
				<img class="" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals Kangaroo Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. 10-12 members</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. 15-20 members</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. 50 members</button></br>
				<button type="button" class="btn btn-default" id="kangaroo" onclick="correctAns(this.id)">4. 2-4 members</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="kangarooQuest3" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kangaroo Question 4</h4>
			</div>
			<div class="modal-body">
				<h1>What kind of food do red kangaroos prefer to eat? </h1>
				<img class="" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals Kangaroo Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Insects</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Shrubs</button></br>
				<button type="button" class="btn btn-default" id="kangaroo" onclick="correctAns(this.id)">3. Fresh grasses and forbs</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Small animals</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="kangarooQuest4" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kangaroo Question 5</h4>
			</div>
			<div class="modal-body">
				<h1>What time of the day red kangaroos are usually active? </h1>
				<img class="" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals Kangaroo Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="kangaroo" onclick="correctAns(this.id)">1. From dusk till dawn</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Early in the morning</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. From dawn till dusk</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Only in the afternoon </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="kangarooQuest5" class="modal fade animalQuest" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kangaroo Question 6</h4>
			</div>
			<div class="modal-body">
				<h1>What time of the day red kangaroos are usually active? </h1>
				<img class="" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals Kangaroo Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="kangaroo" onclick="correctAns(this.id)">1. From dusk till dawn</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Early in the morning</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. From dawn till dusk</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Only in the afternoon </button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>