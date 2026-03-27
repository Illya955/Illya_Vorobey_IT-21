let time = 0;
let interval = null;

const display = document.getElementById("display");
const input = document.getElementById("seconds");

document.getElementById("start").onclick = start;
document.getElementById("pause").onclick = pause;
document.getElementById("add").onclick = () => changeTime(10);
document.getElementById("sub").onclick = () => changeTime(-10);

function update() {
  display.textContent = time;
}

function start() {
  if (interval) return;
  if (time === 0) time = parseInt(input.value) || 0;

  interval = setInterval(() => {
    if (time <= 0) {
      clearInterval(interval);
      interval = null;
      alert("Час вийшов!");
      return;
    }
    time--;
    update();
  }, 1000);
}

function pause() {
  clearInterval(interval);
  interval = null;
}

function changeTime(val) {
  time =  time + val;
  update();
}