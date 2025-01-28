const openModalPremium = document.getElementById("openModalPremium");
const openModalPremium1 = document.getElementById("openModalPremium1");
const closeModalPremium = document.getElementById("closeModalPremium");
const modalPremium = document.getElementById("modalPremium");
const fadeModalPremium = document.getElementById("fadeModalPremium");

const toggleModalPremium = () => {
    modalPremium.classList.toggle("hideModalPremium");
    fadeModalPremium.classList.toggle("hideModalPremium");
};

if (openModalPremium1) {
    openModalPremium1.addEventListener("click", toggleModalPremium);
}
if (openModalPremium) {
    openModalPremium.addEventListener("click", toggleModalPremium);
}
if (closeModalPremium) {
    closeModalPremium.addEventListener("click", toggleModalPremium);
}
