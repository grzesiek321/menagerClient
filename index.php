
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>App</title>
    <link href="style.css" rel="stylesheet">
</head>
<body >
    


    <div class="kontener">
      <form class="max-w-md mx-auto mt-8 bg-blue- p-8 rounded-md shadow-md" id="form">
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

        <input  type="text" id="value1"  >
        <input  type="text" id="value2"  >
    

        <button id="button" type="button" onclick="submitForm()">Add</Button>
      </form>
      <div class=" tabelConteiner ">
        <table   id="table">
          <thead class="bg-gray-800 text-white">
            <th class="w-1/5 p-2 ">NAME</th>
            <th class="w-1/5 p-2">BIRTH DATE</th>
            <th class="w-1/5 p-2">ADDRESS</th>
            <th class="w-1/5 p-2">PHONE</th>
            <th class="w-1/5 p-2">ACTION</th>
          </thead>
          <tbody class="text-center  " id="table2">  
          </tbody>
        </table>
      </div>
    </div>
   
    
    <script src="index.js"></script>`
</body>
</html>

