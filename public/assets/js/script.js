import { setView } from "/blogapi/app/helpers/viewsHelper.mjs";

let view = await setView("main", "splash");

view.addEventListener("submit", async function(event) {
    event.preventDefault();

    const action = event.submitter.value;
    this.remove();

    if(action === "Register") {
        view = await setView("main", "register", "submit", event => {
            event.preventDefault();
            console.log("REGISTERING");
        });

    } else if (action === "Login") {
        view = await setView("main", "login", "submit", event => {
            event.preventDefault();
            console.log("LOGGING IN");
        });
    }
});