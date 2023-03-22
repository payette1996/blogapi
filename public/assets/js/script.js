import { setView } from "/blogapi/app/helpers/viewsHelper.mjs";

let view = await setView("main", "splashForm", "submit", async event => {
    event.preventDefault();
    const action = event.submitter.value;

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