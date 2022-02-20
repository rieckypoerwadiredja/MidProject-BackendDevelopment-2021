const card = document.querySelectorAll('.item .filter');

card.forEach((e) => {
    e.addEventListener("click", () => {


        // kalo diklik ditambah klass active
        // yg lainnya klo ada kelasnya active akan dihapus
        for (let i = 0; i <= card.length; i++) {

            if (card[i].classList.contains("active")) {
                card[i].classList.remove("active");
            } else {
                e.classList.add("active");
            }
        }

    })
});