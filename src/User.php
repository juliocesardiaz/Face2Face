<?php 
	
	class User 
	{
		private $user_name;
		private $password;
		private $longitude;
		private $latitude;
		private $signed_in;
		private $id;
		
		function __constuct($user_name, $password, $longitude, $latitude, $signed_in, $id = null)
		{
			$this->user_name = $user_name;
			$this->password = $password;
			$this->longitude = $longitude;
			$this->latitude = $latitude;
			$this->signed_in = $signed_in;
			$this->id = $id; 
		}
		
		function setUserName($new_user_name)
		{
			$this->user_name = $new_user_name;
		}
		
		function getUserName()
		{
			return $this->user_name;
		}
		
		function setPassword($new_password)
		{
			$this->password = $new_password;
		}
		
		function getPassword()
		{
			return $this->password;
		}
		
		function setLongitude($new_longitude)
		{
			$this->longitude = $new_longitude;
		}
		
		function getLongitude()
		{
			return $this->longitude;
		}
		
		function setLatitude($new_latitude)
		{
			$this->latitude = $new_latitude;
		}
		
		function getLatitude()
		{
			return $this->latitude;
		}
		
		function setSignedIn($new_signed_in)
		{
			$this->signed_in = $new_signed_in;
		}
		
		function getSignedIn()
		{
			return $this->signed_in;
		}
		
		function setId($new_id)
		{
			$this->id = $id;
		}
		
		function getId()
		{
			return $this->id;
		}
		
		function save()
		{
			$GLOBALS['DB']->exec("INSERT INTO users (user_name, password, lng, lat, signed_in) VALUES ('{$this->getUserName()}', '{$this->getPassword()}', {$this->getLongitude()}, {$this->getLatitude()}, {$this->getSignedIn()});");
			$this->setId($GLOBALS['DB']->lastInsertId());
		}
	}
?>