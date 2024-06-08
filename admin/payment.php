<!DOCTYPE html>
<html lang="en" data-theme="light">
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
    <h2 class="text-2xl font-semibold mx-auto">Payment Records</h2>
  </div>
  <div class="bg-white shadow-md rounded">
    <table class="min-w-full bg-white">
      <thead>
        <tr>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Name</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Lot Type</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Amount</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Area Size (Sq m)</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Down Payment</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Monthly Amortization (0% Interest)</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Date Paid</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Status</th>
          <th class="w-1/9 py-2 px-4 bg-gray-200 text-left">Actions</th>
        </tr>
      </thead>
      <tbody id="paymentTableBody">
        <tr class="hover:bg-gray-100">
        <?php 
          include '../db.php';
          $reservations = $db->selectWithWhere('reservations');
          foreach($reservations as $p){
            extract($p);
          ?>
          <td class="border-t py-2 px-4"><?php echo "$first_name $middle_name $last_name" ?> </td>
          <td class="border-t py-2 px-4"><?php echo "$first_name $middle_name $last_name" ?></td>
          <td class="border-t py-2 px-4"><?php echo $lot_type ?></td>
          <td class="border-t py-2 px-4"><?php echo $amount ?></td>
          <td class="border-t py-2 px-4"><?php echo $reservation_date ?></td>
          <td class="border-t py-2 px-4"><?php echo $area_size ?></td>
          <td class="border-t py-2 px-4"><?php echo $down_payment ?></td>
          <td class="border-t py-2 px-4"><?php echo $monthly_amortization ?></td>
          <td class="border-t py-2 px-4"><?php echo $reservation_date ?></td>
          <td class="border-t py-2 px-4"><?php echo $lot_type ?></td>
          <td class="border-t py-2 px-4">
            <i class="fa-solid fa-trash cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="deleteRow(this)"></i>
            <i class="fa-solid fa-check cursor-pointer hidden" style="color: #0f5d0e; font-size: 25px;" onclick="confirmEdit(this)"></i>
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