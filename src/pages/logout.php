<?php
require("../components/header.php");
session_unset();
session_destroy();
header("Location: /stylish/index.php");
?>