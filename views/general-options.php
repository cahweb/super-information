<div class="si-form-container">
	<form method="POST" action="save-updates.php" id="si-general">	
		<h3>General Information</h3>
		<input type="submit" value="Save"></input>

		<?php
			// Create a form element for each of our General information fields
			// Fields are stored as a global array of objects in general-fields.php
			foreach ($GLOBALS['general_fields'] as $val) {
				$outHTML = '
					<div class="si-field">
						<h4>' . $val->label . ':</h4>
						<input type="' . $val->type . '" name="' . $val->slug . '" value="' . $val->value . '">
					</div>';
				echo $outHTML;
			}
		?>

	</form>
</div>

