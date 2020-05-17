const cards = getAll(".card");

cards.forEach(card => {
    const bookmark = get(".card-bookmark", card);
    bookmark.addEventListener("click", () => {
        bookmark.classList.toggle("red");
    });
});

function get(sel, target = document) {
    return target.querySelector(sel);
}

function getAll(sel, target = document) {
    return target.querySelectorAll(sel);
}
