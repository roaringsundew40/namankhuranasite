<?php

$res = [];

if (!$_GET['resource']) {
    file_put_contents('php://stderr', '[!!!] No resource given.' . PHP_EOL);
} else {
    $res = [
        "subject" => $_GET['resource'],
        "links" => [
            [
                "rel" => "http://openid.net/specs/connect/1.0/issuer",
                "href" => "https://dev-08vxbq20md1rrucp.us.auth0.com/",
            ],
        ],
    ];
}

echo json_encode($res);