<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Place.php";

    $server = 'mysql:host=localhost;dbname=face_to_face';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class PlaceTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Place::deleteAll();
        }

        function test_setPlaceName()
        {
            //Arrange
            $place_name = "Director Park";
            $address = "SW Park Ave";
            $longitude = 45.518672;
            $latitude = -122.681211;
            $id = 1;
            $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

            //Act
            $test_place->setPlaceName($place_name);
            $result = $test_place->getPlaceName();

            //Assert
            $this->assertEquals("Director Park", $result);

        }

        function test_getPlaceName()
        {
            //Arrange
            $place_name = "Director Park";
            $address = "SW Park Ave";
            $longitude = 45.518672;
            $latitude = -122.681211;
            $id = 1;
            $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

            //Act
            $result = $test_place->getPlaceName();

            //Assert
            $this->assertEquals($place_name, $result);
        }

        function test_setAddress()
        {
            //Arrange
            $place_name = "Multnomah Whiskey Library";
            $address = "1124 SW Alder St";
            $longitude = 45.520999;
            $latitude = -122.683429;
            $id = 1;
            $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

            //Act
            $test_place->setAddress($address);
            $result = $test_place->getAddress();

            //Assert
            $this->assertEquals("1124 SW Alder St", $result);
        }

        function test_getAddress()
        {
            //Arrange
            $place_name = "Multnomah Whiskey Library";
            $address = "1124 SW Alder St";
            $longitude = 45.520999;
            $latitude = -122.683429;
            $id = 1;
            $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

            //Act
            $result = $test_place->getAddress();

            //Assert
            $this->assertEquals($address, $result);
        }

        function test_setLongitude()
        {

        }

        function test_getLongitude()
        {

        }

        function test_setLatitude()
        {

        }

        function test_getLatitude()
        {

        }

        function test_getId()
        {

        }






    }



  ?>
