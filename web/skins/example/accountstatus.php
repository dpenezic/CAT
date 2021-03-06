<?php
/* 
 *******************************************************************************
 * Copyright 2011-2017 DANTE Ltd. and GÉANT on behalf of the GN3, GN3+, GN4-1 
 * and GN4-2 consortia
 *
 * License: see the web/copyright.php file in the file structure
 *******************************************************************************
 */
?>
<h1>Example Skin (Pick-Up and Status page for <?php echo \core\ProfileSilverbullet::PRODUCTNAME;?>)</h1>
<img src="<?php echo $Gui->skinObject->findresourceUrl("IMAGES","consortium_logo.png");?>"/>
<p>This skin is much more sober and less bloated than the default one. As it happens, it also doesn't do anything.</p>
<p>But at least it goes to show that it's possible to include custom images/CSS/external software using findResourceUrl(..., $filename):
<img src="<?php echo $Gui->skinObject->findresourceUrl("IMAGES","custom.png");?>"/>
<p>For <?php echo \core\ProfileSilverbullet::PRODUCTNAME;?>, this page can make use of the request status info we have collected prior to invocation of the skinned page:</p>
<pre>
    <?php print_r($statusInfo);?>
</pre>