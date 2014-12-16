<?php

require_once '../model/Actor.php';
require_once '../model/data/PDOMySQLSakila.php';

class ActorModel
{
    private $m_DataAccess;
    
    public function __construct()
    {

        $this->m_DataAccess = new PDOMySQLSakila();
    }
    
    public function __destruct()
    {
        // not doing anything at the moment
    }
            
    public function getAllActors()
    {
        $this->m_DataAccess->connectToDB();
        
        $arrayOfActorObjects = array();
        
        $this->m_DataAccess->selectActors();
        
        while($row =  $this->m_DataAccess->fetchActors())
        {

            $currentActor = new Actor($this->m_DataAccess->fetchActorID($row),
                    $this->m_DataAccess->fetchActorFirstName($row),
                    $this->m_DataAccess->fetchActorLastName($row),
	                $this->m_DataAccess->fetchLastUpdate($row));
            
            $arrayOfActorObjects[] = $currentActor;
        }
        
        $this->m_DataAccess->closeDB();
        
        return $arrayOfActorObjects;
    }
    
    public function getActor($ActorID)
    {
        $this->m_DataAccess->connectToDB();
        
        $this->m_DataAccess->selectActorById($ActorID);
        
        $record =  $this->m_DataAccess->fetchActors();
        

         $fetchedActor = new Actor($this->m_DataAccess->fetchActorID($record),
                 $this->m_DataAccess->fetchActorFirstName($record),
                 $this->m_DataAccess->fetchActorLastName($record),
                $this->m_DataAccess->fetchLastUpdate($record));
            
            
        
        $this->m_DataAccess->closeDB();
        
        return $fetchedActor;
    }
    
     public function updateActor($actorToUpdate)
    {
        $this->m_DataAccess->connectToDB();
        
        $recordsAffected = $this->m_DataAccess->updateActor($actorToUpdate->getID(),
                $actorToUpdate->getFirstName(),
                $actorToUpdate->getLastName());

	    $this->m_DataAccess->closeDB();
        
        return "$recordsAffected record(s) updated successfully!";
    }

	public function deleteActor($actorToDelete)
	{
		try {
			$this->m_DataAccess->connectToDB();

			$recordToDelete = $this->m_DataAccess->deleteActor($actorToDelete);

			$this->m_DataAccess->closeDB();
		} catch (PDOException $e) {
			die('error deleting record');
		}
		return "$recordToDelete record deleted successfully";
	}
}

?>
