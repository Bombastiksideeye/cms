<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">

<div id="Deceased Profiles" class="container mx-auto mt-10 bg-green-200">
  <div class="flex justify-between py-4 items-center">
  <a href="AI.php">
        <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
      </a>
    <h2 class="text-2xl font-semibold">Deceased Profiles</h2>
    <div class="mr-20">
      <i class="fa-solid fa-plus cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="document.getElementById('addModal').showModal()"></i>
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
          <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">BURIAL PLACE</th>
          <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">ACTIONS</th>
        </tr>
      </thead>
      <tbody id="profileTableBody">
        <tr class="hover:bg-gray-100">
          <?php include '../database.php';
          $db = new DatabaseConnection();
          $users = $db->view("reservations");
          foreach($users as $u){        
          ?>
          <td class="border-t py-2 px-4"><?php echo $u['last_name']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['first_name']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['middle_name']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['birth_date']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['death_date']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['birth_place']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['death_place']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['cause_of_death']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['burial_date']?></td>
          <td class="border-t py-2 px-4"><?php echo $u['burial_place']?></td>
          <td class="border-t py-2 px-4">
            <i class="fa-solid fa-pen-to-square cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="editRow(this)"></i>
            <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
            <i class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" onclick="confirmEdit(this)"></i>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Add Modal -->
<dialog id="addModal" class="modal">
  <div class="modal-box w-11/12 max-w-3xl">
    <form id="addForm" action="insert.php" method="POST">
      <h2 class="text-xl font-bold mb-4">Add Deceased Profile</h2>
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="lastName" class="block">Last Name</label>
          <input type="text" id="lastName" name="lastName" class="input input-bordered border-green-800 w-full">
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
          <label for="dob" class="block">Date of Birth</label>
          <input type="date" id="dob" name="dob" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="dod" class="block">Date of Death</label>
          <input type="date" id="dod" name="dod" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="pob" class="block">Place of Birth</label>
          <input type="text" id="pob" name="pob" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="pod" class="block">Place of Death</label>
          <input type="text" id="pod" name="pod" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="cod" class="block">Cause of Death</label>
          <input type="text" id="cod" name="cod" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="burialDate" class="block">Burial Date</label>
          <input type="date" id="burialDate" name="burialDate" class="input input-bordered border-green-800 w-full">
        </div>
        <div>
          <label for="burialPlace" class="block">Burial Place</label>
          <input type="text" id="burialPlace" name="burialPlace" class="input input-bordered border-green-800 w-full">
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



