let name = "Іван";
let birthYear = 2005;
let city = "Київ";

let currentYear = 2026;
let age = currentYear - birthYear;

console.log("Вік:", age);

if(age < 12) console.log("дитина");
else if(age < 18) console.log("підліток");
else if(age < 60) console.log("дорослий");
else console.log("літня людина");

let capital = "Київ";
console.log(city === capital);