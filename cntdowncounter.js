function countTimeLeft(targetDate) {
    const now = new Date();
    const timeLeft = targetDate - now;
  
    const seconds = Math.floor((timeLeft / 1000) % 60);
    const minutes = Math.floor((timeLeft / 1000 / 60) % 60);
    const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
  
    return {days, hours, minutes, seconds};
  }
  
  function updateCountdown() {
    const targetDate = new Date("2025-01-01T23:00:00Z");
    const timeLeft = countTimeLeft(targetDate);
    const countdownString = `${timeLeft.days} dni, ${timeLeft.hours} godzin, ${timeLeft.minutes} minut, ${timeLeft.seconds} sekund`;
  
    const countdownSpan = document.getElementById('countdown');
    countdownSpan.textContent = countdownString;
  }
  
  setInterval(updateCountdown, 1000);