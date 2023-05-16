import { API } from '../../API.js';

const token = localStorage.getItem('token');

if (token) {
  
  const data = new FormData();
  data.append('token', token);

  fetch(API.APP_PAGE_TEST, {
    method: 'POST',
    body: data
  })
  .then(response => {

    if (response.ok) {
      console.log('ok')
      return response.text();
    } else {
      
    }
  })
  .then(response => {
    console.log(response);
  });
}

