import { API } from '../../API.js';

const loader = document.getElementById('loader');

const form = document.getElementById("form-login");

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const data = new FormData(form);
  
  // const email = data.get('email');
  // const password = data.get('password');
  openLoader();

  fetch(API.LOGIN_CONTROLLER, {
    method: 'POST',
    body: data
  })
  .then(result => result.text())
  .then(token => {
    localStorage.setItem('token', token);
    closeLoader();
    window.location.href = API.MAIN_PAGE;
  });
});

const openLoader = () => {
  loader.classList.remove('d-none');
  loader.classList.add('d-flex');
}

const closeLoader = () => {
  loader.classList.remove('d-flex');
  loader.classList.add('d-none');
}