async function setView(target, view, script = null) {
    let response;

    response = await fetch(`app/views/${view}.html`);
    const fetchedHtml = await response.text();

    const targetElement = document.querySelector(`${target}`);
    targetElement.innerHTML = fetchedHtml;
    const insert = targetElement.children[0];

    if (script) {
        const headElement = document.querySelector("head");
        const scriptElement = document.createElement("script");
        scriptElement.defer = true;

        response = await fetch(`app/helpers/${script}.js`);
        const fetchedScript = await response.text();
        scriptElement.innerHTML = fetchedScript;
        headElement.append(scriptElement);
    }

    return insert;
}

setView("main", "splashForm", "splashForm");