window.loginForm = document.querySelector("#loginForm");

loginForm.addEventListener("submit", async event => {
    event.preventDefault();

    const response = await fetch("/blogapi/login", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: new FormData(loginForm)
    });

    if (response.ok) {
        const responseJson = await response.json();
        if (responseJson.authenticated) {
            setView("dashboard");
            document.querySelector("main").append("Logged in!");
        } else {
            document.querySelector("main").append("Login failed!");
        }
    } else {
        throw new Error("An error occured upon attempting to login.");
    }
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm");
});