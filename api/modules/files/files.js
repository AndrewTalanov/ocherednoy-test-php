import { API } from "../../../API.js";

fetch(API.GET_ALL_FILES, {})
  .then(response => response.json())
  .then(response => {
    addFiles(response);
  }); 

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
          <a href="#" class="btn btn-primary">Скачать</a>
          <a href="#" class="btn btn-danger">Удалить</a>
        </td>
      </tr>
    `;
  });
  console.log(assocArray)

  document.getElementById('list-files').innerHTML = arrayHtml;
}