
const form = document.querySelector('form#form_error');

form.addEventListener('submit', function (event) {
    event.preventDefault();

    const nameElement = document.querySelector('input#name').value.trim();
    const descriptionElement = document.querySelector('textarea#description').value.trim();

    let hasError = 0;

    const a = nameValidation(nameElement);
    const b = descriptionValidation(descriptionElement);

    hasError = a + b;
    if (hasError === 0) {
        this.submit();
    }

});

// validation functions
// name value validation
function nameValidation(name) {
    const nameError = document.querySelector('div#nameError');
    if ( name && name.length > 3 && name.length < 70) {
        nameError.classList.remove('alert','alert-danger' ,'mt-2' , 'nameContent');
        return 0
    } else {
        nameError.classList.add('alert','alert-danger' ,'mt-2' , 'nameContent');
        return 1
    };
};

// description value validation
function descriptionValidation(description) {
    const descriptionError = document.querySelector('div#descriptionError');
    if ( description && description.length > 3 && description.length < 70) {
        descriptionError.classList.remove('alert','alert-danger' ,'mt-2' , 'descriptionContent');
        return 0
    } else {
        descriptionError.classList.add('alert','alert-danger' ,'mt-2' , 'descriptionContent');
        return 1
    };
};
