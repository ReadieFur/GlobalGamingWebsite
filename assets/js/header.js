function highlightActivePage()
{
    var path = window.location.pathname.split("/").filter((el) => { return el != ""; });

    document.getElementById("header").querySelectorAll("a").forEach(element =>
    {
        if(new RegExp(path.join("|")).test(element.innerHTML.replace(" +", "").toLowerCase())) { element.className += " red"; }
    });
}
highlightActivePage();