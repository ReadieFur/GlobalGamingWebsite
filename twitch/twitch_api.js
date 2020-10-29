let twitchChannels = [
    "kofteamorg",
    "snipernikola",
    "iwanthegod",
    "kof_readie",
    "ladicot",
    "m1styr4z0r",
    "sasukeidkk"
];

function makeTwitchRequest(type, query, success)
{
    //Auto encodes URI component
    $.ajax(
    {
        url: "/twitch/twitch_api.php",
        data:
        {
            q: JSON.stringify(
            {
                type: type,
                query: query
            })
        },
        type: "GET",
        success: success
    });
}

/*How to use:
makeTwitchRequest(<"REQUEST TYPE">, <"Query">, <SUCCESS FUNCTION (DATA)>)
Example:
let twitchQueryParams = new URLSearchParams(); //Make new URL query class
twitchChannels.forEach(item => { twitchQueryParams.append("user_login", item); }); //Set URL paramaters, in this case all the Twitch usernames
makeTwitchRequest("liveChannels", twitchQueryParams.toString(), (response) => //Send request to TwitchAPI, (<"REQUEST TYPE">, <"Query">, <SUCCESS FUNCTION (DATA)>)
{ console.log(JSON.parse(response)); }); //Output response string as a JSON to the console*/