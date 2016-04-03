<?php

class simpleCMS {
	var $host;
	var $username;
	var $password;
	var $table;

	public function display_public() {

	}

	public function display_admin() {
		return <<<ADMIN_FORM
<h1>Add Class</h1>
<form id="" action="" method="post" onsubmit="return ">
	<input type="text" placeholder="Company Name" name="name" id="name" /><br />
	<textarea placeholder="Company description" name="description" id="description"></textarea><br />
	<input type="text" placeholder="Price ($$$.$$)" name="price" id="price" /><br />
	<input type="text" placeholder="Photo Reference (file.jpg)" name="photoref" id="photoref" /><br />
	<input type="text" placeholder="Tags" name="tags" id="tags" /><br />
	<input type="submit" value="Submit" />
</form>
ADMIN_FORM;

	}

	public function write() {

	}

	public function connect() {
		mysql_connect($this->host, $this->username, $this->password) or die("Could not connect to database");
		mysql_select_db($this->table) or die("Could not select database. " . mysql_error());

		return $this->buildDB();
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

