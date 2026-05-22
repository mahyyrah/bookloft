<?php
session_start();

$jsonData = file_get_contents("users.json");
$users = json_decode($jsonData, true);

foreach ($users as $i => $user) {

    if ($user["email"] == $_SESSION["user"]) {

        $title = $_POST["title"];
        $status = $_POST["status"];

        if ($status == "reading") {
            $users[$i]["books"]["reading"][] = $title;
        }
        else if ($status == "completed") {
            $users[$i]["books"]["completed"][] = $title;
        }
        else {
            $users[$i]["books"]["not_started"][] = $title;
        }

        break;
    }
}

file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));
?>