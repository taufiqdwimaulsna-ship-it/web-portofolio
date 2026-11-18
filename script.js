// 1. Fitur Mode Malam & Mode Terang
const themeToggle = document.getElementById("themeToggle");
const body = document.body;

// Cek apakah pengguna sebelumnya memilih light mode
if (localStorage.getItem("theme") === "light") {
    body.classList.add("light-mode");
    themeToggle.textContent = "🌙";
}

themeToggle.addEventListener("click", () => {
    body.classList.toggle("light-mode");
    
    if (body.classList.contains("light-mode")) {
        themeToggle.textContent = "🌙"; // Ikon bulan untuk kembali ke mode malam
        localStorage.setItem("theme", "light");
    } else {
        themeToggle.textContent = "☀️"; // Ikon matahari untuk pindah ke mode terang
        localStorage.setItem("theme", "dark");
    }
});

// 2. Toggle Menu Mobile
const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

document.querySelectorAll(".nav-links a").forEach(link => {
    link.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});

// 3. Efek Mengetik Otomatis (Typing Effect) di Bagian Home
const words = ["cepat dan responsif.", "modern dan fungsional.", "terstruktur dan aman."];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;
const typedElement = document.getElementById("typed");

function typeEffect() {
    const currentWord = words[wordIndex];
    
    if (isDeleting) {
        typedElement.textContent = currentWord.substring(0, charIndex - 1);
        charIndex--;
    } else {
        typedElement.textContent = currentWord.substring(0, charIndex + 1);
        charIndex++;
    }

    if (!isDeleting && charIndex === currentWord.length) {
        isDeleting = true;
        setTimeout(typeEffect, 1500);
        return;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
    }

    setTimeout(typeEffect, isDeleting ? 50 : 100);
}

typeEffect();

// 4. Simulasi Kirim Form Contact
const contactForm = document.getElementById("contactForm");
const formStatus = document.getElementById("formStatus");

contactForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const nama = document.getElementById("nama").value;
    formStatus.textContent = `Terima kasih, ${nama}! Pesan Anda telah berhasil terkirim.`;
    contactForm.reset();
});