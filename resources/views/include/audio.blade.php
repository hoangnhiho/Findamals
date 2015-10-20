<div id="mtoogle">
	<img src="http://ftutorials.com/wp-content/uploads/2013/08/speaker.png">
</div>
<audio id="playTune" autoplay loop>
	<source src="/music/music1.mp3">
</audio>
<script type="text/javascript">
$('#mtoogle').click(function() {
  if ($('#playTune')[0].paused == false) {
      $('#playTune')[0].pause();
  } else {
      $('#playTune')[0].play();
  }
});
</script>