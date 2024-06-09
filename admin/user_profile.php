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
    <h2 class="text-2xl font-semibold mx-auto">User Profiles</h2>
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
      <?php 

          $profile = $db->selectWithWhere('users');
          foreach($profile as $p){
            extract($p);
          ?>
        <tr class="hover:bg-gray-100">
          
          <td class="border-t py-2 px-4"><?php echo $email ?></td>
          <td class="border-t py-2 px-4"><?php echo $username ?></td>
          <td class="border-t py-2 px-4"><?php echo $password ?></td>
          <td class="border-t py-2 px-4"><?php echo $first_name ?></td>
          <td class="border-t py-2 px-4"><?php echo $middle_name ?></td>
          <td class="border-t py-2 px-4"><?php echo $last_name ?></td>
          <td class="border-t py-2 px-4"><?php echo $address ?></td>
          <td class="border-t py-2 px-4"><?php echo $gender ?></td>
          <td class="border-t py-2 px-4"><?php echo $status ?></td>
          <td class="border-t py-2 px-4"><?php echo $birth_date ?></td>
          <td class="border-t py-2 px-4"><?php echo $age ?></td>
          <td class="border-t py-2 px-4">
            <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
            <a class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" onclick="confirmEdit(this)" href="delete.php?id=<?php echo $user_id .'&' . 'username='. 
            $username ?>"></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<script>




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