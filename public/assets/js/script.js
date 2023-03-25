async function setView(view) {
    const viewResponse = await fetch(`app/views/${view}.html`, {
        headers: { 'Cache-Control': 'no-cache' }
    });

    const helperResponse = await fetch(`app/helpers/${view}.js`, {
        headers: { 'Cache-Control': 'no-cache' }
    });

    if (viewResponse.ok && helperResponse.ok) {
        const mainElement = document.querySelector("main");
        const fetchedHtml = await viewResponse.text();
        mainElement.innerHTML = fetchedHtml;

        const currentScriptElement = document.querySelector("#currentScript");
        currentScriptElement.remove();
        const newScriptElement = document.createElement("script");
        newScriptElement.id = "currentScript";
        newScriptElement.defer = true;
        const fetchedScript = await helperResponse.text();
        newScriptElement.innerHTML = fetchedScript;
        const headElement = document.querySelector("head");
        headElement.append(newScriptElement);
    } else {
        throw new Error("Unable to fetch the required resource.");
    }
}

setView("splashForm");