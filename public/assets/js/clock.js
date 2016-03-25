function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t/1000) % 60);
  var minutes = Math.floor((t/1000/60) % 60);
  var hours = Math.floor((t/(1000*60*60)) % 24);
  var days = Math.floor(t/(1000*60*60*24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function intializeClock(id, endtime) {
  var clock = document.getElementById(id);
  clock.style.display = 'block';
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    daysSpan.innerHTML = ('0' + t.days);
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }
  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

// var deadline = new Date(Date.parse(new Date()) + 10 * 24 * 60 * 60 * 1000);
var schedule = [
  ['March 25 2016', 'April 4 2016'],
  ['April 10 2016', 'April 20 2016'],
  ['April 21 2016', 'May 1 2016']
];

for (var i = 0; i < schedule.length; i++) {
  var startDate = schedule[i][0];
  var endDate = schedule[i][1];

  var startMs = Date.parse(startDate);
  var endMs = Date.parse(endDate);
  var currentMs = Date.parse(new Date());


  if (endMs > currentMs && currentMs >= startMs) {
    intializeClock('clockdiv', endDate);
  }
}
