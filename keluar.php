<?php
include "partials/functions.php";
error_reporting();

session_start();
session_unset();
session_destroy();

header(directToLogin());

exit();