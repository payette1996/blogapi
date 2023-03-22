async function fetchView(view) {
    const response = await fetch(`views/${view}.html`);
    const html = await response.text();
    return html;
}

async function setView(target, view) {
    document.querySelector('{$target}').innerHTML = await fetchView('{$view}');
}

export { setView };