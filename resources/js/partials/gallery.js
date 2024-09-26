document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const imageItems = document.querySelectorAll(".image-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const category = this.getAttribute("data-title");

            filterButtons.forEach((btn) => {
                btn.classList.remove("gallery-btn");
            });

            // Add class to the clicked button
            this.classList.add("gallery-btn");

            if (category === "") {
                imageItems.forEach((item) => {
                    item.style.display = "block";
                });
            } else {
                imageItems.forEach((item) => {
                    item.style.display = "none";
                });

                imageItems.forEach((item) => {
                    if (item.getAttribute("data-title") === category) {
                        item.style.display = "block";
                    }
                });
            }
        });
    });
});
