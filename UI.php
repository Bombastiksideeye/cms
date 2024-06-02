



<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>

    <style>
        .modal-box::-webkit-scrollbar {
            display: none; 
        }
        .modal-box {
            -ms-overflow-style: none; 
            scrollbar-width: none; 
        }
    </style>

</head>
<body class=" bg-green-200">
<div class=" navbar bg-base-100 fixed z-50">
 


    <!-- Navbar Start -->
    <div class="navbar-start p-4 bg-white text-black">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a onclick="showModal('deceased-profile-modal')">Deceased Profile</a></li>
                <li><a onclick="showModal('payment-history-modal')">Payment History</a></li>
                <li><a onclick="showModal('my-account-modal')">My Account</a></li>
            </ul>
        </div>
    </div>



     <!-- Deceased Profile Modal -->
     <div id="deceased-profile-modal" class="modal">
        <div class="modal-box max-w-3xl bg-green-100">
            <h3 class="font-bold text-lg text-green-800">Deceased Profile</h3>
      
        <table class="table w-full mt-4">
    <thead>
        <tr>
            <th>Deceased Profile</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Last Name</td>
            <td>[Last Name]</td>
        </tr>
        <tr>
            <td>First Name</td>
            <td>[First Name]</td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td>[Middle Name]</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>[Date of Birth]</td>
        </tr>
        <tr>
            <td>Date of Death</td>
            <td>[Date of Death]</td>
        </tr>
        <tr>
            <td>Place of Birth</td>
            <td>[Place of Birth]</td>
        </tr>
        <tr>
            <td>Place of Death</td>
            <td>[Place of Death]</td>
        </tr>
        <tr>
            <td>Cause of Death</td>
            <td>[Cause of Death]</td>
        </tr>
        <tr>
            <td>Burial Date</td>
            <td>[Burial Date]</td>
        </tr>
        <tr>
            <td>Burial Place</td>
            <td>[Burial Place]</td>
        </tr>
    </tbody>
</table>
     
<div class="modal-action">
                    <button type="button" class="btn" onclick="closeModal('deceased-profile-modal')">Close</button>
                </div>
    </div>
</div>



    

    

   <!-- Payment History Modal -->
<div id="payment-history-modal" class="modal">
    <div class="modal-box max-w-3xl bg-green-100">
        <h3 class="font-bold text-lg text-green-800">Payment History</h3>
        <table class="table w-full mt-4">
            <thead>
                <tr>
                    <th>Lot Type</th>
                    <th>Area Size (Sq m)</th>
                    <th>Amount</th>
                    <th>Down Payment</th>
                    <th>Monthly Amortization (0% Interest)</th>
                    <th>Date Paid</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Type of Lot 1</td>
                    <td>[Area Size 1]</td>
                    <td>[Amount 1]</td>
                    <td>[Down Payment 1]</td>
                    <td>[Monthly Amortization 1]</td>
                    <td>[Date 1]</td>
                </tr>
                <tr>
                    <td>Type of Lot 2</td>
                    <td>[Area Size 2]</td>
                    <td>[Amount 2]</td>
                    <td>[Down Payment 2]</td>
                    <td>[Monthly Amortization 2]</td>
                    <td>[Date 2]</td>
                </tr>
                <tr>
                    <td>Type of Lot 3</td>
                    <td>[Area Size 3]</td>
                    <td>[Amount 3]</td>
                    <td>[Down Payment 3]</td>
                    <td>[Monthly Amortization 3]</td>
                    <td>[Date 3]</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
<div class="modal-action">
            <button type="button" class="btn" onclick="closeModal('payment-history-modal')">Close</button>
        </div>
    </div>
</div>

    <!-- My Account Modal -->
    <div id="my-account-modal" class="modal">
        <div class="modal-box w-11/12 max-w-xl bg-green-100">
            <div class="main w-96 p-6 flex items-center flex-col bg-white m-auto my-5 border border-green-800 rounded-lg">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" onclick="closeModal('my-account-modal')">✕</button>
                <h2 class="text-2xl font-bold mb-4 text-green-800">My Account</h2>
                <form action="#" method="post" class="w-full">
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="email" name="email" class="grow" placeholder="Email Address" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="username" class="grow" placeholder="Username" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="password" name="password" class="grow" placeholder="Password" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="password" name="confirm_password" class="grow" placeholder="Confirm Password" required />
                    </label>
                    <p class="text-md font-semibold mt-4 text-green-800">PERSONAL INFORMATION:</p>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="firstname" class="grow" placeholder="First Name" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="middlename" class="grow" placeholder="Middle Name" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="lastname" class="grow" placeholder="Last Name" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="address" class="grow" placeholder="Address" required />
                    </label>
                    <div class="w-full mt-2">
                        <label for="gender" class="block text-sm mb-2">Gender:</label>
                        <select id="gender" name="gender" class="dropdown w-full rounded-md border border-green-800 p-2 text-sm" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="w-full mt-2">
                        <label for="status" class="block text-sm mb-2">Status:</label>
                        <select id="status" name="status" class="dropdown w-full rounded-md border border-green-800 p-2 text-sm" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="date" name="birthdate" class="grow" placeholder="Birthdate" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="number" id="age" name="age" class="grow" placeholder="Age"/>
                    </label>
                    <button type="submit" class="rounded-md bg-green-800 text-white w-full p-3 mt-6 mb-4 text-sm">Update Account</button>
                </form>
            </div>
        </div>
    </div>

    <script>
 function updateDisplay(input) {
            const fieldName = input.name;
            const displayField = document.getElementById('display-' + fieldName);
            if (displayField) {
                displayField.textContent = input.value;
            }
        }

        function showModal(modalId) {
            document.getElementById(modalId).classList.add('modal-open');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('modal-open');
        }
    </script>



  <div class="navbar-center">
    
    <a class=" text-green-900 text-[30px] font-semibold font-serif">Compassion Memorial Gardens</a>
  </div>
  <div class="navbar-end mr-5 ">
 
    
<div class="dropdown dropdown-end">
    <button onclick="document.getElementById('logout_modal').showModal()" class="w-full pl-5 pr-5 pb-2 pt-2 bg-green-700 text-white rounded-lg hover:bg-green-800">Log out</button>
</div>

<dialog id="logout_modal" class="modal">
    <div class="modal-box w-11/12 max-w-sm bg-green-400 relative">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="flex flex-col items-center p-6 bg-white m-auto my-5 border border-green-800 rounded-lg">
            <h2 class="text-xl font-bold mb-4">Log out of your account</h2>
            <div class="flex gap-4 mt-4">
            <a href="UI.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
             <a href="index.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Log out</a>
            </div>
        </div>
    </div>
</dialog>

<style>
    .modal-box {
        animation: fadeIn 0.3s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>


  </div>
</div>



<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="relative">
        <img src="images/pic1.jpg" alt="Picture" class="w-full h-auto">
        <h1 class="absolute inset-0 flex items-center justify-center text-5xl font-bold text-center text-green-600">Your Reservation, Our Priority</h1>

        <!-- You can open the modal using ID.showModal() method -->
        <button onclick="document.getElementById('register_modal').showModal()" class="btn wave-effect mb-60 absolute inset-0 flex items-center justify-center w-60 h-20 m-auto bg-green-700 text-white rounded-lg hover:bg-green-800">Reserve Now</button>

        <dialog id="register_modal" class="modal">
            <div class="modal-box w-11/12 max-w-6xl bg-green-400">
                <h1 class="text-gray-800 text-center font-bold text-[30px]">AVAILABLE NOW!</h1>
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>

                <div class="overflow-x-auto no-scrollbar">
                    <div class="flex items-center space-x-4 p-10 w-max">
                        <a href="dfap.php">
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="images/p2.jpg" alt="Socialized Low Cost" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Socialized <br>(Low Cost)</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): no size</span><br><br>
                                        <span class="text-gray-700">1 fresh body</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱18,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>

                        <a href="dfap.php">
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="images/p3.jpg" alt="Socialized" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Socialized</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): 2.44</span><br><br>
                                        <span class="text-gray-700">1 fresh body with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱29,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>

                        <a href="dfap.php">
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="images/p1.jpg" alt="Lawn Lot" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Lawn Lot</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): 2.44</span><br><br>
                                        <span class="text-gray-700">1 fresh body & 2 set of bones with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱39,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>

                        <a href="dfap.php">
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="images/p1.jpg" alt="Upgraded" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">Lawn Lot</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700"> Upgraded</span><br><br>
                                        <span class="text-gray-700">2 fresh body & 2 set of bones with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱57,000.00</span>
                                    </p>
                                </div>
                            </button>
                        </a>

                        <a href="dfap.php">
                            <button class="container bg-white p-6 rounded-lg shadow-lg w-64">
                                <div class="item">
                                    <img src="images/p1.jpg" alt="4-Lot Garden" class="w-full h-auto mb-4">
                                    <h3 class="text-xl font-bold text-green-700">
                                        <span class="text-gray-800">4-Lot Garden</span>
                                    </h3>
                                </div>
                                <div class="item mb-4">
                                    <p class="text-gray-600">
                                    <span class="text-gray-700">Lot Area Size (Sq m): 9.76</span><br><br>
                                    <span class="text-gray-700">7 fresh body & 8 set of bones with free tombstone</span>
                                    </p>
                                </div>
                                <div class="item">
                                    <p class="text-lg font-semibold text-gray-900">
                                        <span class="text-green-600">₱185,000.00</span>
                                    </p>
                                </div>
                               
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </dialog>
    </div>
</div>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>



<style>
    @keyframes wave {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.7; }
    }
    .wave-effect {
        animation: wave 1.5s infinite;
    }
</style>





<div class=" flex items-center justify-center h-screen w-1/2 m-auto pt-20">
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 h-97">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.12723617833!2d123.79807487449418!3d8.487007697238479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32551fd8667c806f%3A0x3c755bfaf75e0fd0!2sCompassion%20memorial%20gardens!5e0!3m2!1sen!2sph!4v1717043175379!5m2!1sen!2sph" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-full md:w-1/2 p-6">
                <h2 class="text-2xl font-bold mb-4 text-center">Contact Us</h2>
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Name">
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Email">
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Phone">
                <textarea class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Message"></textarea>
                <button class="w-full p-3 bg-green-700 text-white rounded-lg hover:bg-green-800">Send</button>
            </div>
        </div>
    </div>
                </div>





                <div class="max-w-6xl mx-auto mt-10 pb-40">
    <h2 class="text-2xl font-bold text-center mb-5 text-green-800">PRICELIST</h2>
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden ">
        <thead class="bg-green-700 text-white ">
            <tr>
                <th class="py-3 px-4" rowspan="2">Types of Lots</th>
                <th class="py-3 px-4" rowspan="2">Lot Area Size (Sq m)</th>
                <th class="py-3 px-4" rowspan="2">Space May Inter as many as:</th>
                <th class="py-3 px-4" rowspan="2">Price</th>
                <th class="py-3 px-4" rowspan="2">Down Payment</th>
                <th class="py-3 px-4" colspan="5">Monthly Amortization 0% Interest</th>
            </tr>
            <tr class="bg-green-600 text-white">
                <th class="py-2 px-4">3 months</th>
                <th class="py-2 px-4">6 months</th>
                <th class="py-2 px-4">12 months</th>
                <th class="py-2 px-4">18 months</th>
                <th class="py-2 px-4">24 months</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <tr>
                <td class="border px-4 py-2">Socialized (Low Cost)</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2">1 fresh body</td>
                <td class="border px-4 py-2">P18,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P4,333.33</td>
                <td class="border px-4 py-2">P2,166.66</td>
                <td class="border px-4 py-2">P1,083.33</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2"></td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Socialized</td>
                <td class="border px-4 py-2">2.44</td>
                <td class="border px-4 py-2">1 fresh body with free tombstone</td>
                <td class="border px-4 py-2">P29,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P8,000.00</td>
                <td class="border px-4 py-2">P4,000.00</td>
                <td class="border px-4 py-2">P2,000.00</td>
                <td class="border px-4 py-2">P1,333.33</td>
                <td class="border px-4 py-2">P1,000.00</td>
            </tr>
            <tr>
                <td class="border px-4 py-2"rowspan="2">Lawn Lot</td>
                <td class="border px-4 py-2">2.44</td>
                <td class="border px-4 py-2">1 fresh body & 2 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P39,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P11,333.33</td>
                <td class="border px-4 py-2">P5,666.66</td>
                <td class="border px-4 py-2">P2,833.33</td>
                <td class="border px-4 py-2">P1,888.88</td>
                <td class="border px-4 py-2">P1,416.66</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Upgraded</td>
                <td class="border px-4 py-2">2 fresh body & 2 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P57,000.00</td>
                <td class="border px-4 py-2">P5,000</td>
                <td class="border px-4 py-2">P17,333</td>
                <td class="border px-4 py-2">P8,666.66</td>
                <td class="border px-4 py-2">P4,333</td>
                <td class="border px-4 py-2">P2,889</td>
                <td class="border px-4 py-2">P2,167</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">4-Lot Garden</td>
                <td class="border px-4 py-2">9.76</td>
                <td class="border px-4 py-2">7 fresh body & 8 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P185,000.00</td>
                <td class="border px-4 py-2">P20,000.00</td>
                <td class="border px-4 py-2">P55,000.00</td>
                <td class="border px-4 py-2">P27,500.00</td>
                <td class="border px-4 py-2">P13,750.00</td>
                <td class="border px-4 py-2">P9,166.00</td>
                <td class="border px-4 py-2">P6,875.00</td>
                
            </tr>
            <tr>
                <td class="text-center" colspan="10"><b>Internment Fee:</b> P 20,000.00, it includes the lower device, chairs, vault, tent, sound system, carpet, and others.</td>
            </tr>
        </tbody>
    </table>
</div>



         

<div class="max-w-5xl mx-auto ">
  <div class="collapse-container  pb-40">

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-2" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-2" class="cursor-pointer block p-4">How can I view the cemetery map?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>After logging in, you can view the cemetery map by navigating to the 'View Map' section. This map provides a detailed layout of the cemetery, including plots and key landmarks.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-3" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-3" class="cursor-pointer block p-4">How do I make a reservation for a plot?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To make a reservation, log in to your account and go to the 'Reservation' section. Select the desired plot and fill in the necessary details. After submitting, you will receive a confirmation and payment details.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-4" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-4" class="cursor-pointer block p-4">How can I update my profile information?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To update your profile information, log in to your account and navigate to the 'My Account' section. Here, you can update your personal details, contact information, and change your password.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-5" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-5" class="cursor-pointer block p-4">How do I view the profile of a deceased person?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To view the profile of a deceased person, go to the 'Deceased Profile' section and enter the name or plot number. This will provide you with the relevant details and history of the individual.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-6" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-6" class="cursor-pointer block p-4">How can I check my payment history?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To check your payment history, log in and navigate to the 'Payments History' section. This will display a detailed list of all your transactions, including dates and amounts.</p>
      </div>
    </div>

 

</div>
</div>
<script>
  document.querySelectorAll('input[name="my-accordion-3"]').forEach((radio) => {
    radio.addEventListener('click', function() {
      if (this.dataset.toggled === "true") {
        this.checked = false;
        this.dataset.toggled = "false";
      } else {
        document.querySelectorAll('input[name="my-accordion-3"]').forEach((otherRadio) => {
          otherRadio.dataset.toggled = "false";
        });
        this.dataset.toggled = "true";
      }
    });
  });
</script>





<footer class="bg-green-700 text-white py-6 mt-10">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                <a href="https://www.facebook.com/p/Compassion-Memorial-Gardens-Oroquieta-City-100057269898716/" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fab fa-facebook-f" style="color: #000000; font-size: 24px;"></i>
                    <span>Compassion Memorial Gardens - Oroquieta City</span>
                </a>
                <a href="https://www.instagram.com/explore/locations/786115044832299/compassion-memorial-gardens---oroquieta-city/" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                <i class="fa-brands fa-square-instagram" style="color: #000000;"></i>
                    <span>Compassion Memorial Gardens - Oroquieta City</span>
                </a>
                <a href="tel:+11234567890" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fas fa-phone" style="color: #000000;"></i>
                    <span>Contact Number: 0905 131 3005</span>
                </a>
                <a href="https://mail.google.com/mail/u/0/#search/compassionmemorial%40gmail.com?compose=new" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fas fa-envelope" style="color: #000000;"></i>
                    <span>Email: compassionmemorial@gmail.com</span>
                </a>
            </div>
        </div>
    </footer>








</body>
</html>