// Get references to elements
const openFormButton = document.getElementById("openForm2");
const popupForm = document.getElementById("popupForm2");

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
