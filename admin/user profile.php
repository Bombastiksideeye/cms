<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User Profiles</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
<div id="User Profiles" class="container mx-auto mt-10 bg-green-200">
  <div class="flex justify-between py-4 items-center">
    <a href="AI.php">
      <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
    </a>
    <h2 class="text-2xl font-semibold">User Profiles</h2>
    <div class="mr-20">
      <i class="fa-solid fa-plus cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="document.getElementById('addModal').showModal()"></i>
    </div>
  </div>
  <div class="bg-white shadow-md rounded">
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Email</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Username</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Password</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">First Name</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Middle Name</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Last Name</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Address</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Gender</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Status</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Birth Date</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Age</th>
          <th class="w-1/10 py-2 px-4 bg-gray-200 text-left">Actions</th>
        </tr>
      </thead>
      <tbody id="profileTableBody">
        <tr class="hover:bg-gray-100">
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4"></td>
          <td class="border-t py-2 px-4">
            <i class="fa-solid fa-pen-to-square cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="editRow(this)"></i>
            <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
            <i class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" onclick="confirmEdit(this)"></i>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- Add Modal -->
<dialog id="addModal" class="modal">
  <div class="modal-box w-11/12 max-w-3xl">
    <form id="addForm">
      <h2 class="text-xl font-bold mb-4">Add User Profile</h2>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="email" class="block">Email</label>
          <input type="email" id="email" name="email" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="username" class="block">Username</label>
          <input type="text" id="username" name="username" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="password" class="block">Password</label>
          <input type="password" id="password" name="password" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="firstName" class="block">First Name</label>
          <input type="text" id="firstName" name="firstName" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="middleName" class="block">Middle Name</label>
          <input type="text" id="middleName" name="middleName" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="lastName" class="block">Last Name</label>
          <input type="text" id="lastName" name="lastName" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="address" class="block">Address</label>
          <input type="text" id="address" name="address" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="gender" class="block">Gender</label>
          <select id="gender" name="gender" class="input input-bordered border-green-800 w-full">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div>
          <label for="status" class="block">Status</label>
          <input type="text" id="status" name="status" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="birthDate" class="block">Birth Date</label>
          <input type="date" id="birthDate" name="birthDate" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="age" class="block">Age</label>
          <input type="number" id="age" name="age" class="input input-bordered border-green-800 w-full">
        </div>
      </div>
      <div class="flex justify-end mt-4">
        <button type="button" class="btn btn-error mr-2" onclick="document.getElementById('addModal').close()">Cancel</button>
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </form>
  </div>
</dialog>

<script>
document.getElementById('addForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const email = document.getElementById('email').value;
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const firstName = document.getElementById('firstName').value;
  const middleName = document.getElementById('middleName').value;
  const lastName = document.getElementById('lastName').value;
  const address = document.getElementById('address').value;
  const gender = document.getElementById('gender').value;
  const status = document.getElementById('status').value;
  const birthDate = document.getElementById('birthDate').value;
  const age = document.getElementById('age').value;

  const tableBody = document.getElementById('profileTableBody');
  const newRow = document.createElement('tr');
  newRow.classList.add('hover:bg-gray-100');

  newRow.innerHTML = `
    <td class="border-t py-2 px-4">${email}</td>
    <td class="border-t py-2 px-4">${username}</td>
    <td class="border-t py-2 px-4">${password}</td>
    <td class="border-t py-2 px-4">${firstName}</td>
    <td class="border-t py-2 px-4">${middleName}</td>
    <td class="border-t py-2 px-4">${lastName}</td>
    <td class="border-t py-2 px-4">${address}</td>
    <td class="border-t py-2 px-4">${gender}</td>
    <td class="border-t py-2 px-4">${status}</td>
    <td class="border-t py-2 px-4">${birthDate}</td>
    <td class="border-t py-2 px-4">${age}</td>
    <td class="border-t py-2 px-4">
      <i class="fa-solid fa-pen-to-square cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="editRow(this)"></i>
      <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
      <i class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" onclick="confirmEdit(this)"></i>
    </td>
  `;

  tableBody.appendChild(newRow);
  document.getElementById('addModal').close();
});

function editRow(icon) {
  const row = icon.parentElement.parentElement;
  const cells = row.querySelectorAll('td');
  cells.forEach((cell, index) => {
    if (index < cells.length - 1) {
      cell.innerHTML = `<input type="text" value="${cell.innerText}" class="input input-bordered border-green-800 w-full">`;
    }
  });
  icon.nextElementSibling.nextElementSibling.classList.remove('hidden');
}

function deleteRow(icon) {
  const row = icon.parentElement.parentElement;
  icon.nextElementSibling.classList.remove('hidden');
  icon.nextElementSibling.onclick = () => {
    row.remove();
  };
}

function confirmEdit(icon) {
  const row = icon.parentElement.parentElement;
  const inputs = row.querySelectorAll('input');
  inputs.forEach((input, index) => {
    row.children[index].innerText = input.value;
  });
  icon.classList.add('hidden');
}
</script>
</body>
</html>