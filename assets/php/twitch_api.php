<?php
include_once "twitch_api_keys.php";

$_GETQuery = json_decode($_GET["q"], true);
$response;

if (isset($_GETQuery["type"])) //Query has type ? get query type : return null
{
    if ($_GETQuery["type"] == "liveChannels")
    {
        $twitchLocation = "/streams";
        $twitchQuery = $_GETQuery["query"];
        $response->results = json_decode(makeTwitchRequest($twitchLocation, $twitchQuery), true);
    }
    if ($_GETQuery["type"] == "anyLive")
    {
        $twitchLocation = "/streams";
        $twitchQuery = $_GETQuery["query"];
        $twitchResponse = json_decode(makeTwitchRequest($twitchLocation, $twitchQuery), true);
        if (count($twitchResponse["data"]) >= 1) { $response->results = true; }
        else { $response->results = false; }
    }
}
else { $response->results = null; }

echo json_encode($response);

function makeTwitchRequest(&$twitchLocation, &$twitchQuery)
{
    global $client_id, $Authorization;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.twitch.tv/helix" . $twitchLocation . "?" . $twitchQuery); //Set URL and query
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Return response instead of echoing it
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Client-Id: " . $client_id,
        "Authorization: Bearer " . $Authorization
    )); //Set headers
    $curlResponse = curl_exec($ch);
    curl_close($ch);
    return $curlResponse;
}