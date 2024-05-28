// $(function ()
// {
//     const username = /(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{10,15}$/;
//     const password = /(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    
//     $('input').each(function ()
//     {
//         $(this).on('input', function ()
//         {
//             const pElement = $(this).siblings().filter('p');

//             if ($(this).attr('id') == "username")
//             {
//                 if (username.test($(this).val()))
//                 {
//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-red-500 focus:border-red-300')
//                     $(this).addClass('focus:ring-green-500 focus:border-green-300')
                    
//                     pElement.html('Username tepat')
//                     pElement.removeClass('text-red-700')
//                     pElement.addClass('text-green-700')

//                     $('#submitBtn').attr('type', 'submit');
//                 }
//                 else
//                 {
//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-green-500 focus:border-green-300')
//                     $(this).addClass('focus:ring-red-500 focus:border-red-300')

//                     pElement.html('Username belum tepat')
//                     pElement.removeClass('text-green-700')
//                     pElement.addClass('text-red-700')

//                     $('#submitBtn').attr('type', 'button');
                    
//                 }
//             }
//             else if ($(this).attr('id') == "password")
//             {
//                 if (password.test($(this).val()))
//                 {
//                     // $(this).removeClass('focus:ring-gray-300 focus:ring-rose-400')
//                     // $(this).addClass("focus:ring-emerald-400")

//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-red-500 focus:border-red-300')
//                     $(this).addClass('focus:ring-green-500 focus:border-green-300')

//                     pElement.html('Password tepat')
//                     pElement.removeClass('text-red-700')
//                     pElement.addClass('text-green-700')

//                     $('#submitBtn').attr('type', 'submit');
//                     // pElement.removeClass('text-indigo-300')
//                     // pElement.addClass('text-emerald-300')
//                 }
//                 else
//                 {
//                     // $(this).removeClass('focus:ring-indigo-500 focus:ring-emerald-400')
//                     // $(this).addClass("focus:ring-rose-400")
//                     $(this).removeClass('focus:ring-sky-500 focus:border-sky-500 focus:ring-green-500 focus:border-green-300')
//                     $(this).addClass('focus:ring-red-500 focus:border-red-300')

//                     pElement.html('Password belum tepat')
//                     pElement.removeClass('text-green-700')
//                     pElement.addClass('text-red-700')

//                     $('#submitBtn').attr('type', 'button');
//                     // pElement.removeClass('text-indigo-300 text-emerald-300')
//                     // pElement.addClass('text-rose-300')
//                 }
//             }
            
//         })
//     })
    
// })

let itemIdToDelete;
let subtotal = 0;

document.addEventListener('DOMContentLoaded', (event) => {
    const buttons = document.querySelectorAll('[id^="addButton-"]');
    const selectedMenuItems = document.getElementById('selectedMenuItems');
    const subtotalElement = document.getElementById('subTotal');

    function formatNumber(number) {
        return number.toLocaleString('id-ID');
    }

    function updateSubtotal() {
        subtotalElement.textContent = `Rp. ${formatNumber(Math.floor(subtotal))}`;
    }

    function updateSubtotalForQuantityChange() {
        subtotal = 0; // Inisialisasi ulang subtotal
        const menuItems = selectedMenuItems.querySelectorAll('.menu-item');
        menuItems.forEach(item => {
            const priceElement = item.querySelector('.total-price');
            const quantityElement = item.querySelector('.quantity-input');
            const menuPrice = parseFloat(priceElement.dataset.price);
            const productQuantity = parseInt(quantityElement.value);
            subtotal += menuPrice * productQuantity;
        });
        updateSubtotal();
    }

    // Event listener untuk tombol add
    buttons.forEach(button => {
        button.addEventListener('click', (e) => {
            const buttonId = e.target.closest('button').id;
            const menuId = buttonId.split('-')[1];
            const menuCard = e.target.closest('.rounded-md');
            const menuImage = menuCard.querySelector('img').src;
            const menuName = menuCard.querySelector('.font-bold').textContent;
            const menuPriceText = menuCard.querySelector('.justify-between h1').textContent;
            const menuPrice = parseFloat(menuPriceText.replace(/[^0-9.-]+/g, "")); // Remove any non-numeric characters

            // Check if the menu item is already added
            if (selectedMenuItems.querySelector(`.menu-item[data-id="${menuId}"]`)) {
                showInfoModal('Item already added!');
                return;
            }

            const selectedMenuItemHTML = `
            <div class="flex-none py-2 menu-item" data-id="${menuId}">
            <button type="button" class="hover:rounded-lg hover:bg-red-200 h-8 delete-button" data-id="${menuId}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="md:size-7 lg:size-8">
                    <path d="M16 9V19H8V9H16ZM14.5 3H9.5L8.5 4H5V6H19V4H15.5L14.5 3ZM18 7H6V19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7Z" fill="#FF0000"/>
                </svg>
            </button>
            <div class="flex items-center gap-10 sm:gap-0 mt-6 lg:mt-0">
                <img src="${menuImage}" alt="" class="rounded-lg hidden sm:flex md:size-[100px] lg:size-32">
                <h1 class="w-[170px] text-sm font-semibold sm:w-52 sm:ml-2 md:text-base md:w-52 lg:w-full">${menuName}</h1>
                <input type="hidden" name="items[${menuId}][name]" value="${menuName}">
                <input type="hidden" name="items[${menuId}][price]" value="${menuPrice}">
                <input type="hidden" name="items[${menuId}][menu_id]" value="${menuId}">
            </div>
            <div class="flex item mt-1">
                <h1 class="text-sm text-gray-600">Note : </h1>
                <textarea name="items[${menuId}][note]" cols="13" rows="3" class="mt-1 ml-1 text-sm text-gray-600 py-0 px-1 sm:w-48 md:w-64 lg:w-72"></textarea>
            </div>
            <div class="flex items-center gap-3 sm:gap-20 md:gap-32 lg:justify-between">
                <div class="flex items-center rounded border border-gray-200 w-14 h-7 my-2 md:w-20 md:h-7 lg:w-24 lg:h-8">
                    <button type="button" class="button-minus size-7 leading-7 md:size-9 md:leading-9 lg:size-10 lg:leading-10 text-gray-600 transition hover:opacity-75">&minus;</button>
                    <input type="number" name="items[${menuId}][quantity]" class="quantity-input h-5 w-8 lg:h-7 lg:w-9 border-transparent text-center text-xs px-0 lg:text-lg [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" value="1">
                    <button type="button" class="button-plus size-7 leading-7 md:size-9 md:leading-9 lg:size-10 lg:leading-10 text-gray-600 transition hover:opacity-75">&plus;</button>
                </div>
                <h1 class="total-price font-bold text-lg lg:text-xl" data-price="${menuPrice.toFixed(0)}">Rp.<span>${formatNumber(menuPrice.toFixed(0))}</span></h1>
            </div>
        </div>
        <hr class="px-2">
    `;

            // Append the new menu item HTML to the selected menu items container
            selectedMenuItems.insertAdjacentHTML('beforeend', selectedMenuItemHTML);

            subtotal += menuPrice;
            updateSubtotal();

            // Event listeners for the quantity buttons and input
            const newMenuItem = selectedMenuItems.querySelector(`.menu-item[data-id="${menuId}"]`);
            const buttonMinus = newMenuItem.querySelector('.button-minus');
            const buttonPlus = newMenuItem.querySelector('.button-plus');
            const quantityInput = newMenuItem.querySelector('.quantity-input');
            const totalPriceElement = newMenuItem.querySelector('.total-price span');
            let productQuantity = parseInt(quantityInput.value);

            buttonMinus.addEventListener('click', () => {
                if (productQuantity > 0) {
                    productQuantity--;
                    quantityInput.value = productQuantity;
                    totalPriceElement.textContent = formatNumber(Math.floor(productQuantity * parseFloat(totalPriceElement.parentElement.dataset.price)));
                    updateSubtotalForQuantityChange();
                }
            });

            buttonPlus.addEventListener('click', () => {
                productQuantity++;
                quantityInput.value = productQuantity;
                totalPriceElement.textContent = formatNumber(Math.floor(productQuantity * parseFloat(totalPriceElement.parentElement.dataset.price)));
                updateSubtotalForQuantityChange();
            });

            quantityInput.addEventListener('input', () => {
                productQuantity = parseInt(quantityInput.value);
                totalPriceElement.textContent = formatNumber(Math.floor(productQuantity * parseFloat(totalPriceElement.parentElement.dataset.price)));
                updateSubtotalForQuantityChange();
            });

            // Add event listener to the delete button of the newly added item
            const newDeleteButton = newMenuItem.querySelector(`.delete-button[data-id="${menuId}"]`);
            newDeleteButton.addEventListener('click', (e) => {
                e.preventDefault();
                itemIdToDelete = menuId;
                showModal();
            });
        });
    });

    function removeItemAndUpdateSubtotal(menuId) {
        const itemToDelete = selectedMenuItems.querySelector(`.menu-item[data-id="${menuId}"]`);
        if (itemToDelete) {
            const priceElement = itemToDelete.querySelector('.total-price');
            const totalPrice = parseFloat(priceElement.dataset.price); // Total price for the item
            const quantityElement = itemToDelete.querySelector('.quantity-input');
            const productQuantity = parseInt(quantityElement.value); // Quantity of the item
            subtotal -= totalPrice * productQuantity; // Subtract the total price of the item from the subtotal
            itemToDelete.remove(); // Remove the item from the DOM
            updateSubtotal(); // Update the subtotal displayed on the page
        }
    }
    

    // Modal functionality
    const deleteModal = document.getElementById('deleteModal');
    const cancelButton = document.getElementById('cancelButton');
    const confirmDeleteButton = document.getElementById('confirmDeleteButton');
    const modalMessage = document.getElementById('modalMessage');
    const infoModal = document.getElementById('infoModal');
    const infoModalCloseButton = document.getElementById('infoModalCloseButton');
    const infoModalMessage = document.getElementById('infoModalMessage');

    const showModal = (message = 'Apakah Anda yakin ingin menghapus item ini?') => {
        modalMessage.textContent = message;
        deleteModal.classList.remove('opacity-0', 'pointer-events-none');
        deleteModal.classList.add('opacity-100');
    };

    const hideModal = () => {
        deleteModal.classList.add('opacity-0', 'pointer-events-none');
        deleteModal.classList.remove('opacity-100');
    };

    cancelButton.addEventListener('click', hideModal);

    confirmDeleteButton.addEventListener('click', () => {
        removeItemAndUpdateSubtotal(itemIdToDelete);
        hideModal();
    });

    const showInfoModal = (message) => {
        infoModalMessage.textContent = message;
        infoModal.classList.remove('opacity-0', 'pointer-events-none');
        infoModal.classList.add('opacity-100');
    };

    const hideInfoModal = () => {
        infoModal.classList.add('opacity-0', 'pointer-events-none');
        infoModal.classList.remove('opacity-100');
    };

    infoModalCloseButton.addEventListener('click', hideInfoModal);
});




// Mendapatkan elemen yang diperlukan


function formatNumber(number) {
    return number.toLocaleString('id-ID');
}

function parseFormattedNumber(formattedNumber) {
    return parseInt(formattedNumber.replace(/\./g, ''));
}

function appendNumber(number) {
    const display = document.getElementById('display');
    if (display.innerText === '0') {
        display.innerText = number;
    } else {
        display.innerText += number;
    }
    // Update display with formatted number
    display.innerText = formatNumber(parseFormattedNumber(display.innerText));
}

function clearDisplay() {
    document.getElementById('display').innerText = '0';
}

function confirmMoney(isInput = false) {
    let money;
    if (isInput) {
        money = parseFormattedNumber(document.getElementById('inputDisplay').value);
    } else {
        const display = document.getElementById('display').innerText;
        money = parseFormattedNumber(display);
    }

    console.log('Money:', money);
    
    const subtotalText = document.getElementById('subTotal').innerText.replace('Rp. ', '');
    const subtotal = parseFormattedNumber(subtotalText);
    
    console.log('Subtotal:', subtotal);

    if (money >= subtotal) {
        const change = money - subtotal;
        document.getElementById('money').innerText = `Rp ${formatNumber(money)}`;
        document.getElementById('change').innerText = `Rp ${formatNumber(change)}`;
        document.getElementById('moneySection').classList.add('hidden');
        document.getElementById('moneyDisplay').classList.remove('hidden');
    } else {
        alert('Jumlah uang tidak mencukupi');
    }
}

document.getElementById('confirmOrderBtn').addEventListener('click', function() {
    const selectedPaymentMethod = document.querySelector('input[name="job"]:checked').value;
    if (selectedPaymentMethod === 'Tunai') {
        document.getElementById('moneySection').classList.remove('hidden');
        document.getElementById('moneySection').scrollIntoView({ behavior: 'smooth' });
    }
});

// Disable scrolling past the confirm order button
document.addEventListener('scroll', function() {
    var confirmOrderButton = document.getElementById('confirmOrderBtn');
    var rect = confirmOrderButton.getBoundingClientRect();
    var moneySection = document.getElementById('moneySection');

    if (rect.top < window.innerHeight && moneySection.classList.contains('hidden')) {
        window.scrollTo(0, rect.top + window.scrollY - window.innerHeight + confirmOrderButton.offsetHeight);
    }
}, { passive: true });

// pop up modal metode pembayaran
document.addEventListener('DOMContentLoaded', (event) => {
const nextButton = document.getElementById('nextButton');
const radioButtons = document.querySelectorAll('input[name="job"]');
const confirmationText = document.getElementById('confirmationText');

radioButtons.forEach(radio => {
    radio.addEventListener('change', () => {
        if (document.querySelector('input[name="job"]:checked')) {
            nextButton.disabled = false;
        }
    });
});

nextButton.addEventListener('click', () => {
        const selectedPaymentMethod = document.querySelector('input[name="job"]:checked').value;
        confirmationText.textContent = `Apakah anda yakin memilih metode pembayaran ${selectedPaymentMethod}?`;
    });
});

document.getElementById('confirmOrderBtn').addEventListener('click', function() {
    const selectedPaymentMethod = document.querySelector('input[name="job"]:checked').value;
    if (selectedPaymentMethod === 'Tunai') {
        document.getElementById('moneySection').classList.remove('hidden');
        document.getElementById('moneySection').scrollIntoView({ behavior: 'smooth' });
    } else {
        document.getElementById('moneySection').classList.add('hidden');
    }

    // Update the payment method display
    document.getElementById('paymentSection').classList.remove('hidden');
    document.getElementById('paymentMethod').innerText = selectedPaymentMethod;

    // Hide btn1 and show btn2
    document.getElementById('btn1').classList.add('hidden');
    document.getElementById('btn2').classList.remove('hidden');

});







