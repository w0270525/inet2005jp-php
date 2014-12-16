<?php

interface iActorsDataModel
{

	public function connectToDB();

	public function closeDB();

	public function selectActors();
	public function selectActorById($actorID);
	public function fetchActors();
	public function updateActor($actorID,$first_name,$last_name);
	public function createActor($first_name, $last_name);
	public function deleteActor($actorID);
	public function fetchActorID($row);
	public function fetchActorFirstName($row);
	public function fetchActorLastName($row);
	public function fetchLastUpdate($row);
}