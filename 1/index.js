let a = 10;
let b = 3.5;
let c = "Hello";
let d = true;

console.log(typeof a);
console.log(typeof b);
console.log(typeof c);
console.log(typeof d);

a = "25";
b = 7;
c = false;
d = 1;

console.log(typeof a);
console.log(typeof b);
console.log(typeof c);
console.log(typeof d);

console.log(10 + "5");
console.log(Number("123"));
console.log(Number(true));
console.log(Number(false));

let obj = {
  name: "Illya",
  age: 17,
  mark: 4.5,
  student: true
};

console.log(JSON.stringify(obj));