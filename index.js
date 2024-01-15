const phpScriptUrl = 'server.php'

function tableBuilid(sendData, action) {
  fetch(phpScriptUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(sendData),
  })
    .then((response) => response.json())
    .then((data) => {
      let table = document.getElementById('table')
      if (Array.isArray(data)) {
        data.forEach((rowData) => {
          let row = table.insertRow()
          rowData.action = action
          Object.values(rowData).forEach((value) => {
            let cell = row.insertCell()
            cell.textContent = value
          })

          let buttonCell = row.insertCell()
          let buttonDel = document.createElement('button')
          buttonDel.innerHTML = 'DELATE'
          buttonDel.addEventListener('click', function () {
            delateRow(rowData)
          })
          buttonCell.appendChild(buttonDel)

          let buttonCell2 = row.insertCell()
          let buttonEdit = document.createElement('button')
          buttonEdit.innerHTML = 'Edit'
          buttonEdit.addEventListener('click', function () {
            submitForm('edit')
          })
          buttonCell2.appendChild(buttonEdit)
        })
      } else {
        let rowDelated = true
        for (var i = 0; i < table.rows.length; i++) {
          let cellContent = table.rows[i]

          cellContent.cells[0].textContent == data.name ? (table.deleteRow(i), (rowDelated = false)) : null
        }

        if (rowDelated) {
          let row = table.insertRow()

          data.action = action

          Object.values(data).forEach((value) => {
            let cell = row.insertCell()
            cell.textContent = value
          })

          let buttonCell = row.insertCell()
          let buttonDel = document.createElement('button')
          buttonDel.innerHTML = 'DELATE'
          buttonDel.addEventListener('click', function () {
            delateRow(data)
          })
          buttonCell.appendChild(buttonDel)

          let buttonCell2 = row.insertCell()
          let buttonEdit = document.createElement('button')
          buttonEdit.innerHTML = 'Edit'
          buttonEdit.addEventListener('click', function () {
            submitForm('edit')
          })
          buttonCell2.appendChild(buttonEdit)
        } else {
          null
        }
      }

      // data.forEach((rowData) => {
      //   let row = table.insertRow()
      //   rowData.action = action
      //   Object.values(rowData).forEach((value) => {
      //     let cell = row.insertCell()
      //     cell.textContent = value
      //   })

      //   let buttonCell = row.insertCell()
      //   let buttonDel = document.createElement('button')
      //   buttonDel.innerHTML = 'DELATE'
      //   buttonDel.addEventListener('click', function () {
      //     delateRow(rowData)
      //   })
      //   buttonCell.appendChild(buttonDel)

      //   let buttonCell2 = row.insertCell()
      //   let buttonEdit = document.createElement('button')
      //   buttonEdit.innerHTML = 'Edit'
      //   buttonEdit.addEventListener('click', function () {
      //     submitForm('edit')
      //   })
      //   buttonCell2.appendChild(buttonEdit)
      // })
    })
    .catch((error) => {
      console.error('Fetch error:', error)
    })
}

tableBuilid()

function submitForm(action) {
  const name = document.getElementById('name')
  const birthdate = document.getElementById('birthDate')
  const address = document.getElementById('address')
  const phone = document.getElementById('phone')

  const dataform = {
    name: name.value,
    birthdate: birthdate.value,
    address: address.value,
    phone_number: phone.value,
    action: action,
  }
  action == null ? (dataform.action = 'add') : null

  tableBuilid(dataform, 'add')
}

function delateRow(data) {
  data.action = 'delate'
  tableBuilid(data)
}

// function editRow(data){
//    const name = document.getElementById('name')
//    const birthdate = document.getElementById('birthDate')
//    const address = document.getElementById('address')
//    const phone = document.getElementById('phone')

//      const dataform = {
//        name: name.value,
//        birthdate: birthdate.value,
//        address: address.value,
//        phone_number: phone.value,
//        action: action,
//      }

// }
