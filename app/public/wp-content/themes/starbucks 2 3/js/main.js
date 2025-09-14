// console.log("JS loaded");

const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const mobileMenu = document.getElementById("mobileMenu");
// console.log(menuBtn);
// event name, callback function
menuBtn.addEventListener("click", function() {
    //console.log("menuBtn has been clicked!")
    mobileMenu.classList.add("active");
}); // click method end
closeBtn.addEventListener("click", function() {
    mobileMenu.classList.remove("active");
});

