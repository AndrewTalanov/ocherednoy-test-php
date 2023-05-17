<script type="module">
  import { API } from './API.js'

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
        location.href = API.MAIN_PAGE
      } else {
        location.href = API.LOGIN_PAGE;
      }
    });
  } else {
    location.href = API.LOGIN_PAGE;
  }
</script>