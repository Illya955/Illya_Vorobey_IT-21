const products = [
  { name: "Яблуко", category: "Фрукти" },
  { name: "Банан", category: "Фрукти" },
  { name: "Морква", category: "Овочі" },
  { name: "Картопля", category: "Овочі" },
  { name: "Молоко", category: "Напої" },
  { name: "Сік апельсиновий", category: "Напої" },
];

const groupedProducts = products.reduce((groups, product) => {
  const { category, name } = product;
  if (!groups[category]) groups[category] = [];
  groups[category].push(name);
  return groups;
}, {});

const outputDiv = document.getElementById("output");

for (const category in groupedProducts) {
  const categoryTitle = document.createElement("h3");
  categoryTitle.textContent = `Категорія: ${category}`;
  outputDiv.appendChild(categoryTitle);

  const items = document.createElement("p");
  items.textContent = `Товари: ${groupedProducts[category].join(", ")}`;
  outputDiv.appendChild(items);
}