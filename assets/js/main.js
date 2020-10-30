window.addEventListener('DOMContentLoaded', (event) =>
{
    highlightActivePage();
});

function highlightActivePage()
{
    var path = window.location.pathname.split("/").filter((el) => { return el != ""; });

    document.querySelector("#header").querySelectorAll("a").forEach(element =>
    {
        if(new RegExp(path.join("|")).test(element.innerHTML.replace(" +", "").toLowerCase()))
        {
            element.classList.add("red");
            try
            {
                let whyIsThisSoFarBack = element.parentElement.parentElement.parentElement;
                if (whyIsThisSoFarBack.classList.contains("naviDropdown")) { whyIsThisSoFarBack.firstElementChild.classList.add("red"); }
            }
            catch (error) { /*console.error(error);*/ }
        }
    });
}