<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Payment Records</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
<div id="Payment Records" class="container mx-auto mt-10 bg-green-200">
  <div class="flex justify-between py-4 items-center">
    <a href="AI.php">
      <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
    </a>
    <h2 class="text-2xl font-semibold">Payment Records</h2>
    <div class="mr-20">
      <i class="fa-solid fa-plus cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="document.getElementById('addModal').showModal()"></i>
    </div>
  </div>
  <div class="bg-white shadow-md rounded">
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Username</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Lot Type</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Amount</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Area Size (Sq m)</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Down Payment</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Monthly Amortization (0% Interest)</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Date Paid</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Actions</th>
        </tr>
      </thead>
      <tbody id="paymentTableBody">
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
      <h2 class="text-xl font-bold mb-4">Add Payment Record</h2>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="username" class="block">Username</label>
          <input type="text" id="username" name="username" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="nameOfDeceased" class="block">Name of Deceased</label>
          <input type="text" id="nameOfDeceased" name="nameOfDeceased" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="lotType" class="block">Lot Type</label>
          <input type="text" id="lotType" name="lotType" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="amount" class="block">Amount</label>
          <input type="text" id="amount" name="amount" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="reservationDate" class="block">Reservation Date</label>
          <input type="date" id="reservationDate" name="reservationDate" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="areaSize" class="block">Area Size (Sq m)</label>
          <input type="text" id="areaSize" name="areaSize" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="downPayment" class="block">Down Payment</label>
          <input type="text" id="downPayment" name="downPayment" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="monthlyAmortization" class="block">Monthly Amortization (0% Interest)</label>
          <input type="text" id="monthlyAmortization" name="monthly Amortization" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="datePaid" class="block">Date Paid</label>
          <input type="date" id="datePaid" name="datePaid" class="input input-bordered border-green-800 w-full">
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

  const username = document.getElementById('username').value;
  const nameOfDeceased = document.getElementById('nameOfDeceased').value;
  const lotType = document.getElementById('lotType').value;
  const amount = document.getElementById('amount').value;
  const reservationDate = document.getElementById('reservationDate').value;
  const areaSize = document.getElementById('areaSize').value;
  const downPayment = document.getElementById('downPayment').value;
  const monthlyAmortization = document.getElementById('monthlyAmortization').value;
  const datePaid = document.getElementById('datePaid').value;

  const tableBody = document.getElementById('paymentTableBody');
  const newRow = document.createElement('tr');
  newRow.classList.add('hover:bg-gray-100');

  newRow.innerHTML = `
    <td class="border-t py-2 px-4">${username}</td>
    <td class="border-t py-2 px-4">${nameOfDeceased}</td>
    <td class="border-t py-2 px-4">${lotType}</td>
    <td class="border-t py-2 px-4">${amount}</td>
    <td class="border-t py-2 px-4">${reservationDate}</td>
    <td class="border-t py-2 px-4">${areaSize}</td>
    <td class="border-t py-2 px-4">${downPayment}</td>
    <td class="border-t py-2 px-4">${monthlyAmortization}</td>
    <td class="border-t py-2 px-4">${datePaid}</td>
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