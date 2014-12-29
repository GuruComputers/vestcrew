<?php

// Set Feed URL
$feedURL = 'https://gdata.youtube.com/feeds/api/users/'.$username.'/uploads';

// Input feed into SimpleXML Object
$sxml = simplexml_load_file($feedURL);

// Iterate over entries in feed
foreach ($sxml->entry as $entry) {
	
	// Get Media Info
	$media = $entry->children('http://search.yahoo.com/msrss/');

	// Get Video Player URL
	$attrs = $media->group->player->attributes();
	$watch = $attrs['url'];

	// Get Video Thumbnails
	$attrs = $media->group->thumbnail[0]->attributes();
	$thumbnail = $attrs['url'];

	// Get Video Duration
	$yt = $media->children('http://gdata.youtube.com/schemas/2007');
	$attrs = $yt->duration->attributes();
	$length = $attrs['seconds'];

	// Get Viewer Stats
	$yt = $entry->children('http://gdata.youtube.com/schemas/2007');
	$attrs = $yt->statistics->attributes();
	$viewCount = $attrs['viewCount'];

	// Get Video Ratings
	$gd = $entry->children('http://schemas.google.com/g/2005');
	if ($gd->rating) {
		$attrs = $gd->rating->attributes();
		$rating = $attrs['average'];
	} else {
		$rating = 0;
	}
?>
<div class="item">
        <span class="title">
          <a href="<?php echo $watch; ?>"><?php echo $media->group->title; ?></a>
        </span>
        <p><?php echo $media->group->description; ?></p>
        <p>
          <span class="thumbnail">
            <a href="<?php echo $watch; ?>"><img src="<?php echo $thumbnail;?>"  width="100"/></a>
            <br/>click to view
          </span>
          <span class="attr">By:</span> <?php echo $entry->author->name; ?> <br/>
          <span class="attr">Duration:</span> <?php printf('%0.2f', $length/60); ?>
          min. <br/>
          <span class="attr">Views:</span> <?php echo $viewCount; ?> <br/>
          <span class="attr">Rating:</span> <?php echo $rating; ?>
        </p>
      </div>     
    <?php
    }
    ?>