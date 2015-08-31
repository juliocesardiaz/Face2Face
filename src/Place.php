<?php

    class Place
    {
        private $place_name;
        private $address;
        private $longitude;
        private $latitude;
        private $id;

        function __construct($place_name, $address, $longitude, $latitude, $id = null)
        {
            $this->place_name = $place_name;
            $this->address = $address;
            $this->longitude = $longitude;
            $this->latitude = $latitude;
            $this->id = $id;
        }

        function setPlaceName ($new_place_name)
        {
            $this->place_name = (string) $new_place_name;
        }
        function getPlaceName()
        {
            return $this->place_name;
        }

        function setAddress ($new_address)
        {
            $this->address = (string) $new_address;
        }
        function getAddress()
        {
            return $this->address;
        }

        function setLongitude ($new_longitude)
        {
            $this->longitude = (string) $new_longitude;
        }
        function getLongitude()
        {
            return $this->longitude;
        }
        function setLatitude ($new_latitude)
        {
            $this->latitude = (string) $new_latitude;
        }
        function getLatitude()
        {
            return $this->latitude;
        }

        function getId()
        {
            return $this->id;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO places (place_name, address, longitude, latitude)
                VALUES ('{$this->getPlaceName()}',
                        '{$this->getAddress()}',
                        {$this->getLongitude()},
                        {$this->getLatitude()});");
                        $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll()
        {
            $returned_places = $GLOBALS['DB']->query("SELECT * FROM places;");
            $places = array();
            foreach($returned_places as $place) {
                $place_name = $place['place_name'];
                $address = $place['address'];
                $longitude = $place['longitude'];
                $latitude = $place['latitude'];
                $id = $place['id'];
                $new_place = new Place($place_name, $address, $longitude, $latitude, $id);
                array_push($places, $new_place);
            }
            return $places;
        }

        static function deleteAll()
        {
          $GLOBALS['DB']->exec("DELETE FROM places;");
        }

        static function find($search_id)
        {
            $found_place = null;
            $places = Place::getAll();
            foreach($places as $place) {
                $place_id = $place->getId();
                if ($place_id == $search_id) {
                  $found_place = $place;
                }
            }
            return $found_place;
        }

        function updatePlaceName($new_place_name)
        {
            $GLOBALS['DB']->exec("UPDATE places SET place_name =
                '{$new_place_name}' WHERE id = {$this->getId()};");
            $this->setPlaceName($new_place_name);
        }

        function updateAddress($new_address)
        {
            $GLOBALS['DB']->exec("UPDATE places SET address =
                '{$new_address}' WHERE id = {$this->getId()};");
            $this->setAddress($new_address);
        }

        function updateLocation($new_longitude, $new_latitude)
        {
            $GLOBALS['DB']->exec("UPDATE places SET longitude, latitude VALUES =
                {$new_longitude}, {new_latitude} WHERE id = {$this->getId()};");
            $this->setLongitude($new_longitude);
            $this->setLatitude($new_latitude);
        }

        function updateAll($new_place_name, $new_address, $new_longitude, $new_latitude)
        {
            $GLOBALS['DB']->exec("UPDATE places SET place_name =
                '{$new_place_name}' WHERE id = {$this->getId()};");
            $this->setPlaceName($new_place_name);
            $GLOBALS['DB']->exec("UPDATE places SET address =
                '{$new_address}' WHERE id = {$this->getId()};");
            $this->setAddress($new_address);
            $GLOBALS['DB']->exec("UPDATE places SET longitude =
                '{$new_longitude}' WHERE id = {$this->getId()};");
            $this->setLongitude($new_longitude);
            $GLOBALS['DB']->exec("UPDATE places SET latitude =
                '{$new_latitude}' WHERE id = {$this->getId()};");
            $this->setLatitude($new_latitude);
        }

        function delete()
        {
            $GLOBALS['DB']->exec("DELETE FROM places WHERE id = {$this->getId()};");
            //$GLOBALS['DB']->exec("DELETE FROM places_users WHERE place_id = {$this->getId()};");
        }


    }



 ?>
