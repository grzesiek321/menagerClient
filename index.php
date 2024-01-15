

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>App</title>
    <link rel="stylesheet" href="output.css" />
  </head>
  <body class="flex max-w-screen-xl">
  
    <form class=" mx-auto mt-16 bg-blue-400 p-8 rounded-md shadow-md " id="form">
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600" for="name">Name:</label>
        <input class="mt-1 p-2 w-52 border rounded-md" type="text" id="name"  >
      </div>
  
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600" for="birthDate"></label>
        <input class="mt-1 p-2 w-52 border rounded-md" type="date" id="birthDate"  >
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600" for="address">Address:</label>
        <input class="mt-1 p-2 w-52 border rounded-md" type="text" id="address"  >
      </div>
    
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600" for="phone">Phone:</label>
        <input class="mt-1 p-2 w-52 border rounded-md" type="text" id="phone"  >
      </div>
  

      <button class="bg-blue-500 text-white p-2 rounded-md" type="button" onclick="submitForm()">Dodaj</Button>
    </form>
    
    <table  class="flex items-center justify-center" id="table">
      <thead class="bg-gray-800 text-white">
        <th class=" w-44 ">NAME</th>
        <th class=" w-40 ">BIRTH DATE</th>
        <th class=" w-40 ">ADDRES</th>
        <th class=" w-28 justify-center ">PHONE</th>
        <th class=" w-28 justify-center ">ACTION</th>

      </thead>
      <tbody id="table2">
      </tbody>

    </table>
        
    <script src="index.js"></script>
  </body>
</html>

