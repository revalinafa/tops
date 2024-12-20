let all_links = document.querySelectorAll(".header-con-item");

function pindah(event) {
    const link = event.currentTarget.getAttribute("id"); // Ambil ID elemen yang diklik
    window.location.href = link; // Arahkan ke URL
    // console.log(link); // Debugging: tampilkan URL di console
}

all_links.forEach(link => {
    let links = link.getAttribute("id");
    link.addEventListener("click",pindah);
});

function submitForm() {
    var searchTerm = document.getElementById('search').value;
    if (event.key == "Enter") {  // Only submit if 3 or more characters
        document.getElementById('searchForm').submit();
    }
}