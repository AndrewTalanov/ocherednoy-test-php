import { API } from '../../API.js';

const loader = document.getElementById('loader');

const form = document.getElementById("form-register");

const MESSAGE = {
  BOX: document.querySelector(".js-warning"),
  NOT_ALL_FIELDS: '<p class="text-danger text-center"> Не все поля заполнены </p>',
  INCORRECT_PASSWORD: '<p class="text-danger text-center"> Пароли не совпадают </p>',
  INCORRECT_NAME: '<p class="text-danger text-center"> Имя не должно быть короче 4 символов </p>',
  OK: '<p class="text-success text-center"> Успешно зарегистрирован! </p>',
  INCORRECT_EMAIL: '<p class="text-danger text-center"> Пользователь с таким email уже существует</p>',
}

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const data = new FormData(form);

  const message = checkForm(data);
  
  if (message) {
    MESSAGE.BOX.innerHTML = message;
    return;
  }

  openLoader();

  try {
    fetch(API.REGISTER_CONTROLLER, {
      method: 'POST',
      body: data
    }).then(result => {

      closeLoader();

      if (result.ok) {
        MESSAGE.BOX.innerHTML = MESSAGE.OK;

        setTimeout(() => {
          window.location.href = API.LOGIN_PAGE;
        }, 1000);

      } else {
        MESSAGE.BOX.innerHTML = MESSAGE.INCORRECT_EMAIL;
      }
    });
  } catch (error) {
    console.log(error);
  }
});

const openLoader = () => {
  loader.classList.remove('d-none');
  loader.classList.add('d-flex');
}

const closeLoader = () => {
  loader.classList.remove('d-flex');
  loader.classList.add('d-none');
}

const checkForm = (data) => {

  const email = data.get('email');
  const name = data.get('name');
  const password = data.get('password');
  const passwordConfirm = data.get('password-confirm');

  if (!email || !name || !password || !passwordConfirm) {
    return MESSAGE.NOT_ALL_FIELDS;
  }

  if (password !== passwordConfirm) {
    return MESSAGE.INCORRECT_PASSWORD;
  }

  if (name.length < 4) {
    return MESSAGE.INCORRECT_NAME;
  }
};
