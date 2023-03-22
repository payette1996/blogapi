async function fetchView(view) {
    const response = await fetch(`app/views/forms/${view}.html`);
    const html = await response.text();
    return html;
}

async function setView(target, view, event = null, callback = null) {
    const element = document.querySelector(`${target}`);
    element.innerHTML = await fetchView(`${view}`);
    const insert = element.children[0];

    if (event && callback) {
        insert.addEventListener(event, callback);
    }

    return insert;
}

export { fetchView, setView };