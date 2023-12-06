function toggleCheckbox() {
    var checkboxes = document.querySelectorAll('.item-container input[type="checkbox"]');
    var totalItems = 0;
    var totalPrice = 0;

    checkboxes.forEach(function(checkbox) {
        if (checkbox.checked) {
            var itemContainer = checkbox.closest('.item-container');

            var quantityNumber = parseInt(itemContainer.querySelector('.quantity-number').textContent);
            var itemTotalPrice = parseInt(itemContainer.querySelector('.item-total-price').textContent);

            totalItems += quantityNumber;
            totalPrice += itemTotalPrice;
        }
    });

    var totalItemText = totalItems === 1 ? 'Item' : 'Items';
    document.querySelector('.total-item').textContent = 'Total (' + totalItems + ' ' + totalItemText + '):';

    document.querySelector('.total-price').textContent = totalPrice;
}