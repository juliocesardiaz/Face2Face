<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Meetup.php";

    $server = 'mysql:host=localhost;dbname=face_to_face_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class PlaceTest extends PHPUnit_Framework_TestCase
    {
        function test_getId()
        {
            //Arrange
            $user1_id = 1;
            $user2_id = 2;
            $user1_confirm = null;
            $user2_confirm = null;
            $location_id = null;
            $confirm_meet_usr1 = null;
            $confirm_meet_usr2 = null;
            $id = 1;
            $test_meetup = new Meetup($user1_id, $user2_id, $user1_confirm,
            $user2_confirm, $location_id, $confirm_meet_usr1, $confirm_meet_usr2, $id);

            //Act
            $result = $test_meetup->getId();

            //Assert
            $this->assertEquals("Director Park", $result);

        }
    }
?>
