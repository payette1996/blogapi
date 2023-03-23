document.querySelector("#splashForm").addEventListener("submit", async event => {
    event.preventDefault();

    const action = event.submitter.value;
    if (action === "Register") {
        await setView("registerForm", "registerForm");
    } else if (action === "Login"){
        await setView("loginForm", "loginForm");
    }
});