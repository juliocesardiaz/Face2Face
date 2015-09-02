<?php

    class Meetup
    {
        private $user1_id;
        private $user2_id;
        private $user1_confirm;
        private $user2_confirm;
        private $location_id;
        private $confirm_meet_usr1;
        private $confirm_meet_usr2;
        private $id;

        function __construct($user1_id, $user2_id, $user1_confirm,
            $user2_confirm, $location_id, $confirm_meet_usr1, $confirm_meet_usr1,
            $id = null)
        {
            $this->user1_id = $user1_id;
            $this->user2_id = $user2_id;
            $this->user1_confirm = $user1_confirm;
            $this->user2_confirm = $user2_confirm;
            $this->location_id = $location_id;
            $this->confirm_meet_usr1 = $confirm_meet_usr1;
            $this->confirm_meet_usr2 = $confirm_meet_usr2;
            $this->id = $id;
        }

        function setUser1_Id ($new_user1_id)
        {
            $this->user1_id = $new_user1_id;
        }

        function getUser1_Id()
        {
            return $this->user1_id;
        }

        function setUser2_Id ($new_user2_id)
        {
            $this->user2_id = $new_user2_id;
        }

        function getUser2_Id()
        {
            return $this->user2_id;
        }

        function setUser1_Confirm ($new_user1_confirm)
        {
            $this->user1_confirm = $new_user1_confirm;
        }

        function getUser1_Confirm()
        {
            return $this->user1_confirm;
        }

        function setUser2_Confirm ($new_user2_confirm)
        {
            $this->user2_confirm = $new_user2_confirm;
        }

        function getUser2_Confirm()
        {
            return $this->user2_confirm;
        }

        function setLocation_Id ($new_location_id)
        {
            $this->location_id = $new_location_id;
        }

        function getLocation_Id()
        {
            return $this->location_id;
        }

        function setConfirm_meet_usr1 ($new_confirm_meet_usr1)
        {
            $this->confirm_meet_usr1 = $new_confirm_meet_usr1;
        }

        function getConfirm_meet_usr1()
        {
            return $this->confirm_meet_usr1;
        }

        function setConfirm_meet_usr2 ($new_confirm_meet_usr2)
        {
            $this->confirm_meet_usr2 = $new_confirm_meet_usr2;
        }

        function getConfirm_meet_usr2()
        {
            return $this->confirm_meet_usr2;
        }

        function getId()
        {
            return $this->id;
        }
    }


 ?>
