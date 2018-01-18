<?php

session_unset('message');

session_destroy();

header('location: index.php');