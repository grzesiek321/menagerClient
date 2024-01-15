const phpScriptUrl = 'server.php'

function submitForm() {
  const name = document.getElementById('name')
  const birthdate = document.getElementById('birthDate')
  const address = document.getElementById('address')
  const phone = document.getElementById('phone')

  const dataform = {
    name: name.value,
    birthdate: birthdate.value,
    address: address.value,
    phone_number: phone.value,
  }

  fetch(phpScriptUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(dataform),
  })
    .then((response) => response.json())
    .then((data) => {
      let table = document.getElementById('table')

      console.log(table.rows.length)
      for (let i = 0; i <= table.rows.length; i++) {
        table.deleteRow(i)
      }

      let row = table.insertRow()

      Object.values(data).forEach((value) => {
        var cell = row.insertCell()
        cell.textContent = value
      })
    })

    .catch((error) => {
      console.error('Fetch error:', error)
    })
}

submitForm()

// fetch(phpScriptUrl, {
//   method: 'POST',
//   headers: {
//     'Content-Type': 'application/json',
//   },
//   body: JSON.stringify(),
// })
//   .then((response) => response.json())
//   .then((data) => {
//     var table = document.getElementById('table')
//     data.forEach((rowData) => {
//       var row = table.insertRow()
//       Object.values(rowData).forEach((value) => {
//         var cell = row.insertCell()
//         cell.textContent = value
//       })
//     })
//   })
//   .catch((error) => {
//     console.error('Fetch error:', error)
//   })
