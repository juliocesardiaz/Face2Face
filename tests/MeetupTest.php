<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Meetup.php";

    $server = 'mysql:host=localhost:8889;dbname=face_to_face_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class PlaceTest extends PHPUnit_Framework_TestCase
    {
    //GET/SET TESTS
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
            $this->assertEquals($id, $result);
        }
        function setUser1_IdTest()
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
            $test_meetup->setUser1_Id($user1_id);
            $result = $test_meetup->getUser1_Id();

            //Assert
            $this->assertEquals($user1_id, $result);
        }
        function getUser1_IdTest()
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
            $result = $test_meetup->getUser1_Id();

            //Assert
            $this->assertEquals($user1_id, $result);
        }
        function setUser2_IdTest()
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
            $test_meetup->setUser2_Id($user2_id);
            $result = $test_meetup->getUser2_Id();

            //Assert
            $this->assertEquals($user1_id, $result);
        }
        function getUser2_IdTest()
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
            $result = $test_meetup->getUser2_Id();

            //Assert
            $this->assertEquals($user2_id, $result);
        }
        function setUser1_ConfirmTest()
        {
            //Arrange
            $user1_id = 1;
            $user2_id = 2;
            $user1_confirm = true;
            $user2_confirm = null;
            $location_id = null;
            $confirm_meet_usr1 = null;
            $confirm_meet_usr2 = null;
            $id = 1;
            $test_meetup = new Meetup($user1_id, $user2_id, $user1_confirm,
            $user2_confirm, $location_id, $confirm_meet_usr1, $confirm_meet_usr2, $id);

            //Act
            $test_meetup->setUser1_Confirm($user1_confirm);
            $result = $test_meetup->getUser1_Confirm();

            //Assert
            $this->assertEquals($user1_confirm, $result);
        }
        function setUser2_ConfirmTest()
        {
            //Arrange
            $user1_id = 1;
            $user2_id = 2;
            $user1_confirm = true;
            $user2_confirm = false;
            $location_id = null;
            $confirm_meet_usr1 = null;
            $confirm_meet_usr2 = null;
            $id = 1;
            $test_meetup = new Meetup($user1_id, $user2_id, $user1_confirm,
            $user2_confirm, $location_id, $confirm_meet_usr1, $confirm_meet_usr2, $id);

            //Act
            $test_meetup->setUser2_Confirm($user2_confirm);
            $result = $test_meetup->getUser2_Confirm();

            //Assert
            $this->assertEquals($user2_confirm, $result);
        }
        function getUser1_ConfirmTest()
        {
            //Arrange
            $user1_id = 1;
            $user2_id = 2;
            $user1_confirm = true;
            $user2_confirm = null;
            $location_id = null;
            $confirm_meet_usr1 = null;
            $confirm_meet_usr2 = null;
            $id = 1;
            $test_meetup = new Meetup($user1_id, $user2_id, $user1_confirm,
            $user2_confirm, $location_id, $confirm_meet_usr1, $confirm_meet_usr2, $id);

            //Act
            $result = $test_meetup->getUser1_Confirm();

            //Assert
            $this->assertEquals($user1_confirm, $result);
        }
        function getUser2_ConfirmTest()
        {
            //Arrange
            $user1_id = 1;
            $user2_id = 2;
            $user1_confirm = true;
            $user2_confirm = false;
            $location_id = null;
            $confirm_meet_usr1 = null;
            $confirm_meet_usr2 = null;
            $id = 1;
            $test_meetup = new Meetup($user1_id, $user2_id, $user1_confirm,
            $user2_confirm, $location_id, $confirm_meet_usr1, $confirm_meet_usr2, $id);

            //Act
            $result = $test_meetup->getUser2_Confirm();

            //Assert
            $this->assertEquals($user2_confirm, $result);
        }

    }
?>
