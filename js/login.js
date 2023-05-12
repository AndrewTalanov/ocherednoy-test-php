import { API } from './api.js';

const loader = document.getElementById('loader');

const form = document.getElementById("form-login");

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const data = new FormData(form);

  const email = data.get('email');
  const password = data.get('password');
  
  
  fetch(API.LOGIN, {
    method: 'POST',
    body: data
  }).then(result => {
    if (result.ok) {

    }
  });
});