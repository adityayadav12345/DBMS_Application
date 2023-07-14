const first=  document.getElementById("first-record")
const last=  document.getElementById("last-record")
const search = document.getElementById("searchdata")
const update = document.getElementById("updatedata")
const insert = document.getElementById("insertdata")
const deleted = document.getElementById("deletedata")


function viewFirstRecord() {
  fetch('view-first-record.php')
    .then(response => response.json())
    .then(data =>  {
      // Display data on the UI
      console.log(data)
      first.innerText= `First record \n ID: ${data.id}, Name: ${data.name}, Email: ${data.email} `;

    });
}

function viewLastRecord() {
  fetch('view-last-record.php')
    .then(response => response.json())
    .then(data => {
      // Display data on the UI
      console.log(data);
      last.innerText= `Last record \n ID: ${data.id}, Name: ${data.name}, Email: ${data.email} `;
    });
}

function searchRecords() {
  const searchInput = document.getElementById('searchInput').value;
  fetch(`search-records.php?search=${searchInput}`)
    .then(response => response.json())
    .then(data => {
      // Display data on the UI
      console.log(data);
      search.innerHTML = ''; // Clear previous content
      search.innerText= `Searched record\n`;
      data.forEach(record => {
        const recordElement = document.createElement('p');
        recordElement.textContent = `ID: ${record.id}, Name: ${record.name}, Email: ${record.email}`;
        search.appendChild(recordElement);
      });
    });
}

function insertRecord() {
  const nameInput = document.getElementById('nameInput').value;
  const emailInput = document.getElementById('emailInput').value;
  fetch('insert-record.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ name: nameInput, email: emailInput }),
  })
    .then(response => {response.json()})
    .then(data => {
      // Handle the response

      data.innerText
      console.log(data);

      insert.innerText= `${data.message}`;
    });
}

function updateRecord() {
  const newIdInput = document.getElementById('newIdInput').value;
  const newNameInput = document.getElementById('newNameInput').value;
  const newEmailInput = document.getElementById('newEmailInput').value;
  fetch('update-record.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ id: newIdInput, name: newNameInput, email: newEmailInput }),
  })
    .then(response => response.json())
    .then(data => {
      // Handle the response
      console.log(data);
      update.innerText= `${data.message}`;

    });
}

function deleteRecord() {
  const deleteIdInput = document.getElementById('deleteIdInput').value;
  fetch(`delete-record.php?id=${deleteIdInput}`, {
    method: 'DELETE',
  })
    .then(response => response.json())
    .then(data => {
      // Handle the response
      console.log(data);
      deleted.innerText= `${data.message}`;

    });
}


