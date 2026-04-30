document.getElementById("loginForm").addEventListener('submit', function(event) {
	event.preventDefault();
	if (event.target.fullname.value === "") {
		alert('Fullname is empty');
	}
	else {
		event.target.submit();
	}
});