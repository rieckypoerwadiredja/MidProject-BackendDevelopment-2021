const safeIcon = document.querySelectorAll('.safe-icon');

safeIcon.forEach((e) => {
    e.addEventListener("click", () => {
        if (e.children[0].classList.contains('fas')) {
            e.children[0].className = 'far fa-bookmark';
        } else {
            e.children[0].className = 'fas fa-bookmark';
        }

    });

});