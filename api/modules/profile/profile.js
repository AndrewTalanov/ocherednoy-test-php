const form = document.getElementById('form')

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const data = new FormData();

  console.log(data)

  fetch(API.CHANGE_AVATAR, {
    method: 'POST'
  })
  .then(response => {
    console.log(response.text());
  });
});