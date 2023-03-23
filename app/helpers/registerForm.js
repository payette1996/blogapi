document.querySelector("#registerForm").addEventListener("submit", async event => {
    event.preventDefault();

    alert("REGISTERED");
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm", "splashForm");
});