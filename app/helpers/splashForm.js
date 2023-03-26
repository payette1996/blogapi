window.splashForm = document.querySelector("#splashForm");

splashForm.addEventListener("submit", async event => {
    event.preventDefault();

    const action = event.submitter.value;
    if (action === "Register") {
        await setView("registerForm", "If you already have an account, you can login instead!");
    } else if (action === "Login"){
        await setView("loginForm", "If you don't have an account, try registering first!");
    }
});