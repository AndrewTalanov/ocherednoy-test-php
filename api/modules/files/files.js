import { API } from "../../../API.js";

fetch(API.GET_ALL_FILES, {})
.then(response => response.json())
.then(response => {
  addFiles(response);
}); 

let buttonDownload = '';
let buttonDelete = '';

function addFiles(array) {
  
  let arrayHtml = '';

  const assocArray = Object.entries(array);
  
  assocArray.forEach(el => {
    const name = el[0].slice(0, el[0].indexOf("."));
    const expansion = el[0].substring(el[0].indexOf("."));
    const size = (el[1] / 1024 / 1024).toFixed(2);
    arrayHtml += `
      <tr>
        <td>${name}</td>
        <td>${expansion}</td>
        <td>${size} MB</td>
        <td>
          <button class="btn btn-primary" data-download="${name + expansion}">Скачать</button>
          <button class="btn btn-danger" data-delete="${name + expansion}">Удалить</button>
        </td>
      </tr>
    `;
  });

  document.getElementById('list-files').innerHTML = arrayHtml;

  addEvent();
}

function addEvent() {

  buttonDownload = document.querySelectorAll('button[data-download]');
  buttonDelete = document.querySelectorAll('button[data-delete]');

  buttonDownload.forEach(el => {
    el.addEventListener('click', (e) => {

      const body = {'name': e.target.getAttribute('data-download')};

      fetch(API.DOWNLOAD_FILE, {
        method: 'POST',
        body: body
      });
    });
  });

  buttonDelete.forEach(el => {
    el.addEventListener('click', (e) => {

      const body = {'name': e.target.getAttribute('data-delete')};

      fetch(API.DELETE_FILE, {
        method: 'POST',
        body: body
      })
      .then((response) => {
        response.text();
      })
      .then((response) => {
        console.log(response);
      });
    });
  });
}



