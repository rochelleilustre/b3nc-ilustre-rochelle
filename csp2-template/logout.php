<?php

session_start();

//session_unset('message');

session_destroy();

header('location: index.php');