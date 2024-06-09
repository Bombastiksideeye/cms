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
  <title>Concerns Form</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
<div id="Concerns" class="container mx-auto mt-10 bg-green-200">
  <div class="flex py-4 items-center ">
    <a href="AI.php">
      <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
    </a>
    <h2 class="text-2xl font-semibold mx-auto">Concerns</h2>
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
            <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
            <i class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" onclick="confirmEdit(this)"></i>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<script>
  
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