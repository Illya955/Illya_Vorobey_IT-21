const users = [
  { name: "Іван", age: 17 },
  { name: "Марія", age: 22 },
  { name: "Олег", age: 19 },
  { name: "Анна", age: 15 },
  { name: "Петро", age: 30 }
];

const adults = [];
const names = [];
let totalAge = 0;

users.forEach(user => {
  if (user.age > 18) {
    adults.push(user);
  }
  names.push(user.name);
  totalAge += user.age;
});

const averageAge = totalAge / users.length;

console.log("Користувачі:", users);
console.log("Повнолітні:", adults);
console.log("Імена:", names);
console.log("Середній вік:", averageAge);
let filteruser = users.filter((user) => user.age > 18)
let mapuser = users.map((user) => user.name)

console.log(filteruser)
console.log(mapuser)
