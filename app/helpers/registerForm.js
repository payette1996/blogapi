if (typeof window.registerForm) { delete window.registerForm; }
window.registerForm = document.querySelector("#registerForm");

registerForm.addEventListener("submit", async event => {
    event.preventDefault();

    const response = await fetch("/blogapi/register", {
        method: "POST",
        body: new FormData(registerForm)
    });

    document.querySelector("main").append(await response.text());
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm");
});