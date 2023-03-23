const splashForm = document.querySelector("#splashForm");

splashForm.addEventListener("submit", async event => {
    event.preventDefault();

    const action = event.submitter.value;
    if (action === "Register") {
        await setView("main", "registerForm", "registerForm");
    } else if (action === "Login"){
        await setView("main", "loginForm", "loginForm");
    }
});