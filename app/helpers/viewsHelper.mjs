async function fetchView(view) {
    const response = await fetch(`app/views/forms/${view}.html`);
    const html = await response.text();
    return html;
}

async function setView(target, view) {
    document.querySelector(`${target}`).innerHTML = await fetchView(`${view}`);
}

export { fetchView, setView };