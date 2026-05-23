const currentUserEmail = localStorage.getItem("currentUser");

if (!currentUserEmail) {
    alert("Please log in first!");
    window.location.href = "login.html";
}

function addBook(event) {
    event.preventDefault();

    const title = document.getElementById("bookTitle").value;
    const status = document.getElementById("bookStatus").value;

    if (!title) {
        alert("Please enter the book title!");
        return;
    }

    let users = JSON.parse(localStorage.getItem("users")) || [];

    let userFound = false;

    for (let i = 0; i < users.length; i++) {
        if (users[i].email === currentUserEmail) {

            if (!users[i].books) {
                users[i].books = {
                    reading: [],
                    completed: [],
                    not_started: []
                };
            }

            if (status === "reading") {
                users[i].books.reading.push(title);
            } else if (status === "completed") {
                users[i].books.completed.push(title);
            } else {
                users[i].books.not_started.push(title);
            }

            userFound = true;
            break;
        }
    }

    if (!userFound) {
        alert("User not found in local system!");
        return;
    }

    localStorage.setItem("users", JSON.stringify(users));

    alert("Book added successfully!");
    window.location.href = "dashboard.html";
}

document.getElementById("addBookForm").addEventListener("submit", addBook);