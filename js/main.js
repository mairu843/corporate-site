const target = document.getElementById("menu");
target.addEventListener('click', () => {
    target.classList.toggle('open');
    const list = document.getElementById("header-list");
    list.classList.toggle('in');
});