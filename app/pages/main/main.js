import { logout } from "../../js/logout.js";
import { API } from "../../../API.js";
import { checkAuth } from "../../js/checkAuth.js";

const buttonLogout = document.getElementById('logout');
const wrapper = document.getElementById('content-wrapper');
const linkMain = document.getElementById('link-main');
const linkProfile = document.getElementById('link-profile');

// выход
buttonLogout.addEventListener('click', ()  => {
  logout();
});

// на главную
linkMain.addEventListener('click', () => {
  location.hash = '#main';
  // moduleRequest('main');
});

// в профиль
linkProfile.addEventListener('click', (e) => {
  location.hash = '#profile';
  // moduleRequest('profile');
});

// обработка нажатия "назад" браузера
window.addEventListener('hashchange', (e) => {
  const hash = window.location.hash.substr(1);
  moduleRequest(hash);
});

// функция переключения модулей
const moduleRequest = (hash) => {

  const path = hash.toUpperCase();

  fetch(API['MODULE_' + path], {
    method: 'POST'
  })
  .then(response => response.text())
  .then((response) => {
    checkAuth();
    wrapper.innerHTML = response;
  })
}

// ПО УМОЛЧАНИЮ
moduleRequest(window.location.hash.substr(1));