if (typeof registerForm !== "undefined") {
    delete registerForm;
    const registerForm = document.querySelector("#registerForm");
} else {
    const registerForm = document.querySelector("#registerForm");
}


registerForm.addEventListener("submit", async event => {
    event.preventDefault();

    const response = await fetch("/blogapi/register", {
        method: "POST",
        body: new FormData(registerForm)
    });

    console.log(await response.text());
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm", "splashForm");
});