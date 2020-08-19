<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_enqueue_script( 'wp-rig-herovideo-script' );

function printVideoHTML( ) {

  $videoPostId = get_field('hero_video');
  $videoPostType = get_field('video_type', $videoPostId);

  switch ($videoPostType){
    case 'file':
      get_template_part( 'template-parts/video/hero', 'file' );
      break;
    case 'vimeo':
      get_template_part( 'template-parts/video/hero', 'vimeo');
      break;
    case 'youtube':
      get_template_part( 'template-parts/video/hero', 'youtube');
      break;

    }
}

//
$hasHero = boolval( get_field('has_hero_video') );
?>

<?php if ($hasHero): ?>

  <section id="video-hero" class="video-hero">
    <div class="video-wrapper">
      <?php printVideoHTML(); ?>
    </div>
  </section><!-- .video-background -->
  <section class="hero-overlay">
  <?php the_field('overlay'); ?>
  </section>

<?php endif; ?>





    

