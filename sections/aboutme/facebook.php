<?php
session_start();

if (isset($_SESSION["basti"])) {
    echo json_encode(
        [
            "success" => true,
            "data" => [
                [
                    "text" => "Facebook Beiträge nicht geladen, wenn du angemeldet bist!",
                    "time" => "am 01.01.2000 um 13:37",
                ],
            ],
        ]
    );
    exit;
}

error_reporting(E_ERROR);

define('MAX_COUNT', 4);

require_once "facebook/facebook.php";

$fb = new Facebook(
    [
        "appId" => "132938667279180",
        "secret" => "41f4c3c2ea09a15a8dad0f78dd42a8df",
    ]
);

$posts = null;
try {
    $posts = $fb->api("/DJDoM1niC/feed?fields=message,full_picture,created_time");
} catch (Exception $e) {
}

if ($posts == null || !isset($posts["data"])) {
    echo json_encode(["success" => false]);
} else {
    $count = 0;
    $response = ["success" => true, "data" => []];
    foreach ($posts["data"] as $post) {
        if ($count >= MAX_COUNT) {
            break;
        }
        if (!isset($post["message"]) || isset($post["story"])) {
            continue;
        }
        $data = [
            "text" => str_replace("\n", "<br>", $post["message"]),
            "time" => date("\\a\\m d.m.Y \\u\\m H:i", strtotime($post["created_time"])),
        ];
        if (isset($post["full_picture"])) {
            $data["picture"] = $post["full_picture"];
        }
        $response["data"][] = $data;
        $count++;
    }
    echo json_encode($response);
}