<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Place.php";

    $server = 'mysql:host=localhost;dbname=face_to_face_test';
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
          $result = $test_place->getAddress($address);

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
        function testSave()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);
          $test_place->save();

          //Act
          $result = Place::getAll();

          //Assert
          $this->assertEquals($test_place, $result[0]);
        }
        function testGetAll()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);
          $test_place->save();

          //Act
          $result = Place::getAll();

          //Assert
          $this->assertEquals($test_place, $result[0]);
        }
        function testDeleteAll()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);
          $test_place->save();

          //Act
          $test_place->deleteAll();
          $result = Place::getAll();

          //Assert
          $this->assertEquals([], $result);
        }

        function testUpdateName()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);
          $test_place->save();

          $new_place_name = "Park Lane Park";

          //Act
          $test_place->updatePlaceName($new_place_name);

          //Assert
          $this->assertEquals($test_place->getPlaceName(), $new_place_name);

        }

        function testUpdateAddress()
        {
          //Arrange
          $place_name = "Director Park";
          $address = "SW Park Ave";
          $longitude = 45.518672;
          $latitude = -122.681211;
          $id = 1;
          $test_place = new Place($place_name, $address, $longitude, $latitude, $id);
          $test_place->save();

          $new_address = "NW West Ave";

          //Act
          $test_place->updateAddress($new_address);

          //Assert
          $this->assertEquals($test_place->getAddress(), $new_address);

        }
        // function testUpdateLocation()
        // {
        //   //Arrange
        //   $place_name = "Director Park";
        //   $address = "SW Park Ave";
        //   $longitude = 45.518672;
        //   $latitude = -122.681211;
        //   $id = 1;
        //   $test_place = new Place($place_name, $address, $longitude, $latitude, $id);
        //   $test_place->save();
        //
        //
        //   $new_latitude = -123.683411;
        //   $new_longitude = 44.518272;
        //
        //   //Act
        //   $test_place->updateLocation($new_longitude, $new_latitude);
        //   $new_location = array($test_place->getLongitude(),
        //   $test_place->getLatitude());
        //
        //   //Assert
        //   $this->assertEquals($new_location ,($new_longitude, $new_latitude));
        //
        // }
        // function testUpdateAll
        // {
        //
        // }

    }



  ?>
