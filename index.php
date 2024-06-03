<!-- form.html -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/ecd5e25db3.js" crossorigin="anonymous"></script>

    <style>
        .modal-box::-webkit-scrollbar {
            display: none; 
        }
        .modal-box {
            -ms-overflow-style: none; 
            scrollbar-width: none; 
        }
    </style>

</head>
<body class=" bg-green-200">
<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">Compassion Memorial Gardens</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal pr-20 space-x-10 text-lg">
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#pricelist">Pricelist</a></li>
            <li><a href="#question">FAQ</a></li>
        </ul>
    </div>
</div>

  


<div class="bg-gray-100 flex items-center justify-center h-screen mt-20">
    <div class="relative">
    <img src="images/pic1.jpg" alt="Picture" class="w-full h-auto filter brightness-[.3]">
    <h1 class="absolute inset-0 flex items-center justify-left text-5xl font-bold text-center ml-20 mb-60 text-white">Your Reservation,<br> Our Priority</h1>

<!-- You can open the modal using ID.showModal() method -->
<button onclick="document.getElementById('register_modal').showModal()" style="margin-left: 190px;" class="btn wave-effect mt-100 absolute inset-0   w-40 h-15 m-auto bg-green-700 text-white rounded-2xl hover:bg-green-800">Reserve Now</button>

        <dialog id="register_modal" class="modal">
            <div class="modal-box w-11/12 max-w-xl bg-green-400">
                <div class="main w-96 p-6 flex items-center flex-col bg-white m-auto my-5 border border-green-800 rounded-lg">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>

                    <img style="width: 200px;" class=" ml-5" src="images/logo.png">
                    <h2 class="text-xl font-bold mb-4">REGISTER NOW</h2>
                    <h4 class="text-sm text-gray-700 mb-4">Welcome to Compassion Memorial Gardens!</h4>

                    <form action="users.php" method="POST" class="w-full">
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="email" name="email" class="grow" placeholder="Email Address" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="username" class="grow" placeholder="Username" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="password" name="password" class="grow" placeholder="Password" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="password" name="confirm_password" class="grow" placeholder="Confirm Password" required />
                    </label>
                    <p class="text-md font-semibold mt-4 text-green-800">PERSONAL INFORMATION:</p>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="firstname" class="grow" placeholder="First Name" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="middlename" class="grow" placeholder="Middle Name" />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="lastname" class="grow" placeholder="Last Name" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="text" name="address" class="grow" placeholder="Address" required />
                    </label>
                    <div class="w-full mt-2">
                        <label for="gender" class="block text-sm mb-2">Gender:</label>
                        <select id="gender" name="gender" class="dropdown w-full rounded-md border border-green-800 p-2 text-sm" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="w-full mt-2">
                        <label for="status" class="block text-sm mb-2">Status:</label>
                        <select id="status" name="status" class="dropdown w-full rounded-md border border-green-800 p-2 text-sm" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widowed">Widowed</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="date" name="birthdate" class="grow" placeholder="Birthdate" required />
                    </label>
                    <label class="input input-bordered flex items-center gap-2 p-2 mt-2 w-full text-sm border-green-800">
                        <input type="number" id="age" name="age" class="grow" placeholder="Age"/>
                    </label>
                    <button type="submit" class="rounded-md bg-green-800 text-white w-full p-3 mt-6 mb-4 text-sm">Create Account</button>
                     </form>

                    

                    <p class="text-sm text-center">Already have an account? <a onclick="document.getElementById('login_modal').showModal()" class="text-green-900 font-semibold cursor-pointer">Log in</a></p>
                </div>
            </div>
        </dialog>

       

        <dialog id="login_modal" class="modal">
            <div class="modal-box w-11/12 max-w-xl bg-green-400 relative">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <form class="mt-10">
                    <div class="main w-96 p-2 flex items-center flex-col bg-white m-auto mb-5 border border-green-800">
                        <img style="width: 200px;" class="ml-5" src="images/logo.png">
                        <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                            </svg>
                            <input type="text" class="grow" placeholder="Username" />
                        </label>
                        <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                            </svg>
                            <input type="password" class="grow" placeholder="Password" />
                        </label>
                        <button type="submit" class="rounded-md bg-green-800 text-white w-3/4 p-3 mt-8 mb-8 text-sm"><a href="UI.php">Log in</a></button>
                    </div>
      </form>
            </div>
        </dialog>
    </div>
</div>

<style>
    @keyframes wave {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.7; }
    }
    .wave-effect {
        animation: wave 1.5s infinite;
    }
</style>





<div id="contact" class=" flex items-center justify-center h-screen w-1/2 m-auto pt-20">
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 h-97">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.12723617833!2d123.79807487449418!3d8.487007697238479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32551fd8667c806f%3A0x3c755bfaf75e0fd0!2sCompassion%20memorial%20gardens!5e0!3m2!1sen!2sph!4v1717043175379!5m2!1sen!2sph" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-full md:w-1/2 p-6">
                <h2 class="text-2xl font-bold mb-4 text-center">Contact Us</h2>
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Name">
                <input type="text" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Email">
                <input type="number" class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Enter Your Phone">
                <textarea class="w-full p-3 mb-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-800" placeholder="Message"></textarea>
                <button class="w-full p-3 bg-green-700 text-white rounded-lg hover:bg-green-800">Send</button>
            </div>
        </div>
    </div>
                </div>




                <div id="pricelist" class="max-w-6xl mx-auto mt-10 pb-40">
    <h2 class="text-2xl font-bold text-center mb-5 text-green-800">PRICELIST</h2>
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden ">
        <thead class="bg-green-700 text-white ">
            <tr>
                <th class="py-3 px-4" rowspan="2">Types of Lots</th>
                <th class="py-3 px-4" rowspan="2">Lot Area Size (Sq m)</th>
                <th class="py-3 px-4" rowspan="2">Space May Inter as many as:</th>
                <th class="py-3 px-4" rowspan="2">Price</th>
                <th class="py-3 px-4" rowspan="2">Down Payment</th>
                <th class="py-3 px-4" colspan="5">Monthly Amortization 0% Interest</th>
            </tr>
            <tr class="bg-green-600 text-white">
                <th class="py-2 px-4">3 months</th>
                <th class="py-2 px-4">6 months</th>
                <th class="py-2 px-4">12 months</th>
                <th class="py-2 px-4">18 months</th>
                <th class="py-2 px-4">24 months</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <tr>
                <td class="border px-4 py-2">Socialized (Low Cost)</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2">1 fresh body</td>
                <td class="border px-4 py-2">P18,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P4,333.33</td>
                <td class="border px-4 py-2">P2,166.66</td>
                <td class="border px-4 py-2">P1,083.33</td>
                <td class="border px-4 py-2"></td>
                <td class="border px-4 py-2"></td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Socialized</td>
                <td class="border px-4 py-2">2.44</td>
                <td class="border px-4 py-2">1 fresh body with free tombstone</td>
                <td class="border px-4 py-2">P29,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P8,000.00</td>
                <td class="border px-4 py-2">P4,000.00</td>
                <td class="border px-4 py-2">P2,000.00</td>
                <td class="border px-4 py-2">P1,333.33</td>
                <td class="border px-4 py-2">P1,000.00</td>
            </tr>
            <tr>
                <td class="border px-4 py-2"rowspan="2">Lawn Lot</td>
                <td class="border px-4 py-2">2.44</td>
                <td class="border px-4 py-2">1 fresh body & 2 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P39,000.00</td>
                <td class="border px-4 py-2">P5,000.00</td>
                <td class="border px-4 py-2">P11,333.33</td>
                <td class="border px-4 py-2">P5,666.66</td>
                <td class="border px-4 py-2">P2,833.33</td>
                <td class="border px-4 py-2">P1,888.88</td>
                <td class="border px-4 py-2">P1,416.66</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Upgraded</td>
                <td class="border px-4 py-2">2 fresh body & 2 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P57,000.00</td>
                <td class="border px-4 py-2">P5,000</td>
                <td class="border px-4 py-2">P17,333</td>
                <td class="border px-4 py-2">P8,666.66</td>
                <td class="border px-4 py-2">P4,333</td>
                <td class="border px-4 py-2">P2,889</td>
                <td class="border px-4 py-2">P2,167</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">4-Lot Garden</td>
                <td class="border px-4 py-2">9.76</td>
                <td class="border px-4 py-2">7 fresh body & 8 set of bones with free tombstone</td>
                <td class="border px-4 py-2">P185,000.00</td>
                <td class="border px-4 py-2">P20,000.00</td>
                <td class="border px-4 py-2">P55,000.00</td>
                <td class="border px-4 py-2">P27,500.00</td>
                <td class="border px-4 py-2">P13,750.00</td>
                <td class="border px-4 py-2">P9,166.00</td>
                <td class="border px-4 py-2">P6,875.00</td>
                
            </tr>
            <tr>
                <td class="text-center" colspan="10"><b>Internment Fee:</b> P 20,000.00, it includes the lower device, chairs, vault, tent, sound system, carpet, and others.</td>
            </tr>
        </tbody>
    </table>
</div>



                <div id="question" class="max-w-5xl mx-auto pt-40">
  <div  class="collapse-container pb-40">

  <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md  ">
      <input type="radio" name="my-accordion-3" id="accordion-1" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-1" class="cursor-pointer block p-4">How do I create an account?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To create an account, go to the 'Reserve Now' button and fill in the required information such as your username, email, and contact details. Once submitted, then your ready to go.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-1" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-1" class="cursor-pointer block p-4">What is Compassion Memorial Gardens?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>Compassion Memorial Gardens is a serene and beautifully landscaped cemetery dedicated to providing a peaceful final resting place for loved ones. It offers a variety of burial plots, memorial services, and support for grieving families.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-2" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-2" class="cursor-pointer block p-4">What services are offered at Compassion Memorial Gardens?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>We offer a range of services including traditional burials, cremation options, memorial services, and perpetual care for the maintenance of the grounds. We also provide support services for families, including grief counseling and event planning.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-3" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-3" class="cursor-pointer block p-4">How can I make a reservation for a plot at Compassion Memorial Gardens?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>To make a reservation, please click the 'Reserve Now' button  after logging in to your account. You can select a plot and provide the necessary details. Our team will contact you with confirmation and further instructions.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-4" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-4" class="cursor-pointer block p-4">Where is Compassion Memorial Gardens located?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>Compassion Memorial Gardens is conveniently located in a tranquil setting just outside the city. Our address is Lower Lancangan, Oroquieta City, Philippines, and we are easily accessible by car and public transportation.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-5" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-5" class="cursor-pointer block p-4">Can I visit Compassion Memorial Gardens to see the grounds?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>Yes, you are welcome to visit Compassion Memorial Gardens. We are open to visitors during our regular hours. Please contact us to schedule a guided tour, where you can see the beautiful landscape and learn more about our services.</p>
      </div>
    </div>

    <div class="collapse collapse-plus bg-base-200 my-2 rounded-lg shadow-md">
      <input type="radio" name="my-accordion-3" id="accordion-6" /> 
      <div class="collapse-title text-xl font-medium">
        <label for="accordion-6" class="cursor-pointer block p-4">How do I get in touch with Compassion Memorial Gardens for more information?</label>
      </div>
      <div class="collapse-content p-4"> 
        <p>You can contact us via phone at 09176594245, facebook at <a class="text-green-800" target="blank" href="https://www.facebook.com/profile.php?id=100057269898716">Compassion Memorial Gardens - Oroquieta City</a>, or through the contact form on our website. Our friendly staff are available to answer any questions and provide additional information.</p>
      </div>
    </div>

  </div>
</div>

<script>
  document.querySelectorAll('input[name="my-accordion-3"]').forEach((radio) => {
    radio.addEventListener('click', function() {
      if (this.dataset.toggled === "true") {
        this.checked = false;
        this.dataset.toggled = "false";
      } else {
        document.querySelectorAll('input[name="my-accordion-3"]').forEach((otherRadio) => {
          otherRadio.dataset.toggled = "false";
        });
        this.dataset.toggled = "true";
      }
    });
  });
</script>


    


    
<footer class="bg-green-700 text-white py-6 mt-10">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                <a href="https://www.facebook.com/p/Compassion-Memorial-Gardens-Oroquieta-City-100057269898716/" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fab fa-facebook-f" style="color: #000000;"></i><br><br>
                    <span>Compassion Memorial Gardens - Oroquieta City</span>
                </a>
                <a href="https://www.instagram.com/explore/locations/786115044832299/compassion-memorial-gardens---oroquieta-city/" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                <i class="fa-brands fa-square-instagram" style="color: #000000;"></i><br><br>
                    <span>Compassion Memorial Gardens - Oroquieta City</span>
                </a>
                <a href="tel:+11234567890" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fas fa-phone" style="color: #000000;"></i><br><br>
                    <span>Contact Number: 0905 131 3005</span>
                </a>
                <a href="https://mail.google.com/mail/u/0/#search/compassionmemorial%40gmail.com?compose=new" target="_blank" class="hover:text-gray-300 flex items-center space-x-2">
                    <i class="fas fa-envelope" style="color: #000000;"></i><br><br>
                    <span>Email: compassionmemorial@gmail.com</span>
                </a>
            </div>
        </div>
    </footer>






</body>
</html>