document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-button');

    toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const exerciseList = this.nextElementSibling;
            exerciseList.classList.toggle('hidden');
        });
    });
});
