<?php

$envs = [
    "API_KEY" => ""
    ,"API_URL" => ""
    ,"REDIS_URL" => ""
    ,"LIVE_ETA_OAUTH_URL" => ""
    ,"LIVE_ETA_OAUTH_PATH" => ""
    ,"LIVE_ETA_OAUTH_CLIENT_ID" => ""
    ,"LIVE_ETA_OAUTH_CLIENT_SECRET" => ""
    ,"LIVE_ETA_OAUTH_GRANT_TYPE" => ""
    ,"LIVE_ETA_OAUTH_AUDIENCE" => ""
    ,"LIVE_ETA_REQUEST_URL" => ""
    ,"LIVE_ETA_REQUEST_PATH" => ""
    ,"DESTINATION_COORDINATES" => ""
    ,"CROSSING_GEOMETRY" => ""
    ,"AINO_API_KEY" => ""
];

foreach ($envs as $k => $v) {
    putenv("$k=$v");
};
