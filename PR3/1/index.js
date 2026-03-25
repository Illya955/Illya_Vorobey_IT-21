//Масиву чисел 
let arr = [12, 5, 8, 20, 3, 15];

//Обчислення середнього арифметичного
let sum = 0;
for (let i = 0; i < arr.length; i++) {
    sum += arr[i];
}
let average = sum / arr.length;

//Мінімальне та максимальне значення
let min = arr[0];
let max = arr[0];

for (let i = 1; i < arr.length; i++) {
    if (arr[i] < min) {
        min = arr[i];
    }
    if (arr[i] > max) {
        max = arr[i];
    }
}

//Сортування масиву 
let sortedArr = [...arr].sort(function(a, b) {
    return a - b;
});

//Виведення результатів
console.log("Масив:", arr);
console.log("Середнє арифметичне:", average);
console.log("Мінімальне значення:", min);
console.log("Максимальне значення:", max);
console.log("Відсортований масив:", sortedArr);