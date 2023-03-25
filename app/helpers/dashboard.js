document.querySelector("#logoutButton").addEventListener("click", async () => {
    const response = await fetch("/blogapi/logout", { method: "POST" });
    if (response.ok) {
        setView("splashForm");
    } else {
        throw new Error("An error occured upon attempting to logout.");
    }
});