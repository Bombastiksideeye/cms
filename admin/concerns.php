<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Concerns Form</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
<div id="Concerns" class="container mx-auto mt-10 bg-green-200">
  <div class="flex justify-between py-4 items-center">
    <a href="AI.php">
      <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
    </a>
    <h2 class="text-2xl font-semibold">Concerns</h2>
    <div class="mr-20">
      <i class="fa-solid fa-plus cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="document.getElementById('addModal').showModal()"></i>
    </div>
  </div>
  <div class="bg-white shadow-md rounded">
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Name</th>
          <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Email</th>
          <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Phone</th>
          <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Message</th>
          <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Date Received</th>
          <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Actions</th>
        </tr>
      </thead>
      <tbody id="concernsTableBody">
        <tr class="hover:bg-gray-100">
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
      <h2 class="text-xl font-bold mb-4">Add Concern</h2>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="name" class="block">Name</label>
          <input type="text" id="name" name="name" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="email" class="block">Email</label>
          <input type="email" id="email" name="email" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="phone" class="block">Phone</label>
          <input type="text" id="phone" name="phone" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="message" class="block">Message</label>
          <textarea id="message" name="message" class="input input-bordered border-green-800 w-full"></textarea>
        </div>
        <div>
          <label for="dateReceived" class="block">Date Received</label>
          <input type="date" id="dateReceived" name="dateReceived" class="input input-bordered border-green-800 w-full">
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

  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const phone = document.getElementById('phone').value;
  const message = document.getElementById('message').value;
  const dateReceived = document.getElementById('dateReceived').value;

  const tableBody = document.getElementById('concernsTableBody');
  const newRow = document.createElement('tr');
  newRow.classList.add('hover:bg-gray-100');

  newRow.innerHTML = `
    <td class="border-t py-2 px-4">${name}</td>
    <td class="border-t py-2 px-4">${email}</td>
    <td class="border-t py-2 px-4">${phone}</td>
    <td class="border-t py-2 px-4">${message}</td>
    <td class="border-t py-2 px-4">${dateReceived}</td>
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
  const inputs = row.querySelectorAll('input, textarea');
  inputs.forEach((input, index) => {
    row.children[index].innerText = input.value;
  });
  icon.classList.add('hidden');
}
</script>
</body>
</html>