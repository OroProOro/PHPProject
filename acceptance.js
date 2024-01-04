const popup = document.getElementById("popup");
const acceptButton = document.getElementById("accept");

if (sessionStorage.getItem('accepted')) {
  popup.style.display = 'none';
  document.body.style.overflow = 'auto'; 
} else {
  popup.style.display = 'flex';
  document.body.style.overflow = 'hidden'; 
}

acceptButton.addEventListener('click', function() {
  sessionStorage.setItem('accepted', true);
  popup.style.display = 'none';
  document.body.style.overflow = 'auto'; 
});

document.addEventListener('scroll', function(event) {
  if (!sessionStorage.getItem('accepted')) {
    event.preventDefault();
  }
});