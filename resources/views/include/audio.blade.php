<div id="mtoogle">
	<img id="audio_img" src="/images/audio_mute.png">
</div>
<audio id="playTune" loop>
	<source src="/music/music1.mp3">
</audio>
<script type="text/javascript">
$('#mtoogle').click(function() {
  if ($('#playTune')[0].paused == false) {
      $('#playTune')[0].pause();
      $('#audio_img').attr("src","/images/audio_mute.png");;
  } else {
      $('#playTune')[0].play();
      $('#audio_img').attr("src","/images/audio.png");;
  }
});
</script>