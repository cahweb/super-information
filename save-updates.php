<?php

function si_save_updates() {
	$array = $GLOBALS['general_fields'];

	$array["department_name"]->value = $_POST["department_name"];
	$array["email_address"]->value = $_POST["email_address"];
	$array["telephone_number"]->value = $_POST["telephone_number"];
	$array["fax_number"]->value = $_POST["fax_number"];
	$array["office_address"]->value = $_POST["office_address"];
	$array["twitter_url"]->value = $_POST["twitter_url"];
	$array["facebook_url"]->value = $_POST["facebook_url"];
	$array["instagram_url"]->value = $_POST["instagram_url"];
}

?>