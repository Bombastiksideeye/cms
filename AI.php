<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="bg-green-800 h-72 w-full absolute"></div>
  <aside class="bg-white border-0 fixed w-64 h-full">
    <div class="p-3 relative">
      <i class="fas fa-times cursor-pointer text-gray-400 absolute right-0 top-0 xl:hidden" aria-hidden="true" id="iconSidenav"></i>
      <a class="flex items-center" href="https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html" target="_blank">
        <img src="./assets/img/logo-ct-dark.png" class="h-10" alt="main_logo">
        <span class="ml-2 font-bold">Dashboard</span>
      </a>
    </div>
    <hr class="border-gray-200 mt-0">
    <div class="w-auto">
      <ul class="list-none p-0">
        <li class="my-2">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="./pages/deceased-profile.html">
            <i class="ni ni-single-02 text-yellow-500 text-sm mr-2"></i>
            <span class="ml-1">Deceased Profiles</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="./pages/user-profiles2.html">
            <i class="ni ni-circle-08 text-blue-500 text-sm mr-2"></i>
            <span class="ml-1">User Profiles</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="./pages/concerts.html">
            <i class="ni ni-headphones text-red-500 text-sm mr-2"></i>
            <span class="ml-1">Concerns</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="./pages/reservations.html">
            <i class="ni ni-calendar-grid-58 text-blue-500 text-sm mr-2"></i>
            <span class="ml-1">Reservations</span>
          </a>
        </li>
        <li class="my-2">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="./pages/payment.html">
            <i class="ni ni-credit-card text-green-500 text-sm mr-2"></i>
            <span class="ml-1">Payment</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="relative ml-64 p-6">
    <!-- Navbar -->
    <nav class="bg-white rounded-xl shadow px-6 py-3">
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
    <!-- End Navbar -->
    <div class="py-4">
      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
        <div class="bg-white rounded-xl shadow p-4">
          <h2 class="font-bold text-xl mb-2">Deceased Profiles</h2>
          <p class="text-gray-600">Explore profiles of deceased individuals.</p>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
          <h2 class="font-bold text-xl mb-2">User Profiles</h2>
          <p class="text-gray-600">View and manage user profiles.</p>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
          <h2 class="font-bold text-xl mb-2">Concerns</h2>
          <p class="text-gray-600">Handle concerns and issues.</p>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
          <h2 class="font-bold text-xl mb-2">Reservations</h2>
          <p class="text-gray-600">Manage reservations for events or services.</p>
        </div>
        <div class="bg-white rounded-xl shadow p-4">
          <h2 class="font-bold text-xl mb-2">Payment</h2>
          <p class="text-gray-600">Track and process payments.</p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
