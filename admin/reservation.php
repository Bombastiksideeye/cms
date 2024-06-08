<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reservation Records</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100">
  <div id="ReservationRecords" class="container mx-auto mt-10 bg-green-200">
    <div class="flex justify-between py-4 items-center">
      <a href="AI.php">
        <img src="../images/logo1.png" class="h-20 ml-10" alt="main_logo">
      </a>
      <h2 class="text-2xl font-semibold mx-auto">Reservation Records</h2>
    </div>
    <div class="bg-white shadow-md rounded">
      <table class="min-w-full bg-white">
        <thead>
          <tr>
            <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Username</th>
            <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Name of Deceased</th>
            <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Lot Type</th>
            <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Amount</th>
            <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Reservation Date</th>
            <th class="w-1/5 py-2 px-4 bg-gray-200 text-left">Actions</th>
          </tr>
        </thead>
        <tbody id="reservationTableBody">
          <tr class="hover:bg-gray-100">
            <?php
            include '../db.php';
            $reservations = $db->selectWithWhere('reservations');

            foreach ($reservations as $p) {
              extract($p);
              $users = $db->selectWithWhere('users', '*', 'user_id=' . $user_id)[0];
            ?>
            
              <td class="border-t py-2 px-4"><?php echo $users['username'] ?></td>
              <td class="border-t py-2 px-4"><?php echo "$first_name $middle_name $last_name" ?></td>
              <td class="border-t py-2 px-4"><?php echo $lot_type ?></td>
              <td class="border-t py-2 px-4"><?php echo $amount ?></td>
              <td class="border-t py-2 px-4"><?php echo $reservation_date ?></td>
              <td class="border-t py-2 px-4">
                <i class="fa-solid fa-xmark cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="showDeleteConfirmationModal()"></i>
                <i class="fa-solid fa-check cursor-pointer" style="color: #0f5d0e; font-size: 25px;" onclick="showConfirmReservationModal()"></i>
              </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div id="deleteConfirmationModal" class="modal">
    <div class="modal-box">
      <h2 class="text-xl font-bold mb-4">Delete Reservation</h2>
      <p>Are you sure you want to delete this reservation?</p>
      <div class="flex justify-end mt-4">
        <button onclick="deleteReservation()" class="btn btn-error mr-2">Delete</button>
        <button onclick="hideModal('deleteConfirmationModal')" class="btn btn-success">Cancel</button>
      </div>
    </div>
  </div>

  <!-- Confirm Reservation Modal -->
  <div id="confirmReservationModal" class="modal">
    <div class="modal-box">
      <h2 class="text-xl font-bold mb-4">Confirm Reservation</h2>
      <p>Are you sure you want to confirm this reservation?</p>
      <div class="flex justify-end mt-4">
        <button onclick="confirmReservation()" class="btn btn-success mr-2">Confirm</button>
        <button onclick="hideModal('confirmReservationModal')" class="btn btn-error">Cancel</button>
      </div>
    </div>
  </div>

  <script>
    // Function to show the delete confirmation modal
    function showDeleteConfirmationModal() {
      document.getElementById('deleteConfirmationModal').classList.add('show-modal');
    }

    // Function to show the confirm reservation modal
    function showConfirmReservationModal() {
      document.getElementById('confirmReservationModal').classList.add('show-modal');
    }

    // Function to hide the modal
    function hideModal(modalId) {
      document.getElementById(modalId).classList.remove('show-modal');
    }

    // Function to delete the reservation
    function deleteReservation() {
      // Add your logic to delete the reservation here
      // For example, you can send an AJAX request to the server
      // to delete the reservation and then reload the page
      console.log('Reservation deleted');
      // Close the modal
      hideModal('deleteConfirmationModal');
    }

    // Function to confirm the reservation
    function confirmReservation() {
      // Add your logic to confirm the reservation here
      // For example, you can send an AJAX request to the server
      // to confirm the reservation and then reload the page
      console.log('Reservation confirmed');
      // Close the modal
      hideModal('confirmReservationModal');
    }

    // Close modals when clicking outside of them
    window.onclick = function(event) {
      var modals = document.getElementsByClassName("modal");
      for (var i = 0; i < modals.length; i++) {
        var modal = modals[i];
        if (event.target == modal) {
          hideModal(modal.id);
        }
      }
    }
  </script>


</body>

</html>