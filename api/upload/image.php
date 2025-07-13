<?php
$target_dir = "../../img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo json_encode(["success" => true, "path" => "img/" . basename($_FILES["image"]["name"])]);
} else {
    echo json_encode(["success" => false, "error" => "Upload failed"]);
}
?>