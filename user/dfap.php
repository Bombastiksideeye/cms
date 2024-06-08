<?php
session_start();
if(!isset($_SESSION['logged'])){
header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>

</head>
<body>
    
<div class="main w-96 p-10 rounded-md flex items-center flex-col bg-white m-auto my-5 border border-green-800">

<img style="width: 200px;" class=" ml-5 justify-center" src="../images/logo.png">

    <h3 class="text-center font-bold text-lg text-green-800 pt-5">Reservation Form</h3><br>
    <form action="insert.php" method="POST">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <label class="block">
                <span class="text-gray-700">Last Name</span>
                <input type="text" name="lastname" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Last Name">
            </label>
            <label class="block">
                <span class="text-gray-700">First Name</span>
                <input type="text" name="firstname" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="First Name">
            </label>
            <label class="block">
                <span class="text-gray-700">Middle Name</span>
                <input type="text" name="middlename" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Middle Name">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Date of Birth</span>
                <input type="date" name="birthdate" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Date of Death</span>
                <input type="date" name="deathdate" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Place of Birth</span>
                <input type="text" name="birthplace" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Place of Birth">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Place of Death</span>
                <input type="text" name="deathplace" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Place of Death">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Cause of Death</span>
                <input type="text" name="cause_of_death" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Cause of Death">
            </label>
            <label class="block col-span-2">
                <span class="text-gray-700">Burial Date</span>
                <input type="date" name="burial_date" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Lot Type:</span>
                <input type="text" name="lot_type_1" value="<?php echo $_GET['lot_type'] ?>" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" >
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Area Size (Sq m):</span>
                <input type="text" id="area_size_1" value="<?php echo $_GET['lot_area'] ?>" name="area_size_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800  ">
            </label>
       

            <label class="block col-span-2">
                <span class="text-gray-700">Amount:</span>
                <input type="text" id="amount_1" name="amount_1" value="<?php echo $_GET['amount'] ?>" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" >
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Down Payment:</span>
                <input type="text" id="down_payment_1" value="<?php echo $_GET['down'] ?>" name="down_payment_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Monthly Amortization 0% Interest:</span>
            <select id="monthly_amortization_1" name="monthly_amortization_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
               <?php 
               $id  = $_GET['id'];
               if($id === '1'){
                echo '<option value="P4,333.33 (3 months)">P4,333.33 (3 months)</option>';
                echo '<option value="P2,166.66 (6 months)">P2,166.66 (6 months)</option>';
                echo '<option value="P1,083.33 (12 months)">P1,083.33 (12 months)</option>';
               }
               else if($id === '2'){
                echo '<option value="P8,000.00 (3 months)">P8,000.00 (3 months)</option>';
                echo '<option value="P4,000.00 (6 months)">P4,000.00 (6 months)</option>';
                echo '<option value="P2,000.00 (12 months)">P2,000.00 (12 months)</option>';
                echo '<option value="P1,333.33 (18 months)">P1,333.33 (18 months)</option>';
                echo '<option value="P1,000.00 (24 months)">P1,000.00 (24 months)</option>';
               }
               else if($id === '3'){
                echo '<option value="P5,666.66 (3 months)">P5,666.66 (3 months)</option>';
                echo '<option value="P2,833.33 (6 months)">P2,833.33 (6 months)</option>';
                echo '<option value="P1,888.88 (12 months)">P1,888.88 (12 months)</option>';
                echo '<option value="P1,416.66 (18 months)">P1,416.66 (18 months)</option>';
                echo '<option value="P1,000.00 (24 months)">P1,000.00 (24 months)</option>';


               }
               else if($id === '4'){
                echo '<option value="P17,333 (3 months)">P17,333 (3 months)</option>';
                echo '<option value="P8,666.66 (6 months)">P8,666.66 (6 months)</option>';
                echo '<option value="P4,333 (12 months)">P4,333 (12 months)</option>';
                echo '<option value="P2,889 (18 months)">P2,889 (18 months)</option>';
                echo '<option value="P2,167 (24 months)">P2,167 (24 months)</option>';


               }
               else if($id === '5'){
                echo '<option value="P55,000.00 (3 months)">P55,000.00 (3 months)</option>';
                echo '<option value="P27,500.00 (6 months)">P27,500.00 (6 months)</option>';
                echo '<option value="P13,750.00 (12 months)">P13,750.00 (12 months)</option>';
                echo '<option value="P13,750.00 (18 months)">P13,750.00 (18 months)</option>';
                echo '<option value="P6,875.00 (24 months)">P6,875.00 (24 months)</option>';


               }


               
               ?>
                
            </select>
               
        </div>
        <div class="flex justify-center gap-10 mt-10">
            <a href="./" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
            <button type="submit" id="pay-now-button" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Pay now</button>
            </div>
   
</div>




<div id="payment-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-6 text-center">Reservation Payment</h2>
            <div id="payment-form" class="space-y-4">
                <div class="form-row">
                    <label for="card-element" class="block text-sm font-medium text-gray-700 mb-2">Credit or debit card</label>
                    <div id="card-element" class="p-3 border border-gray-300 rounded-md"></div>
                    <div id="card-errors" role="alert" class="text-red-500 mt-2 text-sm"></div>
                </div>
                <button id="submit-button" class="w-full bg-green-800 text-white p-3 rounded-md hover:bg-green-700">Pay</button>
            </div>
        </div>
    </div>
    </form>
    <script>
        // Stripe configuration
        var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
        var elements = stripe.elements();

        var style = {
            base: {
                color: '#32325d',
                fontFamily: 'Arial, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        var card = elements.create('card', { style: style });
        card.mount('#card-element');

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            console.log('Token ID:', token.id);
            alert('Payment successful! Token: ' + token.id);
            window.location.href = './';
        }

        // Modal handling
        var payNowButton = document.getElementById('pay-now-button');
        var paymentModal = document.getElementById('payment-modal');

        payNowButton.addEventListener('click', function(event) {
            event.preventDefault();
            paymentModal.classList.remove('hidden');
        });

        // Close modal on clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target == paymentModal) {
                paymentModal.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
