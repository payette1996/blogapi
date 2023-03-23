const loginForm = document.querySelector("#loginForm");
const backButton = document.querySelector("#backButton");

loginForm.addEventListener("submit", async event => {
    event.preventDefault();

    alert("LOGGED IN");
});

backButton.addEventListener("click", () => {
    setView("main", "splashForm", "splashForm");
});