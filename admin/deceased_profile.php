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

<body class="bg-gray-100">

<div id="Deceased Profiles" class="container mx-auto mt-10 bg-green-200">
  <div class="flex justify-between py-4 items-center">
  <a href="AI.php">
        <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
      </a>
    <h2 class="text-2xl font-semibold mx-auto">Deceased Profiles</h2>
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
          <th class="w-1/12 py-2 px-4 bg-gray-200 text-left">ACTIONS</th>
        </tr>
      </thead>
      <tbody id="profileTableBody">
        <tr class="hover:bg-gray-100">
          <?php 

          $users = $db->selectWithWhere("reservations");
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
          <td class="border-t py-2 px-4">
            <i class="fa-solid fa-pen-to-square cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="editRow(this)"></i>
            <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
            <a class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" id="confirm" value="<?php echo $u['user_id'] ?>"onclick="confirmEdit(this)" href="delete.php?id= <?php echo $u['user_id']?>&burial_date=<?php echo $u['burial_date']?>  "></a>

          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>



<script>
  let editID = document.getElementById('confirm').value;
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

function confirmEdit(icon , editID) {
  const row = icon.parentElement.parentElement;
  const inputs = row.querySelectorAll('input, textarea');
  inputs.forEach((input, index) => {
    row.children[index].innerText = input.value;
    window.location.href = "delete.php?id="+ editID ;
  });
  icon.classList.add('hidden');

}
</script>

</body>
</html>



