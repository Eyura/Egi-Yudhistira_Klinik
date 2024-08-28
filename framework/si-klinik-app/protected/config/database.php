<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=localhost;dbname=si_klinik_app_db',
	'emulatePrepare' => true,
	'username' => 'si_klinik',
	'password' => 'klinik2024',
	'charset' => 'utf8',
);