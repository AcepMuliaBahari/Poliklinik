import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// document
//     .getElementById("dark-mode-toggle")
//     .addEventListener("click", function () {
//         const html = document.documentElement; // Mengakses elemen <html>
//         if (html.classList.contains("dark")) {
//             html.classList.remove("dark");
//             // Simpan preferensi pengguna jika diperlukan
//         } else {
//             html.classList.add("dark");
//             // Simpan preferensi pengguna jika diperlukan
//         }
//     });
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Check for user preference in local storage
var userThemePreference = localStorage.getItem("color-theme");

// Check if the user has a preference stored
if (userThemePreference === "dark") {
    document.documentElement.classList.add("dark");
    themeToggleLightIcon.classList.remove("hidden");
} else if (userThemePreference === "light") {
    document.documentElement.classList.remove("dark");
    themeToggleDarkIcon.classList.remove("hidden");
} else if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    // If no preference is stored, use system preference
    document.documentElement.classList.add("dark");
    themeToggleLightIcon.classList.remove("hidden");
} else {
    document.documentElement.classList.remove("dark");
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // Toggle icons inside the button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
    } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
    }
});
