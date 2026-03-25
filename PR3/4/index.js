const students = {
  "Іван": { Математика: 90, Фізика: 85, Хімія: 78 },
  "Олена": { Математика: 95, Фізика: 92, Хімія: 88 },
  "Петро": { Математика: 70, Фізика: 80, Хімія: 75 }
};

const outputDiv = document.getElementById("output");

for (const student in students) {
  const grades = Object.values(students[student]);
  const avg = grades.reduce((sum, g) => sum + g, 0) / grades.length;

  const p = document.createElement("p");
  p.textContent = `Студент: ${student}, Середній бал: ${avg.toFixed(2)}`;
  outputDiv.appendChild(p);
}