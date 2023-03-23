if (typeof registerForm !== "undefined") {
    delete registerForm;
    const registerForm = document.querySelector("#registerForm");
} else {
    const registerForm = document.querySelector("#registerForm");
}


registerForm.addEventListener("submit", async event => {
    event.preventDefault();

    // fetch("/login", {
    //     method: "POST",
    //     body: new FormData(registerForm)
    // });
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm", "splashForm");
});