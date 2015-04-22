<?php

$xmlDoc = new DOMDocument();

$xmlDoc->load("db.xml");

$x = $xmlDoc->documentElement;

$email=$_POST['username']; // Fetching Values from URL.
$password= ($_POST['password']); 



// CREATE
$config = new SimpleXmlElement('<logins/>');
$config->
$config->login = 'login value';         
$config->saveXML('config.xml');               

// READs>
$config = new SimpleXmlElement('config.xml');
echo $config->setting1;
echo $config->asXml();

// UPDATE
$config->setting1 = 'new value';
$config->setting2 = 'setting2 value';
echo $config->asXml();

// DELETE
unset($config->setting1);
$config->setting2 = NULL;
echo $config->asXML();
unlink('config.xml');


function loginTest($email, $password)
	{


		foreach ($x->childNodes AS $item)
		{
			if ($item.username == $email)
			{
				if ($item.password == $password)	
				{
				return true;	
				}
				else{
					return false;
				}
			}
			return false;
		}
	}

/*Crap from example.

foreach ($x->childNodes AS $item){
	print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
//

$xml = simplexml_load_file("cars.xml");

echo $xml->getName() . "<br>";

foreach($xml->children() as $child){
	print $child->getName() . " = " . $child . "<br>";
}
*/



?>