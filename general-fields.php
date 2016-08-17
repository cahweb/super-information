<?php

class Field {
	function __construct($label, $type, $slug) {
		$this->label = $label;
		$this->type = $type;
		$this->slug = $slug;
		$this->value = '';
	}
}

$GLOBALS['general_fields'] = array(
	"department_name" => new Field('Department Name', 'text', 'department_name'),
	"email_address" => new Field('Email Address', 'email', 'email_address'),
	"telephone_number" => new Field('Telephone Number', 'tel', 'telephone_number'),
	"fax_number" => new Field('Fax Number', 'tel', 'fax_number'),
	"office_address" => new Field('Office Address', 'text', 'office_address'),
	"twitter_url" => new Field('Twitter URL', 'url', 'twitter_url'),
	"facebook_url" => new Field('Facebook URL', 'url', 'facebook_url'),
	"instagram_url" => new Field('Instagram URL', 'url', 'instagram_url'),
);