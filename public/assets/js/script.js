async function setView(view, script = null) {
    const headElement = document.querySelector("head");
    const mainElement = document.querySelector("main");
    const currentScriptElement = document.querySelector("#currentScript");
    let response;

    response = await fetch(`app/views/${view}.html`, {
        headers: {
            'Cache-Control': 'no-cache'
        }
    });
    const fetchedHtml = await response.text();

    mainElement.innerHTML = fetchedHtml;

    if (script) {
        currentScriptElement.remove();
        const newScriptElement = document.createElement("script");
        newScriptElement.id = "currentScript";
        newScriptElement.defer = true;

        response = await fetch(`app/helpers/${script}.js`, {
            headers: {
                'Cache-Control': 'no-cache'
            }
        });
        const fetchedScript = await response.text();
        newScriptElement.innerHTML = fetchedScript;
        headElement.append(newScriptElement);
    }
}

setView("splashForm", "splashForm");