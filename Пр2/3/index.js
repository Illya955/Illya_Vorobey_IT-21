let n = Number(prompt("Введіть число n:"));
let i = 1;
let factorial = 1;

while (i <= n) {
    factorial = factorial * i;
    i++;
}

console.log("Факторіал числа " + n + " = " + factorial);
