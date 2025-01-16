import './bootstrap';

document.addEventListener('DOMContentLoaded', (event) => {
    function updateCountdown() {
        const now = new Date().getTime();
        const countdownDate = new Date("Mar 14, 2025 23:59:59").getTime();
        const distance = countdownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.querySelector('.countdown-days span').textContent = days;
        document.querySelector('.countdown-hours span').textContent = hours;
        document.querySelector('.countdown-minutes span').textContent = minutes;
        document.querySelector('.countdown-seconds span').textContent = seconds;
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();
});
