document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("dataForm");
  const responseDiv = document.getElementById("response");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "submit.php", true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        responseDiv.innerHTML = xhr.responseText;
        form.reset();
      }
    };
    xhr.send(formData);
  });
});
