<!-- Wombat Modal-->
<div id="wombatQuest0" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wombat Question 1</h4>
			</div>
			<div class="modal-body">
				<h1>What animal is this? </h1>
				<img class="" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals Wombat Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Greater Bilby</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Loggerhead Turtle</button></br>
				<button type="button" class="btn btn-default" id="wombat" onclick="correctAns(this.id)">3. Northern Hairy-nosed Wombat</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Red Kangaroo</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wombatQuest1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wombat Question 2</h4>
			</div>
			<div class="modal-body">
				<h1>How many Northern Hairy-nosed Wombats are left in the world? </h1>
				<img class="" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals Wombat Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" id="wombat" onclick="correctAns(this.id)">1. 163</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. 50</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. 100,000</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. 20,000</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wombatQuest2" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wombat Question 3</h4>
			</div>
			<div class="modal-body">
				<h1>The burrows of Northern Hairy-nosed Wombat are usually constructed: </h1>
				<img class="" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals Wombat Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. On trees</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. In water</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. On the ground</button></br>
				<button type="button" class="btn btn-default" id="wombat" onclick="correctAns(this.id)">4. Under trees</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wombatQuest3" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wombat Question 4</h4>
			</div>
			<div class="modal-body">
				<h1>What is the average weight of Northern Hairy-nosed Wombat? </h1>
				<img class="" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals Wombat Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. 20 kg</button></br>
				<button type="button" class="btn btn-default" id="wombat" onclick="correctAns(this.id)">2. 32 kg</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. 100 kg</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. 2 kg</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wombatQuest4" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wombat Question 5</h4>
			</div>
			<div class="modal-body">
				<h1>The diet of the Northern Hairy-nosed Wombat consists almost entirely of: </h1>
				<img class="" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals Wombat Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Tree leaves</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">2. Insects</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Bark</button></br>
				<button type="button" class="btn btn-default" id="wombat" onclick="correctAns(this.id)">4. Grass</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>

<div id="wombatQuest5" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Wombat Question 6</h4>
			</div>
			<div class="modal-body">
				<h1>Where can you find a Hairy Nosed Wombat?</h1>
				<img class="" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals Wombat Character" style="width:40%"></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">1. Queensland and NSW</button></br>
				<button type="button" class="btn btn-default" id="wombat" onclick="correctAns(this.id)">2. Queensland </button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">3. Queensland, NSW and Victoria</button></br>
				<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" href="#incorrectAns">4. Tasmania</button></br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Flee</button>
			</div>
		</div>
	</div>
</div>