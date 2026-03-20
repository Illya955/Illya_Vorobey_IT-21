let age = Number(prompt("Введіть свій вік:"));

if (isNaN(age) || age < 0) {
    alert("Будь ласка, введіть правильне число віку");
} else if (age < 18 && age >= 0) {
    alert("Вам заборонено вхід");
} else if (age >= 18 && age <= 65) {
    alert("Ласкаво просимо!");
} else {
    alert("Будь ласка, будьте обережні!");
}