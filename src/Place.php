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
            return $this->_address;
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
            return $this->_latitude;
        }

        function getId()
        {
            return $this->id;
        }
    }



 ?>
