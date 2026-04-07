const themeSelect = document.getElementById('theme');
const bgColor = document.getElementById('bgColor');
const textColor = document.getElementById('textColor');
const saveBtn = document.getElementById('save');

function applyTheme(theme, colors = {}) {
  document.body.className = theme;

  if (theme === 'custom') {
    document.body.style.setProperty('--bg', colors.bg);
    document.body.style.setProperty('--text', colors.text);
  }
}

function saveTheme() {
  const theme = themeSelect.value;

  if (theme === 'custom') {
    const colors = {
      bg: bgColor.value,
      text: textColor.value
    };

    if (!colors.bg || !colors.text) {
      alert('Select colors');
      return;
    }

    localStorage.setItem('theme', JSON.stringify({
      theme,
      colors
    }));

    applyTheme(theme, colors);

  } else {
    localStorage.setItem('theme', JSON.stringify({ theme }));
    applyTheme(theme);
  }
}

function loadTheme() {
  const data = JSON.parse(localStorage.getItem('theme'));

  if (!data) return;

  themeSelect.value = data.theme;
  applyTheme(data.theme, data.colors);
}

document.addEventListener('DOMContentLoaded', loadTheme);
saveBtn.addEventListener('click', saveTheme);