$(document).ready(function () {
    var quantityInput = $("#quantityInput");

    $("#addBtn").on("click", function () {
        var currentValue = parseInt(quantityInput.val());
        quantityInput.val(currentValue + 1);
    });

    $("#subtractBtn").on("click", function () {
        var currentValue = parseInt(quantityInput.val());
        if (currentValue > 1) {
            quantityInput.val(currentValue - 1);
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.button-size');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Reset color for all buttons
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Set color for the clicked button
            this.classList.add('active');
        });

        // Add hover effect
        button.addEventListener('mouseover', function () {
            this.classList.add('hover');
        });

        // Remove hover effect
        button.addEventListener('mouseout', function () {
            this.classList.remove('hover');
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.button-cart');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Reset color for all buttons
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Set color for the clicked button
            this.classList.add('active');
        });

        // Add hover effect
        button.addEventListener('mouseover', function () {
            this.classList.add('hover');
        });

        // Remove hover effect
        button.addEventListener('mouseout', function () {
            this.classList.remove('hover');
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.button-img');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Reset color for all buttons
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Set color for the clicked button
            this.classList.add('active');
        });

        // Add hover effect
        button.addEventListener('mouseover', function () {
            this.classList.add('hover');
        });

        // Remove hover effect
        button.addEventListener('mouseout', function () {
            this.classList.remove('hover');
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.button-color');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            // Reset color for all buttons
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Set color for the clicked button
            this.classList.add('active');
        });

        // Add hover effect
        button.addEventListener('mouseover', function () {
            this.classList.add('hover');
        });

        // Remove hover effect
        button.addEventListener('mouseout', function () {
            this.classList.remove('hover');
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.button-buy');

    buttons.forEach(button => {

        // Add hover effect
        button.addEventListener('mouseover', function () {
            this.classList.add('hover');
        });

        // Remove hover effect
        button.addEventListener('mouseout', function () {
            this.classList.remove('hover');
        });
    });
});