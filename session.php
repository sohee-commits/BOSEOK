<?php
session_start();

echo "<script>window._applenosebook = " . (isset ($_SESSION["user"]) ? $_SESSION["user"] : "undefined") . "</script>";

