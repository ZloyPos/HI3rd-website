function filterWeapons(category) {
    const weaponCards = document.querySelectorAll(".weapon-card");

    weaponCards.forEach(card => {
        const cardCategory = card.getAttribute("data-category");

        if (category === "all" || category === cardCategory) {
            card.classList.remove("hidden");
        } else {
            card.classList.add("hidden");
        }
    });
}
