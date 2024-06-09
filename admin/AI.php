<?php include '../db.php';
session_start();
if(!isset($_SESSION['auth'])){
  header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="bg-green-800 h-72 w-full absolute"></div>
  <aside class="bg-gray-100 border-0 fixed w-64 h-full">
    <div class="p-3 relative">
      <a>
        <img src="../images/logo1.png" class="h-50" alt="main_logo">
      </a>
    </div>
    <hr class="border-gray-200 mt-0 ">
    <div class="w-auto">
      <ul class="list-none pt-10">
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Dashboard">
            <span class="ml-3">Dashboard</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Deceased Profiles">
            <span class="ml-3">Deceased Profiles</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#User Profiles">
            <i class="ni ni-circle-08 text-blue-500 text-sm mr-2"></i>
            <span class="ml-1">User Profiles</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Concerns">
            <i class="ni ni-headphones text-red-500 text-sm mr-2"></i>
            <span class="ml-1">Concerns</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Reservation Records">
            <i class="ni ni-calendar-grid-58 text-blue-500 text-sm mr-2"></i>
            <span class="ml-1">Reservations</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-200 rounded-md" href="#Payment Records">
            <i class="ni ni-credit-card text-green-500 text-sm mr-2"></i>
            <span class="ml-1">Payments</span>
          </a>
        </li>
      </ul>
    </div>
    <a href="./dfap.php" class="rounded-md bg-green-800 text-white w-40 p-3 text-sm flex justify-center items-center ml-12 mt-10">Walk-In Lot Purchase</a>

  </aside>
  <main class="relative ml-64 p-6">
    <!-- Navbar -->
    <nav id="Dashboard" class="bg-white rounded-xl shadow px-6 py-3">
      <div class="flex justify-between items-center">
        <nav>
          <ol class="flex text-sm text-gray-500">
            <li class="ml-2 text-black text-[25px] font-bold">Compassion Memorial Gardens</li>
          </ol>
        </nav>
        <div class="flex items-center space-x-4">
          <div class="relative flex items-center  border border-green-800 rounded-lg">
            <label class="input  flex items-center gap-2">
              <input type="text" class="grow" placeholder="Search" />
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
              </svg>
            </label>
          </div>
          <div class="flex items-center space-x-3">
            <button onclick="document.getElementById('logout_modal').showModal()" class="w-full pl-5 pr-5 pb-2 pt-2 bg-green-700 text-white rounded-lg hover:bg-green-800">Log out</button>
          </div>
        </div>
      </div>
    </nav>




    <div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden pt-96">
      <div class="flex items-center justify-center min-h-screen">
        <div class="main w-96 p-10 rounded-md flex items-center flex-col bg-white border border-green-800">
          <img style="width: 200px;" class="ml-5 justify-center" src="../images/logo.png">
          <h3 class="text-center font-bold text-lg text-green-800 pt-5">Purchase Form</h3>
          <form class="mt-5">
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
              <a href="AI.php" class="rounded-md bg-green-800 text-white  p-3 text-sm flex justify-center items-center">Cancel</a>
              <a href="AI.php" id="pay-now-button" class="rounded-md bg-green-800 text-white  p-3 text-sm flex justify-center items-center">Confirm Purchase</a>
            </div>
          </form>
        </div>
      </div>
    </div>




    <script>
      // Get the modal and buttons
      const modal = document.getElementById('modal');
      const openModalBtn = document.getElementById('open-modal');
      const closeModalBtn = document.getElementById('close-modal');

      // Function to open the modal
      function openModal() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }

      // Function to close the modal
      function closeModal() {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
      }

      // Event listener for opening the modal
      openModalBtn.addEventListener('click', openModal);

      // Event listener for closing the modal
      closeModalBtn.addEventListener('click', closeModal);

      // Close the modal if clicked outside of it
      modal.addEventListener('click', function(event) {
        if (event.target === modal) {
          closeModal();
        }
      });

      // Prevent the modal from closing if the form is clicked
      document.querySelector('.main').addEventListener('click', function(event) {
        event.stopPropagation();
      });
    </script>

    <dialog id="logout_modal" class="modal">
      <div class="modal-box w-11/12 max-w-sm bg-green-400 relative">
        <form method="dialog">
          <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="flex flex-col items-center p-6 bg-white m-auto my-5 border border-green-800 rounded-lg">
          <h2 class="text-xl font-bold mb-4">Log out of your account</h2>
          <div class="flex gap-4 mt-4">
            <a href="AI.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Cancel</a>
            <a href="../logout.php" class="rounded-md bg-green-800 text-white w-24 p-3 text-sm flex justify-center items-center">Log out</a>
          </div>
        </div>
      </div>
    </dialog>

    <style>
      .modal-box {
        animation: fadeIn 0.3s ease-out;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>


      <?php
      $Deceased = $db->countRows('reservations');
      $User = $db->countRows('users');
      $Concerns = $db->countRows('contactmessages');
       ?>
    <!-- End Navbar -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 pt-5">
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-user-slash text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Deceased?></div>
        <h2 class="font-bold text-xl mb-2">Deceased Profiles</h2>
        <p class="text-gray-400">Explore profiles of deceased individuals.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-users text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $User?></div>
        <h2 class="font-bold text-xl mb-2">User Profiles</h2>
        <p class="text-gray-400">View and manage user profiles.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-exclamation-circle text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Concerns?></div>
        <h2 class="font-bold text-xl mb-2">Concerns</h2>
        <p class="text-gray-400">Handle concerns and issues.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-calendar-alt text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Deceased?></div>
        <h2 class="font-bold text-xl mb-2">Reservations</h2>
        <p class="text-gray-400">Manage reservations for events or services.</p>
      </div>
      <div class="bg-white text-black rounded-xl shadow p-4 text-center transform hover:scale-105 transition-transform hover:bg-gray-100">
        <i class="fas fa-dollar-sign text-3xl mb-2"></i>
        <div class="text-3xl font-bold text-blue-500"><?php echo $Deceased?></div>
        <h2 class="font-bold text-xl mb-2">Payments</h2>
        <p class="text-gray-400">Track and process payments.</p>
      </div>
    </div>

    <div id="Deceased Profiles" class="container mx-auto mt-10">
      <div class="flex justify-between mb-4 items-center">
        <h2 class="text-2xl font-semibold">Deceased Profiles</h2>
        <div class="flex space-x-5 items-center">
          <a href="deceased_profile.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>

      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">LAST NAME</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">FIRST NAME</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">MIDDLE NAME</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">DATE OF BIRTH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">DATE OF DEATH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">PLACE OF BIRTH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">PLACE OF DEATH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">CAUSE OF DEATH</th>
              <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">BURIAL DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $u = $db->selectWithWhere("reservations")[0];
            $profile = $db->selectWithWhere("users")[0];
            
            $reservations = $db->selectWithWhere("reservations")[0];
            ?>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $u['last_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['first_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['middle_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['birth_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['death_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['birth_place']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['death_place']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['cause_of_death']?></td>
              <td class="border-t py-2 px-4"><?php echo $u['burial_date']?></td>
            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


    <div id="User Profiles" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">User Profiles</h2>
        <div class="flex space-x-5 items-center">
          <a href="user_profile.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Username</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Password</th>
              <th class="py-2 px-4 bg-gray-200 text-left">First Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Middle Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Last Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Address</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Gender</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Status</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Birth Date</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Age</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $profile['email']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['username']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['password']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['first_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['middle_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['last_name']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['address']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['gender']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['status']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['birth_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $profile['age']?></td>
            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>

    <div id="Concerns" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Concerns</h2>
        <div class="flex space-x-5 items-center">
          <a href="concerns.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Email</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Phone</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Message</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Date Received</th>
            </tr>
          </thead>
          <tbody>
           
            <?php
            if(!empty($db->selectWithWhere("contactmessages")[0])){
            $concern = $db->selectWithWhere("contactmessages")[0];
            ?>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $concern['name'] ? : ''?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['email'] ? : ''?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['phone'] ? : '' ?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['message'] ? : '' ?></td>
              <td class="border-t py-2 px-4"><?php echo $concern['sent_date'] ? : '' ?></td>
            </tr>
            <?php } ?>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


    <div id="Reservation Records" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Reservation Records</h2>
        <div class="flex space-x-5 items-center">
          <a href="reservation.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Username</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Lot Type</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Amount</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $profile['username']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['first_name'] . " " . $reservations['middle_name'] . " " . $reservations['last_name'] ?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['lot_type']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['amount']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['reservation_date']?></td>

            </tr>
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


    <div id="Payment Records" class="container mx-auto mt-10">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-semibold">Payment Records</h2>
        <div class="flex space-x-5 items-center">
          <a href="payment.php" class="bg-green-800 text-white py-2 px-4 rounded">SEE ALL</a>
        </div>
      </div>
      <div class="bg-white shadow-md rounded">
        <table class="min-w-full bg-white">
          <thead>
            <tr>
              <th class="py-2 px-4 bg-gray-200 text-left">Name</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Lot Type</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Amount</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Area Size (Sq m)</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Down Payment</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Monthly Amortization (0% Interest)</th>
              <th class="py-2 px-4 bg-gray-200 text-left">Date Paid</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-100">
              <td class="border-t py-2 px-4"><?php echo $reservations['first_name'] . " " . $reservations['middle_name'] . " " . $reservations['last_name'] ?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['first_name'] . " " . $reservations['middle_name'] . " " . $reservations['last_name'] ?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['lot_type']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['amount']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['reservation_date']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['area_size']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['down_payment']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['monthly_amortization']?></td>
              <td class="border-t py-2 px-4"><?php echo $reservations['reservation_date']?></td>
             
            <!-- More rows as needed -->
          </tbody>
        </table>
      </div>
    </div>


  </main>
</body>

</html>