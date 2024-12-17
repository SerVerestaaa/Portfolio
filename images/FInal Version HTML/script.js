document.addEventListener("DOMContentLoaded", function () {
    const carousel./images = document.querySelectorAll(".right img");
    let currentIndex = 0;
    const intervalTime = 3000; // Delay between slide transitions in milliseconds

    function nextImage() {
        carousel./images[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % carousel./images.length;
        carousel./images[currentIndex].classList.add("active");
    }

    setInterval(nextImage, intervalTime);
});


