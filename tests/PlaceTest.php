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
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $result = $test_place->setAddress();

          //Assert
          $this->assertEquals("SW Park Ave", $result);

        }

        function test_getAddress()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $result = $test_place->getAddress();

          //Assert
          $this->assertEquals($address, $result);

        }

        function test_setLongitude()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $test_place->setLongitude($longitude);
          $result = $test_place->getLongitude();

          //Assert
          $this->assertEquals("45.518672", $result);

        }

        function test_getLongitude()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $result = $test_place->getLongitude();

          //Assert
          $this->assertEquals($longitude, $result);

        }

        function test_setLatitude()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $test_place->setLatitude($latitude);
          $result = $test_place->getLatitude();

          //Assert
          $this->assertEquals("-122.681211", $result);

        }

        function test_getLatitude()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $result = $test_place->getLatitude();

          //Assert
          $this->assertEquals($latitude, $result);

        }

        function test_getId()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);

          //Act
          $result = $test_place->getId();

          //Assert
          $this->assertEquals($id, $result);

        }






    }



  ?>
