function countTimePassed(pastDate) {
    const currentTime = new Date();
    const timePassed = currentTime - pastDate;

    const seconds = Math.floor((timePassed / 1000) % 60);
    const minutes = Math.floor((timePassed / 1000 / 60) % 60);
    const hours = Math.floor((timePassed / (1000 * 60 * 60)) % 24);
    const days = Math.floor(timePassed / (1000 * 60 * 60 * 24));

    return {days, hours, minutes, seconds};
  }
  
  function updateTimePassed() {
    const pastDate = new Date("January 01, 2024 23:00:00");
    const timePassed = countTimePassed(pastDate);
    const timePassedString = `${timePassed.days} dni,  ${timePassed.hours} godzin,  ${timePassed.minutes} minut,  ${timePassed.seconds} sekund `;
  
    const timePassedSpan = document.getElementById('time-passed');
    timePassedSpan.textContent = timePassedString;
  }
  
  setInterval(updateTimePassed, 1000);