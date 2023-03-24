if (typeof loginForm !== "undefined") {
    delete loginForm;
    const loginForm = document.querySelector("#loginForm");
} else {
    const loginForm = document.querySelector("#loginForm");
}

loginForm.addEventListener("submit", async event => {
    event.preventDefault();

    const response = await fetch("/blogapi/login", {
        method: "POST",
        body: new FormData(loginForm)
    });

    console.log(await response.text());
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm", "splashForm");
});