document.querySelectorAll('.toggle-password').forEach(element => {
    element.addEventListener('click', () => {
        // Find the password or text input in the parent element
        const input = element.parentElement.querySelector('input[type="password"], input[type="text"]');

        // Toggle between 'password' and 'text'
        input.type = input.type === 'password' ? 'text' : 'password';
    });
});
