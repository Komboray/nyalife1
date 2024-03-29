// Get references to elements
const openFormButton = document.getElementById("openForm2");
const popupForm = document.getElementById("popupForm2");

// Menu toggle
let toggle = document.querySelector(".toggle");
let nav = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function(){
    nav.classList.toggle("active");
    main.classList.toggle("active");
}

// Add click event listener to the span element
openFormButton.addEventListener("click", function () {
    // Show the popup form
    popupForm.style.display = "block";
});

// Function to close the popup form
function closePopupFo() {
    // Hide the popup form
    popupForm.style.display = "none";
}
