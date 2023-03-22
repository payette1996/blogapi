async function fetchView(view) {
    const response = await fetch(`app/views/forms/${view}.html`);
    const html = await response.text();
    return html;
}

async function setView(target, view) {
    // document.querySelector(`${target}`).innerHTML = await fetchView(`${view}`);
    const parent = document.querySelector(`${target}`);
    const child = document.createElement("section");
    child.innerHTML = await fetchView(`${view}`);

    parent.append(child);

    return child;
}

export { fetchView, setView };