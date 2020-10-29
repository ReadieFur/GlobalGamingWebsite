window.addEventListener("DOMContentLoaded", () =>
{
    let twitchQueryParams = new URLSearchParams();
    twitchChannels.forEach(item => { twitchQueryParams.append("user_login", item); });
    makeTwitchRequest("liveChannels", twitchQueryParams.toString(), (response) =>
    {
        let liveUsers = [];
        let onlineChannels = document.querySelector("#onlineChannels");
        let offlineChannels = document.querySelector("#offlineChannels").querySelector(".channels");

        response = JSON.parse(response);
        if (response.results.data.length >= 1)
        {
            document.querySelector("#onlineChannels").style.display = "block";
            response.results.data.forEach(result => { liveUsers.push(result.user_name); });
        }

        onlineChannels = onlineChannels.querySelector(".channels");
        twitchChannels.forEach(channel =>
        {
            let player = createTwitchPlayer(channel);
            if (liveUsers.includes(channel)) { onlineChannels.appendChild(player).outerHTML += "\n"; }
            else { offlineChannels.appendChild(player).outerHTML += "\n"; }
        });
    });
});

function createTwitchPlayer(username)
{
    let border = document.createElement("span");
    let player = document.createElement("iframe");
    player.src = `https://player.twitch.tv/?channel=${username}&parent=global-gaming.co&muted=true`;
    player.scrolling = "no";
    player.allowFullscreen = "true";

    border.appendChild(player);
    return border;
}