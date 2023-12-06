<?php
class conn
{
	private $db_username = 'root';
	private $db_password = '';

	function getConn()
	{

		$conn = new PDO('mysql:host=localhost;dbname=menu_db', $this->db_username, $this->db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (!$conn) {
			die("Fatal Error: Connection Failed!");
		}
		return $conn;
	}
}
