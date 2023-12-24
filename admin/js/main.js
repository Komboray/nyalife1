//add hovered class to e selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach((item) => {
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach((item)=> item.addEventListener("mouseover", activeLink));

// Menu toggle
let toggle = document.querySelector(".toggle");
let nav = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function(){
    nav.classList.toggle("active");
    main.classList.toggle("active");
}