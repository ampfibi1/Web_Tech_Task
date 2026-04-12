function shortenUrl() {
  let longUrl = document.getElementById("longUrl").value;
  let result = document.getElementById("result");

  if (!longUrl) {
    result.innerHTML = "Please enter a URL";
    return;
  }

  fetch("https://tinyurl.com/api-create.php?url=" + encodeURIComponent(longUrl))
    .then(response => response.text())
    .then(data => {
      result.innerHTML = "Short URL: <a href='" + data + "' target='_blank'>" + data + "</a>";
    })
    .catch(error => {
      result.innerHTML = "Error creating short URL";
    });
}