const input = document.getElementById("input");
const list = document.getElementById("list");

document.getElementById("addBtn").onclick = () => {
  if (!input.value.trim()) return;

  const li = document.createElement("li");
  li.textContent = input.value;

  li.onclick = () => li.remove();

  list.appendChild(li);
  input.value = "";
};

document.getElementById("sortBtn").onclick = () => {
  const items = [...list.children];

  items
    .sort((a, b) => a.textContent.localeCompare(b.textContent))
    .forEach(li => list.appendChild(li));
};