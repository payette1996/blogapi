window.loginForm = document.querySelector("#loginForm");

loginForm.addEventListener("submit", async event => {
    event.preventDefault();

    const response = await fetch("/blogapi/login", {
        method: "POST",
        body: new FormData(loginForm)
    });

    document.querySelector("main").append(await response.text());
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm");
});