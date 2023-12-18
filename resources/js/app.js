import "./bootstrap";
import "flowbite";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

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
