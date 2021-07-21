<?php

$file = $_FILES["file"];






move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/video.mp4");



header("Location: index.php");