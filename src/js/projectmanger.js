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


