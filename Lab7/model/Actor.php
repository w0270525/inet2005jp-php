<?php



class Actor
{
    private $m_actorId;
    private $m_firstName;
    private $m_lastName;
    private $m_lastModified;


    
    public function __construct($in_id,$in_fname,$in_lname, $in_lmodified)
    {
        $this->m_actorId = $in_id;
        $this->m_firstName = $in_fname;
        $this->m_lastName = $in_lname;

    }
    
    public function getID()
    {
        return ($this->m_actorId);
    }
    
    public function getFirstName()
    {
        return ($this->m_firstName);
    }
    
    public function setFirstName($in_firstName)
    {
        $this->m_firstName = $in_firstName;
    }

    public function getLastName()
    {
        return ($this->m_lastName);
    }
    
    public function setLastName($in_lastName)
    {
        $this->m_lastName = $in_lastName;
    }

	public function setMLastModified($m_lastModified)
	{
		$this->m_lastModified = $m_lastModified;
	}

	public function getMLastModified()
	{
		return $this->m_lastModified;
	}


}

?>
