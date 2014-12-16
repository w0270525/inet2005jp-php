<?php

require_once("iActorsDataModel.php");

class PDOMySQLSakila implements iActorDataModel
{
	private	$dbConnection;
	private	$result;
	private	$stmt;

	public function connectToDB()
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


	public function selectActors()
{
	// hard-coding for first ten rows
	$start = 0;
	$count = 10;

	$selectStatement = "SELECT * FROM sakila.actor";
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

	public function selectActorById($actorID)
{
	$selectStatement = "SELECT * FROM sakila.actor WHERE actor_id = :actorID;";
	$selectStatement .= " ";

	try
	{
		$this->stmt = $this->dbConnection->prepare($selectStatement);
		$this->stmt->bindParam(':actorID', $actorID, PDO::PARAM_INT);

		$this->stmt->execute();
	}
	catch(PDOException $ex)
	{
		die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
	}
}


	public function fetchActors()
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

	public function updateActor($actorID,$first_name,$last_name)
{
	$updateStatement = "UPDATE actor";
	$updateStatement .= " SET first_name = :firstName,last_name=:lastName";
	$updateStatement .= " WHERE actor_id = :actorID;";

	try
	{
		$this->stmt = $this->dbConnection->prepare($updateStatement);
		$this->stmt->bindParam(':firstName', $first_name, PDO::PARAM_STR);
		$this->stmt->bindParam(':lastName', $last_name, PDO::PARAM_STR);
		$this->stmt->bindParam(':actor_ID', $actorID, PDO::PARAM_INT);

		$this->stmt->execute();

		return $this->stmt->rowCount();
	}
	catch(PDOException $ex)
	{
		die('Could not select records from Sakila Database via PDO: ' . $ex->getMessage());
	}
}

	public function createActor($first_name, $last_name)
	{
		$insertStatement = "INSERT INTO actor (first_name, last_name) VALUES (".$first_name.", ".$last_name.")";
		$this->stmt= $this->dbConnection->prepare($insertStatement);
		$this->stmt->bindParam(':firstName', $first_name, PDO::PARAM_STR);
		$this->stmt->bindParam(':lastName', $last_name, PDO::PARAM_STR);

		$this->stmt->execute();

		return $this->stmt->rowCount();
	}

	public function deleteActor($actorID) {

		$deleteStatement = "DELETE FROM actor WHERE actor_id=".$actorID.";";

		try {
			$this->stmt = $this->dbConnection->prepare($deleteStatement);
			$this->stmt->execute();
			return $this->stmt->rowCount();
		} catch (PDOException $e) {
			die('Could not delete actor record where row count = '.$actorID);
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



	public function fetchLastUpdate($row)
{
	return $row['last_update'];
}

}

?>