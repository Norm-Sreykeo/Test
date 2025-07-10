<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
       $targetDir = "../img/";
       $targetFile = $targetDir . basename($_FILES["image"]["name"]);
       if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
           echo json_encode(["success" => true, "url" => "/img/" . basename($_FILES["image"]["name"])]);
       } else {
           echo json_encode(["success" => false, "error" => "Upload failed"]);
       }
   } else {
       echo json_encode(["success" => false, "error" => "No file uploaded"]);
   }
   ?>