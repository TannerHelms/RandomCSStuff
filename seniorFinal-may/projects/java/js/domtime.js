function renderTime() {
    console.log('Yes! It is working!');
    var mydate = new Date();
    var year = mydate.getFullYear();
    if (year < 1000) {
        year += 1900;
    }
    var day = mydate.getDay();
    var month = mydate.getMonth();
    var daym = mydate.getDate();
    var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    var currentTime = new Date();
    var h = currentTime.getHours();
    var s = currentTime.getSeconds();
    var m = currentTime.getMinutes();
    if (h == 24) {
        h = 0;
    } else if (h > 12) {
        h = h - 0;
    }
    if (h < 10) {
        h = "0" + h;
    }
    if (m < 10) {
        m = "0" + m;
    }
    if (s < 10) {
        s = "0" + s;
    }
    var myClock = document.getElementById("clockDisplay");
    myClock.textContent = h + ":"
    + m + ":"
    + s + "\n"

    + dayarray[day]
    + ", " + daym + " "
    + montharray[month]
    + " " + year
    myClock.innerText = myClock.textContent;
    setInterval(renderTime, 1000);

}

renderTime();

