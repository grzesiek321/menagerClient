
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
          <thead >
            <th >NAME</th>
            <th >BIRTH DATE</th>
            <th >ADDRESS</th>
            <th >PHONE</th>
            <th >ACTION</th>
          </thead>
          <tbody class="text-center  " id="table2">  
          </tbody>
        </table>
      </div>
    </div>
   
    
    <script src="index.js"></script>`
</body>
</html>

