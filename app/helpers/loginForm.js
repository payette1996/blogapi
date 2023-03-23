if (typeof loginForm !== "undefined") {
    delete loginForm;
    const loginForm = document.querySelector("#loginForm");
} else {
    const loginForm = document.querySelector("#loginForm");
}

loginForm.addEventListener("submit", async event => {
    event.preventDefault();

    alert("LOGGED IN");
});

document.querySelector("#backButton").addEventListener("click", () => {
    setView("splashForm", "splashForm");
});