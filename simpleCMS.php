<?php

class simpleCMS {
	var $host;
	var $username;
	var $password;
	var $table;

	public function display_public() {

		$q = "SELECT * FROM testDB ORDER BY created DESC";
		$r = mysql_query($q);

		if ($r !== flase && mysql_num_rows($r) > 0) {
			while ($a = mysql_fetch_assoc($r)) {
				$title = stripcslashes($a['title']);
				$bodytext = stripcslashes($a['bodytext']);

				$entry_display .= <<<ENTRY_DISPLAY

<h2>$title</h2>
<p> $bodytext </p>

ENTRY_DISPLAY;
			}
		} else {
			$entry_display = <<<ENTRY_DISPLAY
<h2>This page is under construction.</h2>
<p>No entries have been made on this page.
Check back soon! </p>
ENTRY_DISPLAY;
		}

		$entry_display .= <<<ADMIN_OPTION 
<p class="admin_link">
<a href="{$_SERVER['PHP_SELF']}?admin=1">Add a new Entry</a>
</p>
ADMIN_OPTION;

		return $entry_display;
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

	public function write($p) {
		if ($p['title']) 
			$title = mysql_real_escape_string($p['title']);
		if ($p['bodytext'])
			$bodytext = mysql_real_escape_string($p['bodytext']);
		if ($title && $bodytext ) {
			$created = time();
			$sql = "INSERT INTO testDB VALUES('$title', '$bodytext', '$created')";
			return mysql_query($sql);
		} else {
			return false;
		}
	}

	public function connect() {
		mysql_connect($this->host, $this->port, $this->username, $this->password) or die("Could not connect to database");
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

