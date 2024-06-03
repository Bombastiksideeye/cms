<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="mt-20">
    <div class="main w-96  p-2 flex items-center flex-col bg-white m-auto mb-5 border border-green-800 ">
      
    <img style="width: 200px;" class=" ml-5" src="images/logo.png">
        
        <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
        <input type="text" class="grow" placeholder="Username" />
      </label>

      <label class="input input-bordered flex items-center gap-2 p-2 mt-8 w-3/4 text-sm border-green-800">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
        <input type="password" class="grow" placeholder="Password" />
      </label>

      <button type="submit" class="rounded-md bg-green-800  text-white w-3/4 p-3 mt-8 mb-8 w-3/4 text-sm"><a href="AI.php">Log in</a></button>
      
      </div>
      
</body>
</html>