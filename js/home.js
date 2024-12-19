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

const produks = document.querySelectorAll(".product-item");

function detailproduk(e){
    let id =e.currentTarget.dataset.id;
    window.location.href = `produk.php?id=${id}`;
    // console.log(id);
}

produks.forEach(produk => {
    produk.addEventListener("click",detailproduk);
});

    function filterProducts() {
        // Ambil semua checkbox yang dicentang
        const checkedCategories = Array.from(
            document.querySelectorAll('.filter-content input[type="checkbox"]:checked')
        ).map(checkbox => checkbox.value);

        // Ambil semua elemen produk
        const products = document.querySelectorAll('.product-item');

        // Tampilkan atau sembunyikan produk berdasarkan kategori
        products.forEach(product => {
            const category = product.getAttribute('data-category');
            if (checkedCategories.length === 0 || checkedCategories.includes(category)) {
                product.style.display = "block"; // Tampilkan produk
            } else {
                product.style.display = "none"; // Sembunyikan produk
            }
        });
    }

    // Pasang event listener pada semua checkbox
    document.querySelectorAll('.filter-content input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });


    document.getElementById('shoe-category').addEventListener('change', function () {
        const sortBy = this.value; // Opsi yang dipilih
        const productsContainer = document.querySelector('.katalog-grid');
        const products = Array.from(productsContainer.children); // Semua produk
        
        // Fungsi untuk membandingkan elemen berdasarkan kriteria
        const compare = (a, b) => {
            if (sortBy === "Murah") {
                return parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price'));
            } else if (sortBy === "A-Z") {
                return a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
            } else if (sortBy === "Z-A") {
                return b.getAttribute('data-name').localeCompare(a.getAttribute('data-name'));
            } else if (sortBy === "Mahal") {
                return parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price'));
            } 
            return 0; // Default
        };

        // Urutkan elemen
        products.sort(compare);

        // Hapus elemen lama dari DOM dan tambahkan yang sudah diurutkan
        productsContainer.innerHTML = '';
        products.forEach(product => productsContainer.appendChild(product));
    });


