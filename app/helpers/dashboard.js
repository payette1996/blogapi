document.querySelector("#logoutButton").addEventListener("click", async () => {
    const response = await fetch("/blogapi/logout", { method: "POST" });
    if (response.ok) {
        setView("splashForm", "You've logged out!");
    }
});