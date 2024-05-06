function calculateTotal() {
    const amountPaid = parseFloat(document.getElementById("amount").value);
    let totalAmount = amountPaid;

    const checkboxes = document.querySelectorAll(".project-checkbox");
    checkboxes.forEach((checkbox) => {
        if (checkbox.checked) {
            const projectAmount = parseFloat(checkbox.value);
            totalAmount += projectAmount;
            document.getElementById(`total-${checkbox.id}`).textContent = `Total ${checkbox.id}: $${projectAmount.toFixed(2)}`;
        } else {
            document.getElementById(`total-${checkbox.id}`).textContent = "";
        }
    });

    document.getElementById("total-amount").textContent = `Total Amount: $${totalAmount.toFixed(2)}`;
}

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
