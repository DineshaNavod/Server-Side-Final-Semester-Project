// Get elements
const popup = document.getElementById("notification");
const popupError = document.getElementById("notification-error");
const closeBtn = document.getElementById("closeBtn");
const closeErrorBtn = document.getElementById("closeErrorBtn");

// Timers for auto-hide
let popupTimer;
let popupErrorTimer;

// Show success notification
function showNotification() {
  // Clear previous timer if exists
  if (popupTimer) clearTimeout(popupTimer);

  popup.classList.add("show");

  // Auto-hide after 3 seconds
  popupTimer = setTimeout(() => {
    popup.classList.remove("show");
  }, 5000);
}

// Show error notification
function showErrorNotification() {
  if (popupErrorTimer) clearTimeout(popupErrorTimer);

  popupError.classList.add("show");

  // Auto-hide after 3 seconds
  popupErrorTimer = setTimeout(() => {
    popupError.classList.remove("show");
  }, 5000);
}

// Close buttons
closeBtn.addEventListener("click", () => {
  popup.classList.remove("show");
  if (popupTimer) clearTimeout(popupTimer);
});

closeErrorBtn.addEventListener("click", () => {
  popupError.classList.remove("show");
  if (popupErrorTimer) clearTimeout(popupErrorTimer);
});
