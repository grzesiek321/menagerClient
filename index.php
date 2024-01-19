
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
      <form id="form">
        <div >
          <label  for="name">Name:</label>
          <input  type="text" id="name"  >
        </div>
    
        <div class="mb-4">
          <label  for="birthDate"></label>
          <input  type="date" id="birthDate"  >
        </div>

        <div class="mb-4">
          <label  for="address">Address:</label>
          <input  type="text" id="address"  >
        </div>
      
        <div class="mb-4">
          <label  for="phone">Phone:</label>
          <input  type="text" id="phone"  >
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

