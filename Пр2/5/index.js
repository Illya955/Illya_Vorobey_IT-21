let secretNumber = (Math.floor(Math.random() * 100) + 1);
let userNumber;

do {
    userNumbe = Number(prompt("Ведіть число від 1 до 100:"));
    if (userNumber < secretNumber) {
        alert("Загадане число більше");
    } else if (userNumber > secretNumber) {
        alert("Загадане число менше");
    } else if (userNumber === secretNumber) {
        alert("Вітаємо! Ви вгадали число!");
    }

} while (userNumber !== secretNumber); 
