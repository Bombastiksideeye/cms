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
        </tr>
      </thead>
      <tbody id="concernsTableBody">
        <tr></tr>
        <?php
include '../db.php'; // Include the file for your database connection

// Fetch data from the 'contactmessages' table
$contactMessages = $db->selectWithWhere('contactmessages');

foreach ($contactMessages as $message) {
    extract($message);
    ?>
    <tr class="hover:bg-gray-100">
        <td class="border-t py-2 px-4"><?php echo $name ?></td>
        <td class="border-t py-2 px-4"><?php echo $email ?></td>
        <td class="border-t py-2 px-4"><?php echo $phone ?></td>
        <td class="border-t py-2 px-4"><?php echo $message ?></td>
        <td class="border-t py-2 px-4"><?php echo $sent_date ?></td>
    </tr>
    <?php
}
?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>