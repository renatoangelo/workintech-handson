function selectRadio(name, value) {
    var radio = document.querySelector('input[name="' + name + '"][value="' + value + '"]');
    if (radio) {
        radio.checked = true;
    }
}


function toggleCheckbox(checkboxId) {
    var checkbox = document.getElementById(checkboxId);
    if (checkbox) {
        checkbox.checked = !checkbox.checked;
    }

}

function updateButtonState(checkbox) {
    var submitButton = document.getElementById('submitButton');
    if (submitButton) {
        submitButton.disabled = !checkbox.checked;
    }
}