document.querySelector("#logoutButton").addEventListener("click", async () => {
    const response = await fetch("/blogapi/logout", { method: "POST" });
    if (response.ok) {
        setView("splashForm", "You've logged out!");
    }
});

async function fetchSession() {
    const response = await fetch("/blogapi/session");
    if (response.ok) {
        return await response.json();
    }
}

async function printSession() {
    const session = await fetchSession();
    
    const section = document.querySelector("#sessionSection");
    Object.keys(session).forEach(key => {
        section.innerHTML += `<strong>${key} : </strong>${session[key]}<br>`;
    });
}

printSession();