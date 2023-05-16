import { API } from "../../API.js";

export function logout() {
  localStorage.setItem('token', '');
  window.location.href = API.LOGIN_PAGE;
}