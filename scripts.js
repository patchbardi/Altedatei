
function loadTodos(){
    fetch('http://172.19.112.235/todo.php')  
    .then(response => response.json())
    .then(todos => {
        const todoList = 
        document.getElementById('todoList');
        todoList.innerHTML = '';
        todos.forEach(todo =>{
             const li = document.createElement('li');
             li.textContent = todo;
             todoList.appendChild(li);
        });
    });
}
window.onload = (event) => {
loadTodos();

document.getElementById('todoForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const todoInput = document.getElementById('todoInput').value;
    fetch('http://172.19.112.235/php/todo/todo.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ todo: todoInput }),
    })
    .then(response => response.json())
    .then((data) => {
        console.log(data);
        loadTodos();
        document.getElementById('todoInput').value = '';
    });
});
}
