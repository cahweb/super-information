<?php
/**
* 
* Super Info main view 
*
*/ 
?>

<div class="wrap">
	<h2>Site Information Settings</h2>
	<p>
		This settings panel exists for you to save information about the content of this site that can be used by various other pages and plugins. <br>
		Use this panel to save information like the name and contact information for your department or the social media urls associated with your program.
	</p>

	<?php 
		// Include form views
		include 'general-options.php'; 
		include 'user-editable-options.php'; 
	?>

</div>
