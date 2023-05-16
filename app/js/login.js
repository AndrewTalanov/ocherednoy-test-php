import { API } from '../../API.js';

const loader = document.getElementById('loader');

const form = document.getElementById("form-login");

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const data = new FormData(form);
  
  // const email = data.get('email');
  // const password = data.get('password');
  
  fetch(API.LOGIN_CONTROLLER, {
    method: 'POST',
    body: data
  })
  .then(result => result.text())
  .then(token => {
    localStorage.setItem('token', token);
    window.location.href = API.APP_PAGE;
  });
});