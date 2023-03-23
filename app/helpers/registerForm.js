const registerForm = document.querySelector("#registerForm");
const backButton = document.querySelector("#backButton");

registerForm.addEventListener("submit", async event => {
    event.preventDefault();

    alert("REGISTERED");
});

backButton.addEventListener("click", () => {
    setView("main", "splashForm", "splashForm");
});