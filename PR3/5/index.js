const names = ["Іван", "Олена", "Петро", "Марія", "Сергій"];

const nameLengths = names.reduce((obj, name) => {
  obj[name] = name.length;
  return obj;
}, {});

console.log(nameLengths);