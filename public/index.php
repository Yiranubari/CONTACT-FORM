<?php


session_start();
// handle request
dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
