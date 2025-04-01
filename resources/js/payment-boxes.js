// Отваряне на модала
document.getElementById("openModal").addEventListener("click", function() {
    document.getElementById("pricingModal").style.display = "flex";
});

// Затваряне на модала
document.querySelector(".close").addEventListener("click", function() {
    document.getElementById("pricingModal").style.display = "none";
});

// Превключване между Monthly и Annual
document.getElementById("monthlyBtn").addEventListener("click", function() {
    document.querySelectorAll(".price").forEach(el => el.style.display = "block");
    document.querySelectorAll(".annual-price").forEach(el => el.style.display = "none");
    document.getElementById("monthlyBtn").classList.add("active");
    document.getElementById("annualBtn").classList.remove("active");
});

document.getElementById("annualBtn").addEventListener("click", function() {
    document.querySelectorAll(".price").forEach(el => el.style.display = "none");
    document.querySelectorAll(".annual-price").forEach(el => el.style.display = "block");
    document.getElementById("annualBtn").classList.add("active");
    document.getElementById("monthlyBtn").classList.remove("active");
});
