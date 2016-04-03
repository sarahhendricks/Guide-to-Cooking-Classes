<?php

class simpleCMS {
	var $host;
	var $username;
	var $password;
	var $table;

	public function display_public() {

	}

	public function display_admin() {

	}

	public function write() {

	}

	public function connect() {

	}

	public function buildDB() {
		$sql = <<<MySQL_QUERY 

CREATE TABLE IF NOT EXISTS testDB (
	title VARCHAR(150),
	bodytext TEXT,
	created VARCHAR(100)
)
MySQL_QUERY;

		return mysql_query($sql);
	}
}

