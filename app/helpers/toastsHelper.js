function toast(toastMsg) {
    const currToast = document.querySelector("#toast");
    if (currToast) { currToast.remove(); }

    const mainElement = document.querySelector("main");
    const toastEl = document.createElement("div");
    toastEl.id = "toast";
    toastEl.classList.add("toast");
    toastEl.textContent = toastMsg;
    mainElement.append(toastEl);
    const toastWidth = toastEl.offsetWidth;
    document.documentElement.style.setProperty("--toast-right", `-${toastWidth}px`);
}