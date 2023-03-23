document.querySelector("#loginForm").addEventListener("submit", async event => {
    event.preventDefault();

    alert("LOGGED IN");
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm", "splashForm");
});