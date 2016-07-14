<div class="si-form-container">
	<form id="si-general">	
		<h3>General Information</h3>
		<input type="submit" value="Save"></input>

		<?php
			// Create a form element for each of our General information fields
			// Fields are stored as a global array of objects in general-fields.php
			foreach ($GLOBALS['general_fields'] as $value) {
				$outHTML = '
					<div class="si-field">
						<h4>' . $value->label . ':</h4>
						<input type="' . $value->type . '" name="' . $value->slug . '">
					</div>';
				echo $outHTML;
			}
		?>

	</form>
</div>

