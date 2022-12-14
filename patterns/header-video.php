<?php
/*
 * Title: Header - Video
 * Slug: tt1-block-parts/header-video
 * Viewport Width: 1024
 * Categories: header, twentytwentyone
 * Inserter: yes
 */
?>
<!-- wp:cover {"url":"<?= esc_url( get_theme_file_uri( 'assets/video/header-bg.mp4' ) ) ?>","dimRatio":0,"backgroundType":"video","minHeight":450,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"4rem","right":"4rem","bottom":"4rem","left":"4rem"}},"color":{"duotone":["#000000","#D1E4DD"]}}} -->
<div class="wp-block-cover is-light" style="padding-top:4rem;padding-right:4rem;padding-bottom:4rem;padding-left:4rem;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?= esc_url( get_theme_file_uri( 'assets/video/header-bg.mp4' ) ) ?>" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","lock":{"move":true,"remove":true}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","templateLock":"all","lock":{"move":true,"remove":true}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"lock":{"move":false,"remove":false},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase","fontSize":"1.5rem"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:site-tagline {"style":{"typography":{"fontSize":"16px"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:navigation {"ref":2586,"textColor":"white","layout":{"type":"flex","justifyContent":"right"},"style":{"typography":{"fontSize":"16px"},"spacing":{"blockGap":"2rem"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->