const phpScriptUrl = 'server.php'

const name = document.getElementById('name')
const birthdate = document.getElementById('birthDate')
const address = document.getElementById('address')
const phone = document.getElementById('phone')
const form = document.getElementById('form')
const button = document.getElementById('button')

let actionValue = 'add'
let oldName = 'base'

function tableBuilid(sendData) {
  fetch(phpScriptUrl, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(sendData),
  })
    .then((response) => response.json())
    .then((data) => {
      let table = document.getElementById('table2')
      if (Array.isArray(data)) {
        data.forEach((rowData) => {
          let row = table.insertRow()
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

          let buttonEdit = document.createElement('button')
          buttonEdit.innerHTML = 'Edit'
          buttonEdit.addEventListener('click', function () {
            editRecord(rowData)
          })
          buttonCell.appendChild(buttonEdit)
        })
      } else {
        let rowDelated = true
        for (var i = 0; i < table.rows.length; i++) {
          let cellContent = table.rows[i]
          cellContent.cells[0].textContent == data.name && actionValue == 'delate'
            ? (table.deleteRow(i), (rowDelated = false), console.log('cyk'), (actionValue = 'add'), form.reset())
            : null
          cellContent.cells[0].textContent == oldName ? (table.deleteRow(i), (actionValue = 'add'), form.reset()) : null
        }
        if (rowDelated) {
          let row = table.insertRow()
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
          let buttonEdit = document.createElement('button')
          buttonEdit.innerHTML = 'Edit'
          buttonEdit.addEventListener('click', function () {
            editRecord(data)
          })
          buttonCell.appendChild(buttonEdit)
          actionValue = 'add'
        } else {
          null
        }
      }
    })
    .catch((error) => {
      console.error('Fetch error:', error)
    })
}

tableBuilid()

function submitForm() {
  const dataform = {
    name: name.value,
    birthdate: birthdate.value,
    address: address.value,
    phone_number: phone.value,
    nameOld: oldName,
    action: actionValue,
  }

  tableBuilid(dataform)
  actionValue = 'add'
  button.innerHTML = 'Add'
}

function delateRow(data) {
  data.nameOld = 'brak'
  data.action = 'delate'
  actionValue = 'delate'
  tableBuilid(data)
}

function editRecord(data) {
  oldName = data.name
  actionValue = 'edit'

  button.innerHTML = 'Edit'
  name.value = data.name
  birthdate.value = data.birthdate
  address.value = data.address
  phone.value = data.phone_number
}
