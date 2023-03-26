document.querySelector("#logoutButton").addEventListener("click", async () => {
    const response = await fetch("/blogapi/logout", { method: "POST" });
    if (response.ok) {
        setView("splashForm", "You've logged out!");
    }
});

async function fetchSession() {
    const response = await fetch("/blogapi/session");
    if (response.ok) {
        return await response.json();
    }
}

async function printSession() {
    const session = await fetchSession();

    const section = document.querySelector("#sessionSection");
    Object.keys(session).forEach(key => {
        section.innerHTML += `<strong>${key} : </strong>${session[key]}<br>`;
    });
}

printSession();

async function fetchBlogs() {
    const response = await fetch("/blogapi/blogs");
    if (response.ok) {
        return await response.json();
    }
}

async function printBlogs() {
    const blogs = await fetchBlogs();

    const section = document.querySelector("#blogsSection");
    Object.keys(blogs).forEach(key => {
        section.innerHTML += `<strong>${key} : </strong>${blogs[key]}<br>`;
    });
}

printBlogs();

async function fetchPosts() {
    const response = await fetch("/blogapi/posts");
    if (response.ok) {
        return await response.json();
    }
}

async function printPosts() {
    const posts = await fetchPosts();

    const section = document.querySelector("#postsSection");
    Object.keys(posts).forEach(key => {
        section.innerHTML += `<strong>${key} : </strong>${posts[key]}<br>`;
    });
}

printPosts();