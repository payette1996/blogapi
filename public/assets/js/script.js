import { setView } from "/blogapi/app/helpers/viewsHelper.mjs";

let view = await setView("main", "splashForm");

view.addEventListener("submit", async function(event) {
    event.preventDefault();

    const action = event.submitter.value;
    this.remove();

    if(action === "Register") {
        view = await setView("main", "registerForm", "submit", async event => {
            event.preventDefault();
            console.log("REGISTERING");
            view = await setView("main", "loginForm", "submit", async event => {
                event.preventDefault();
                console.log("LOGGING IN");
                view = await setView("main", "postForm", "submit", async event => {
                    event.preventDefault();
                    console.log("POSTING");
                });
            });
        });

    } else if (action === "Login") {
        view = await setView("main", "loginForm", "submit", async event => {
            event.preventDefault();
            console.log("LOGGING IN");
            view = await setView("main", "postForm", "submit", async event => {
                event.preventDefault();
                console.log("POSTING");
            });
        });
    }
});