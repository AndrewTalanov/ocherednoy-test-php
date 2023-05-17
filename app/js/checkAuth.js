import { API } from '../../API.js';
import { logout } from './logout.js';

export const checkAuth = () => {
  const token = localStorage.getItem('token');
  if (token) {

    const data = new FormData();
    data.append('token', token);

    fetch(API.CHECK_TOKEN, {
      method: 'POST',
      body: data
    })
      .then(response => {

        if (response.ok) {
          return response.text();
        } else {
          logout();
        }
      }).then(token => {
        if (token) {
          localStorage.setItem('token', token);
        }
      });
  } else {
    logout();
  }
}