function toggleItems(sectionId) {
    const section = document.getElementById(sectionId);
    const items = section.querySelectorAll('.item.hidden');
    const button = section.querySelector('.show-more');

    items.forEach(item => {
        if (item.style.display === 'none' || item.style.display === '') {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    if (button.textContent === 'Xem Tất Cả') {
        button.textContent = 'Thu Gọn';
    } else {
        button.textContent = 'Xem Tất Cả';
    }
}

// script.js
// Get the button
let backToTopBtn = document.getElementById("backToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backToTopBtn.style.display = "block";
    } else {
        backToTopBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalImg");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it

function openModal(image) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImage");
    modal.style.display = "block";
    modalImg.src = image.src;
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}


window.onclick = function (event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}