let a = 8;
let b = 3;
let c = 12;

console.log("Найбільше:", Math.max(a, b, c));
console.log("Найменше:", Math.min(a, b, c));

console.log("Хоча б одне парне:", a % 2 === 0 || b % 2 === 0 || c % 2 === 0);

console.log("Умова:", a > b && b < c);

let n = -1;
let prime = true;

if (n <= 1) {
    prime = false;
} else {
    for (let i = 2; i < n; i++) {
        if (n % i === 0) {
            prime = false;
        }
    }
}

console.log("Число просте:", prime);