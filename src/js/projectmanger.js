// JavaScript for the Notification Bell Icon Popup
// JavaScript code
document.addEventListener('DOMContentLoaded', function() {
  const notificationIcon = document.getElementById('notificationIcon');
  const popup = document.getElementById('popup');
  const closePopup = document.getElementById('closePopup');

  notificationIcon.addEventListener('click', function() {
      popup.style.display = 'block';
  });

  closePopup.addEventListener('click', function() {
      popup.style.display = 'none';
  });
});


// JavaScript for Text Uploader
let uploadedTexts = [];

function uploadText() {
    const fileInput = document.getElementById('file-input');
    const files = fileInput.files;

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();
        reader.readAsText(file);

        reader.onload = function() {
            const text = reader.result;
            uploadedTexts.push({ name: file.name, text: text });
            displayTextList();
        };
    }
}

function displayTextList() {
    const textList = document.getElementById('text-list');
    textList.innerHTML = '';

    uploadedTexts.forEach((item, index) => {
        const listItem = document.createElement('div');
        listItem.classList.add('text-item');

        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = index;
        listItem.appendChild(checkbox);

        const label = document.createElement('label');
        label.innerText = item.name;
        label.setAttribute('for', `text${index}`);
        listItem.appendChild(label);

        textList.appendChild(listItem);
    });
}

function downloadSelected() {
    const checkboxes = document.querySelectorAll('.text-item input[type="checkbox"]');
    const selectedIndexes = [];
  
    checkboxes.forEach((checkbox, index) => {
        if (checkbox.checked) {
            selectedIndexes.push(parseInt(checkbox.value));
        }
    });

    if (selectedIndexes.length === 0) {
        alert('Please select at least one text to download.');
        return;
    }

    selectedIndexes.forEach(index => {
        const textToSave = uploadedTexts[index].text;
        const blob = new Blob([textToSave], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = uploadedTexts[index].name;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    });
}

function deleteSelected() {
    const checkboxes = document.querySelectorAll('.text-item input[type="checkbox"]');
    const selectedIndexes = [];
  
    checkboxes.forEach((checkbox, index) => {
        if (checkbox.checked) {
            selectedIndexes.push(parseInt(checkbox.value));
        }
    });

    if (selectedIndexes.length === 0) {
        alert('Please select at least one text to delete.');
        return;
    }

    selectedIndexes.sort((a, b) => b - a); // Sort in descending order to avoid index shift

    selectedIndexes.forEach(index => {
        uploadedTexts.splice(index, 1);
    });

    displayTextList();
}
// End of JavaScript for Text Uploader
 
//chart
document.addEventListener('DOMContentLoaded', function() {
  const bars = document.querySelectorAll('.bar');

  bars.forEach(bar => {
      const progress = bar.getAttribute('data-progress');
      bar.style.setProperty('--progress', `${progress}%`);
  });
});

//End ofchart

//Calander
function saveText() {
    var dateInput = document.getElementById("date-input").value;
    var textInput = document.getElementById("text-input").value;
  
    // Check if both date and text are provided
    if (dateInput && textInput) {
      // Store date and text in localStorage
      localStorage.setItem(dateInput, textInput);
      alert("Text saved for " + dateInput);
    } else {
      alert("Please select a date and enter some text before saving.");
    }
  }
  

//End of calander

//Notice JS
function addNotice() {
    var noticeText = document.getElementById("new-notice").value.trim();
    if (noticeText !== "") {
      var ul = document.getElementById("notices-list");
      var li = document.createElement("li");
      li.textContent = noticeText;
      ul.appendChild(li);
      document.getElementById("new-notice").value = ""; // Clear textarea after adding notice
    } else {
      alert("Please enter a notice!");
    }
  }
  
  
//End of Notice JS