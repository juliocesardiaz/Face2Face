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
            $this->confirm_meet_usr1 = $confirm_meet_usr1;
            $this->id = $id;
        }
    }


 ?>
