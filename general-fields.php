<?php

class Field {
	function __construct($label, $type, $slug) {
		$this->label = $label;
		$this->type = $type;
		$this->slug = $slug;
	}
}

$GLOBALS['general_fields'] = array(
	new Field('Department Name', 'text', 'department_name'),
	new Field('Email Address', 'email', 'email_address'),
	new Field('Telephone Number', 'tel', 'telephone_number'),
	new Field('Fax Number', 'tel', 'fax_number'),
	new Field('Office Address', 'text', 'office_address'),
	new Field('Twitter URL', 'url', 'twitter_url'),
	new Field('Facebook URL', 'url', 'facebook_url'),
	new Field('Instagram URL', 'url', 'instagram_url'),
);