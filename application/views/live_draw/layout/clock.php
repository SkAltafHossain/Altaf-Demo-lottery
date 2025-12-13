<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Red Digital Clock AM PM</title>

<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: transparent;
    font-family: 'Courier New', monospace;
  }

  .clock {
    color: red;
    font-size: 30px;
    letter-spacing: 4px;
    background: #000;
    padding: 15px 15px;
    border-radius: 10px;
    box-shadow: 0 0 15px red;
    text-align: center;
  }

  .ampm {
    font-size: 28px;
    margin-left: 10px;
    vertical-align: super;
  }
</style>
</head>

<body>

<div class="clock">
  <span id="time">00:00:00</span>
  <span class="ampm" id="ampm">AM</span>
</div>

<script>
  function updateClock() {
    const now = new Date();

    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let ampm = "AM";

    if (hours >= 12) {
      ampm = "PM";
    }

    hours = hours % 12;
    hours = hours ? hours : 12; // 0 becomes 12

    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    document.getElementById("time").textContent =
      `${hours}:${minutes}:${seconds}`;
    document.getElementById("ampm").textContent = ampm;
  }

  setInterval(updateClock, 1000);
  updateClock();
</script>

</body>
</html>
