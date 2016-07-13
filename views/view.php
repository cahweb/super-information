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
	<p>
		In the first field, put the label associated with the information. In the second, put the information you want to save. An example would be "Telephone Number" in the first field, and "555-555-5555" in the second.
	</p>

	<div class="si-form-container">

		<div class="si-editable-row">
			<form>
				<div class="si-field">
					<label name="test">Info label (eg. Department Name)</label>
					<input type="text" name="test">
				</div>
				<div class="si-field">
					<label name="test2">Info value (eg. Music)</label>
					<input type="text" name="test2">
				</div>
				<a href="#">Remove</a>
			</form>
		</div>

		<button id="si-add-field">Add Field</button>
	</div>

</div>
