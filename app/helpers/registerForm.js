window.registerForm = document.querySelector("#registerForm");

registerForm.addEventListener("submit", async event => {
    event.preventDefault();

    const formData = new FormData(registerForm);
    const formDataObject = {};
    formData.forEach((value, key) => {
      formDataObject[key] = value;
    });
    
    const response = await fetch("/blogapi/register", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formDataObject)
    });

    if (response.ok) {
        const responseJson = await response.json();
        console.log(responseJson.registered);
        if (responseJson.registered) {
            setView("loginForm");
        } else {
            document.querySelector("main").append("An error occured during registration");
        }
    }
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm");
});