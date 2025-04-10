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

// Избор на план
const plans = document.querySelectorAll(".plan");
const upgradeButton = document.querySelector(".upgrade-btn");

plans.forEach(plan => {
    plan.addEventListener("click", function() {
        // Премахване на активния клас от всички планове
        plans.forEach(p => p.classList.remove("selected"));

        // Добавяне на активен клас към избрания план
        plan.classList.add("selected");

        // Промяна на текста на бутона
        const planName = plan.querySelector("h3").innerText;
        upgradeButton.innerText = `Upgrade to ${planName}`;
    });
});
