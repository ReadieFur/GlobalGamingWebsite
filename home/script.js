window.addEventListener("load", () =>
{
    let twitchQueryParams = new URLSearchParams();
    twitchChannels.forEach(item => { twitchQueryParams.append("user_login", item); });
    makeTwitchRequest("anyLive", twitchQueryParams.toString(), (response) =>
    { if (JSON.parse(response).results) { document.querySelector("#twitchStreaming").classList.add("live"); } });
});