window.loginForm = document.querySelector("#loginForm");

loginForm.addEventListener("submit", async event => {
    event.preventDefault();

    const formData = new FormData(loginForm);
    const formDataObject = {};
    formData.forEach((value, key) => {
      formDataObject[key] = value;
    });

    const response = await fetch("/blogapi/login", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formDataObject)
    });

    if (response.ok) {
        const responseJson = await response.json();
        if (responseJson.authenticated) {
            setView("dashboard", "Welcome to your dashboard!");
        } else {
            toast("Incorrect combination!");
        }
    } else {
        throw new Error("An error occured upon attempting to login.");
    }
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm");
});