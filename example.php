<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

require 'vendor/autoload.php';

var_dump(AfriCC\Valid\email('test@afri.cc'));
var_dump(AfriCC\Valid\email('invalid@invalid'));
