const taskInput = document.getElementById("task");
const addTaskButton = document.getElementById("add");
const taskList = document.getElementById("task-list");

function addTask() {
    const taskText = taskInput.value.trim();
    if (taskText === "") return;

    const taskItem = document.createElement("li");
    taskItem.textContent = taskText;
    taskList.appendChild(taskItem);

    // Clear the input field
    taskInput.value = "";
}

addTaskButton.addEventListener("click", addTask);
