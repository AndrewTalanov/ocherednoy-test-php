import { logout } from "../../js/logout.js";

const buttonLogout = document.getElementById('logout');

buttonLogout.addEventListener('click', ()  => {
  logout();
});