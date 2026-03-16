let i = -8;
let o = 12.6;
let p = 5;

let average = (i + o + p) / 3;
console.log("Середнє:", average);

console.log("Модуль:", Math.abs(i));
console.log("Округлення в більшу сторону:", Math.ceil(o));
console.log("Округлення в меншу сторону:", Math.floor(p));
console.log("Піднесення до степеня:", Math.pow(i, 2));

console.log("i ділиться на 5:", i % 5 === 0);
console.log("o ділиться на 7:", o % 7 === 0);
console.log("p ділиться на 5:", p % 5 === 0);

if (i + o > p && i + p > o && o + p > i) {
    console.log("Трикутник може існувати");
} else {
    console.log("Трикутник не може існувати");
}