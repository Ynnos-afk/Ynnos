// Function to show/hide payment details based on selected payment method
function togglePaymentDetails() {
    const gcashDetails = document.getElementById('gcash-details');
    const bankTransferDetails = document.getElementById('bank-transfer-details');
    const mastercardDetails = document.getElementById('mastercard-details');

    const paymentOptions = document.querySelectorAll('input[name="payment"]');

    paymentOptions.forEach(option => {
        option.addEventListener('change', () => {
            gcashDetails.style.display = ' block';
            bankTransferDetails.style.display = 'none';
            mastercardDetails.style.display = 'none';

            if (option.value === 'bank-transfer') {
                gcashDetails.style.display = 'none';
                bankTransferDetails.style.display = 'block';
            } else if (option.value === 'mastercard') {
                gcashDetails.style.display = 'none';
                mastercardDetails.style.display = 'block';
            }
        });
    });
}

// Initialize the toggle function
togglePaymentDetails();