<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="main w-96 p-10 rounded-md flex items-center flex-col bg-white m-auto my-5 border border-green-800">

<img style="width: 200px;" class=" ml-5 justify-center" src="images/logo.png">

    <h3 class="text-center font-bold text-lg text-green-800 pt-5">Reservation Form</h3><br>
    <form>
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
                <span class="text-gray-700">Burial Place</span>
                <input type="text" name="burial_place" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Burial Place">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Lot Type:</span>
                <input type="text" name="lot_type_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800" placeholder="Lot Type">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Area Size (Sq m):</span>
                <input type="number" id="area_size_1" name="area_size_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Amount:</span>
                <input type="number" id="amount_1" name="amount_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Down Payment:</span>
                <input type="number" id="down_payment_1" name="down_payment_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>

            <label class="block col-span-2">
                <span class="text-gray-700">Monthly Amortization Interest:</span>
                <input type="number" id="monthly_amortization_1" name="monthly_amortization_1" class="mt-1 block w-full rounded-md gap-2 p-2 mt-2 w-full text-sm border border-green-800">
            </label>

        </div>
        <div class="flex justify-center gap-10 mt-10">
            <a href="UI.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
             <a href="#" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Reserve</a>
            </div>
    </form>
</div>
</body>
</html>
