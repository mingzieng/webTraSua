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

// Back to top button functionality
let backToTopBtn = document.getElementById("backToTopBtn");

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

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Modal functionality
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Get all images with the class 'openModalImg' and add click event listeners
    var images = document.getElementsByClassName('openModalImg');
    Array.from(images).forEach(function(image) {
        image.addEventListener('click', function() {
            var name = this.getAttribute('data-name');
            var price = this.getAttribute('data-price');
            var src = this.getAttribute('src');

            // Set modal content
            document.getElementById('modalHeader').innerText = name;
            document.getElementById('modalImg').src = src;
            document.getElementById('modalPrice').innerText = 'Price: ' + price + 'd';

            // Show the modal
            modal.style.display = "block";
        });
    });

    // Add event listeners for quantity buttons
    var clickBuy = document.querySelector('.click-buy');
    var quantityElement = clickBuy.querySelector('p');
    var quantity = parseInt(quantityElement.textContent);

    clickBuy.addEventListener('click', function(event) {
        if (event.target.classList.contains('click')) {
            if (event.target.textContent === '+') {
                quantity++;
            } else if (event.target.textContent === '-') {
                if (quantity > 0) {
                    quantity--;
                }
            }
            quantityElement.textContent = quantity;
        }
    });
});
