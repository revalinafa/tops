const initSlider = () => {
    const cardList = document.querySelector(".slider-wrapper .card-list");  
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".rekomendasi-container .scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = cardList.scrollWidth - cardList.clientWidth;
    console.log(cardList, slideButtons, sliderScrollbar, scrollbarThumb);

    scrollbarThumb.addEventListener("mousedown" , (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;

        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;
            const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition/maxThumbPosition) * maxScrollLeft ;

            scrollbarThumb.style.left = `${boundedPosition}px`;
            cardList.scrollLeft = scrollPosition;
        }

        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);
    });

    slideButtons.forEach(button => {
        button.addEventListener("click" , () => {
            const direction = button.id === "prev-slide" ? -1 : 1;
            const scrollAmount = cardList.clientWidth * direction ;
            console.log(`Button clicked: ${button.id}, Scroll amount: ${scrollAmount}`);

            cardList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    const handleSlideButtons = () => {
        slideButtons[0].style.display = cardList.scrollLeft <= 0 ? "none" : "block";
        slideButtons[1].style.display = cardList.scrollLeft >= maxScrollLeft ? "none" : "block";
    }

    const updateScrollThumbPosition = () => {
        const scrollPosition = cardList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
    }
    
    
    cardList.addEventListener("scroll",() =>{
        handleSlideButtons();
        updateScrollThumbPosition();
    });
}

window.addEventListener("load", initSlider);
