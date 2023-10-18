document.addEventListener("DOMContentLoaded", function() {
  const boutonauthentification = document.getElementById('boutonauthentification');
  const formulaireauthentification = document.getElementById('formulaireauthentification');

  boutonauthentification.addEventListener("click", function(event) {
    if (formulaireauthentification.style.display === "none" || formulaireauthentification.style.display === "") {
      formulaireauthentification.style.display = "block";
    } else {
      formulaireauthentification.style.display = "none";
    }
});
});
