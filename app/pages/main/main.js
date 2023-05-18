import { logout } from "../../js/logout.js";
import { API } from "../../../API.js";
import { checkAuth } from "../../js/checkAuth.js";

const buttonLogout = document.getElementById('logout');
const wrapper = document.getElementById('content-wrapper');
const linkMain = document.getElementById('link-main');
const linkProfile = document.getElementById('link-profile');

// выход
buttonLogout.addEventListener('click', () => {
  logout();
});

// на главную
linkMain.addEventListener('click', () => {
  location.hash = '#main';
});

// в профиль
linkProfile.addEventListener('click', (e) => {
  location.hash = '#profile';
});

// обработка изменения хэша браузера
let oldHash;
window.addEventListener('hashchange', (e) => {
  const hash = window.location.hash.substr(1);
  moduleRequest(hash);
});

const addLinks = (hash) => {
  const url = 'http://super-ultra-service/api/modules/';

  const linkElement = document.createElement('link');
  linkElement.rel = 'stylesheet';
  linkElement.id = `css-${hash}`;
  linkElement.href = `${url}${hash}/${hash}.css`;
  document.head.appendChild(linkElement);

  const scriptElement = document.createElement('script');
  scriptElement.type = 'module';
  scriptElement.id = `js-${hash}`;
  scriptElement.src = `${url}${hash}/${hash}.js`;
  document.body.appendChild(scriptElement);
}

const removeLinks = (hash) => {
  
  if (oldHash && oldHash != hash) {
    const linkElement = document.getElementById(`css-${oldHash}`);
    const scriptElement = document.getElementById(`js-${oldHash}`);

    if (linkElement) {
      document.getElementById(`css-${oldHash}`).remove();
    }
    if (scriptElement) {
      document.getElementById(`js-${oldHash}`).remove();
    }
  }

  oldHash = hash;
}
// функция переключения модулей
const moduleRequest = (hash) => {

  const path = hash.toUpperCase();

  fetch(API['MODULE_' + path], {
    method: 'POST'
  })
    .then(response => response.text())
    .then(response => {

      checkAuth();

      wrapper.innerHTML = response;
    })
    .then(() => {
      addLinks(hash);
    })
    .then(() => {
      removeLinks(hash);
    });
}

// ПО УМОЛЧАНИЮ
moduleRequest(window.location.hash.substr(1));

