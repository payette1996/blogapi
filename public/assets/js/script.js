async function fetchSession() {
    const response = await fetch("/blogapi/session");

    if (response.ok) {
        const responseJson = await response.json();

        if (responseJson.session !== false) {
            setView("dashboard", `Welcome back ${responseJson.firstName}!`);
        } else {
            setView("splashForm", "Welcome to Blogapi!");
        }
    }

}

fetchSession();