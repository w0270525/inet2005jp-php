<?php

require_once("iActorsDataModel.php")

class PDOMySQLSakila.php implements iActorDataModel
{
	private
	$dbConnection;
	private
	$result;
	private
	$stmt;

	public
	function connectToDB()
	{
// iActorDataAccess methods

		try {
			$this->dbConnection = new PDO("mysql:host=localhost;dbname=sakila", "inet2005", "itCampus2014");
			$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $ex) {
			die('Could not connect to the Sakila Database via PDO: ' . $ex->getMessage());
		}




	}

	public function closeDB() {

	$this->dbConnection = null;
}


	public function selectCustomers()
{
	// hard-coding for first ten rows
	$start = 0;
	$count = 10;

	$selectStatement = "SELECT * FROM customer";
	$selectStatement .= " LEFT JOIN address ON customer.address_id = address.address_id";
	$selectStatement .= " LIMIT :start,:count;";

	try
	{
		$this->stmt = $this->dbConnection->prepare($selectStatement );
		$this->stmt->bindParam(':start', $start, PDO::PARAM_INT);
		$this->stmt->bindParam(':count', $count, PDO::PARAM_INT);

		$this->stmt->execute();
	}
	catch(PDOException $ex)
	{
		die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
	}

}

	public function selectCustomerById($custID)
{
	$selectStatement = "SELECT * FROM customer";
	$selectStatement .= " LEFT JOIN address ON customer.address_id = address.address_id";
	$selectStatement .= " WHERE customer.customer_id = :custID;";

	try
	{
		$this->stmt = $this->dbConnection->prepare($selectStatement);
		$this->stmt->bindParam(':custID', $custID, PDO::PARAM_INT);

		$this->stmt->execute();
	}
	catch(PDOException $ex)
	{
		die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
	}
}


	public function fetchCustomers()
{
	try
	{
		$this->result = $this->stmt->fetch(PDO::FETCH_ASSOC);
		return $this->result;
	}
	catch(PDOException $ex)
	{
		die('Could not retrieve from Sakila Database via PDO: ' . $ex->getMessage());
	}
}

	public function updateCustomer($custID,$first_name,$last_name)
{
	$updateStatement = "UPDATE actor";
	$updateStatement .= " SET first_name = :firstName,last_name=:lastName";
	$updateStatement .= " WHERE actor_id = :custID;";

	try
	{
		$this->stmt = $this->dbConnection->prepare($updateStatement);
		$this->stmt->bindParam(':firstName', $first_name, PDO::PARAM_STR);
		$this->stmt->bindParam(':lastName', $last_name, PDO::PARAM_STR);
		$this->stmt->bindParam(':custID', $custID, PDO::PARAM_INT);

		$this->stmt->execute();

		return $this->stmt->rowCount();
	}
	catch(PDOException $ex)
	{
		die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
	}
}

	public function fetchActorID($row)
{
	return $row['actor_id'];
}

	public function fetchActorFirstName($row)
{
	return $row['first_name'];
}

	public function fetchActorLastName($row)
{
	return $row['last_name'];
}


	public function fetchAddressID($row)
{
	return $row['address_id'];
}

	public function fetchAddress1($row)
{
	return $row['address'];
}

	public function fetchAddress2($row)
{
	return $row['address2'];

}
	public function fetchLastUpdate($row)
{
	return $row['last_update'];
}

}







?>