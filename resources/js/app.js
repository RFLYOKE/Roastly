import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const buttonMenu = document.getElementById("button-menu");
    const menuItems = document.querySelectorAll(".showMenu");

    if (buttonMenu) {
        buttonMenu.addEventListener("click", function () {
            menuItems.forEach((item) => {
                item.classList.toggle("hidden");
            });

            // Ubah teks tombol (opsional)
            const text = buttonMenu.querySelector("p");
            if (text && text.innerText === "Show Menu") {
                text.innerText = "Hide Menu";
            } else if (text) {
                text.innerText = "Show Menu";
            }
        });
    }
});
