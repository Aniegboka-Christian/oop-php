<?php

require 'classes/Dbh.php';
require 'classes/UserAuth.php';
require 'classes/Route.php';
require 'index.php';

$route = new formController();

$route->handleForm();