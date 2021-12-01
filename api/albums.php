<?php
require_once "../data/albums.php";

header("Content-Type: application/json");
echo json_encode($albums);
