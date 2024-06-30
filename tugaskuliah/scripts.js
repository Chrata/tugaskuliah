document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.compare-checkbox');
    const compareBtn = document.getElementById('compare-btn');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            const checkedCount = document.querySelectorAll('.compare-checkbox:checked').length;
            if (checkedCount === 3) {
                compareBtn.disabled = false;
                checkboxes.forEach(function (cb) {
                    if (!cb.checked) {
                        cb.disabled = true;
                    }
                });
            } else {
                compareBtn.disabled = true;
                checkboxes.forEach(function (cb) {
                    cb.disabled = false;
                });
            }
        });
    });
});
