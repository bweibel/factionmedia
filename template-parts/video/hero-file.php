<?php
/**
 * Template part for displaying the page content when an offline error has occurred
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$videoPostId = get_field('hero_video');
$videoUrl = get_field('file', $videoPostId);
?>



<video id="video-hero-player" autoplay muted loop playsinline>
  <source src="<?php echo $videoUrl ?>">
  Sorry, your browser doesn't support embedded videos.
</video>


<script>
document.getElementById('video-hero-player').addEventListener("ended", function() {
  // this.play();
  console.log("ended");
}
  );
</script>