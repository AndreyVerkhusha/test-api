(function () {
    const typeField = document.querySelector('select[name="type_val"]');

    if (!typeField) {
        return;
    }

    function updateVisibleFields() {
        const selectedValue = typeField.value;
        const fields = document.querySelectorAll('input[name]');

        fields.forEach(function (field) {
            const fieldRow = field.closest('p');

            if (!fieldRow) {
                return;
            }

            fieldRow.style.display = field.name.includes(selectedValue)
                ? ''
                : 'none';
        });
    }

    typeField.addEventListener('change', updateVisibleFields);

    updateVisibleFields();
})();