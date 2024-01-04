const toggleButton = document.querySelector('#toggle-theme');


const body = document.querySelector('body');

const themePreference = localStorage.getItem('themePreference');

if (themePreference === 'dark') {
  body.classList.add('dark');
} else {

  body.classList.add('light');
}


toggleButton.addEventListener('click', function() {

  body.classList.toggle('light');
  body.classList.toggle('dark');


  if (body.classList.contains('dark')) {
    localStorage.setItem('themePreference', 'dark');
  } else {
    localStorage.setItem('themePreference', 'light');
  }
});
