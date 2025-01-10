// Script for any interactive features, like form validation or dynamic behavior

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (event) {
            let isValid = true;
            const inputs = document.querySelectorAll('input[required], textarea[required]');
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    alert(Please fill out the ${input.name} field.);
                }
            });

            if (!isValid) {
                event.preventDefault();
            }
        });
    }
});