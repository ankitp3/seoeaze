const signUpButton = document.getElementById('loginpagesignUp');
const signInButton = document.getElementById('loginpagesignIn');
const container = document.getElementById('loginpagecontainer');

signUpButton.addEventListener('click', () => {
	container.classList.add("loginpageright-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("loginpageright-panel-active");
});