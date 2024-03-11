function updateCountdown() {
    // set the date of the portfolio show for countdown
    const targetDate = new Date("May 3, 2024 17:00:00").getTime();

    const x = setInterval(function () {
        const now = new Date().getTime();
        const distance = targetDate - now;

        // Time calculations for days, hours, minutes, and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Changes the text based on singular or plural
        let daysText = days === 1 ? "day" : "days";
        let hoursText = hours === 1 ? "hour" : "hours";
        let minutesText = minutes === 1 ? "minute" : "minutes";
        let secondsText = seconds === 1 ? "second" : "seconds";

        // Update the text displayed on the DOM
        document.getElementById("days").innerHTML = days + " " + daysText + ",";
        document.getElementById("hours").innerHTML = hours + " " + hoursText + ",";
        document.getElementById("minutes").innerHTML = minutes + " " + minutesText + ",";
        document.getElementById("seconds").innerHTML = seconds + " " + secondsText;

        // If the countdown is finished, clear the countdown and display text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("hero-countdown").innerHTML = "The countdown is over!";
        }
    }, 1000);
}

updateCountdown();

function toggleMenu() {
    const navMenu = document.querySelector('.nav-menu');
    const menuIcon = document.querySelector('.menu-icon-img');
    const closeIcon = document.querySelector('.close-icon');

    // Toggle the nav menu
    navMenu.classList.toggle('active');

    // Check if the menu is active to toggle the icons
    if (navMenu.classList.contains('active')) {
        menuIcon.style.display = 'none';
        closeIcon.style.display = 'block';
    } else {
        menuIcon.style.display = 'block';
        closeIcon.style.display = 'none';
    }
}


