async function loadUsers() {
    const list = document.getElementById("userList");
    const error = document.getElementById("error");

    try {
        const response = await fetch("https://jsonplaceholder.typicode.com/users");

        if (!response.ok) {
            throw new Error();
        }

        const users = await response.json();

        users.forEach(user => {
            const li = document.createElement("li");
            li.textContent = user.name + " — " + user.email;
            list.appendChild(li);
        });

    } catch {
        error.textContent = "Помилка завантаження";
    }
}

loadUsers();