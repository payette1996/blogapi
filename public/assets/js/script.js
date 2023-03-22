import { setView } from "/blogapi/app/helpers/viewsHelper.mjs";

const splashForm = await setView("main", "splash");

splashForm.addEventListener("submit", event => {
    event.preventDefault();
});