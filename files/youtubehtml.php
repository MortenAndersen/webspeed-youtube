<?php
$youtubeID = basename(get_field('youtube'));

$id = 'youtube-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

$className = 'youtube';
if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}

$iframe_content = '<style>
          * {padding: 0;margin: 0;overflow: hidden;}
          body, html {height: 100%;}
          img, svg {position: absolute;width: 100%;top: 0;bottom: 0;margin: auto;}
          svg {filter: drop-shadow(1px 1px 10px hsl(206.5, 70.7%, 8%));transition: all 250ms ease-in-out;}
          body:hover svg {filter: drop-shadow(1px 1px 10px hsl(206.5, 0%, 10%));transform: scale(1.2);}
        </style>
        <a href="https://www.youtube.com/embed/' . $youtubeID . '?autoplay=1"><img src="https://i.ytimg.com/vi_webp/' . $youtubeID . '/maxresdefault.webp" alt="' . get_field('video_titel') . '" loading="lazy">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg></a>';
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="width: 100%; box-shadow: 6px 6px 10px hsl(206.5, 0%, 75%); margin: 2rem 0;">
    <div style="position: relative; aspect-ratio: 16 / 9; height: 100%; width: 100%;">

      <iframe style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;" loading="lazy"; srcdoc=" <?php echo htmlentities($iframe_content); ?>" src="https://www.youtube.com/embed/<?php echo $youtubeID ?>" title="<?php the_field('video_titel');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; allowfullscreen">
      </iframe>
    </div>
  </div>