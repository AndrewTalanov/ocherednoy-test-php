import { API } from "../../../API.js";

const form = document.getElementById('form')

form.addEventListener('submit', (e) => {
  
  e.preventDefault();

  const data = new FormData(form);

  fetch(API.CHANGE_AVATAR, {
    method: 'POST',
    body: data
  })
  .then(response => response.text)
  .then(() => {
    fetch(API.CHANGE_AVATAR, {
      method: 'POST',
    })
    .then(() => window.location.reload());
  });
});