


const form = document.querySelector('form#form_error');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    const nameElement = document.querySelector('input#name').value.trim();
    const priceElement = document.querySelector('input#price').value.trim();
    const quantityElement = document.querySelector('input#quantity').value.trim();
    const brandElement = document.querySelector('input#brand').value.trim();
    const imageElement = document.querySelector('input#image').value.trim();
    const descriptionElement = document.querySelector('textarea#description').value.trim();

    let hasError = 0;

    // call functions
    const a = nameValidation(nameElement);
    const b = priceValidation(priceElement);
    const c = quantityValidation(quantityElement);
    const d = brandValidation(brandElement);
    const e = imageValidation(imageElement);
    const f = descriptionValidation(descriptionElement);

    if (a + b + c + d + e + f === 0) {
        this.submit();
    }

})



// validation functions
// name input validation
function nameValidation(name) {
    let nameError = document.querySelector('div#nameError');
    if ( name && name.length >= 4 && name.length <= 70 ) {
        nameError.classList.remove('alert','alert-danger' ,'mt-2' , 'nameContent');
        return 0;
    } else {
        nameError.classList.add('alert','alert-danger' ,'mt-2' , 'nameContent');
        return 1;
    };
}

// price input validation
function priceValidation(price) {
    let priceError = document.querySelector('div#priceError');
    if ( price ) {
        priceError.classList.remove('alert','alert-danger' ,'mt-2' , 'priceContent');
        return 0;
    } else {
        priceError.classList.add('alert','alert-danger' ,'mt-2' , 'priceContent');
        return 1;
    };
}

// quantity input validation
function quantityValidation(quantity) {
    let quantityError = document.querySelector('div#quantityError');
    if ( Number.isInteger(quantity / 1) && quantity) {
        quantityError.classList.remove('alert','alert-danger' ,'mt-2' , 'quantityContent');
        return 0;
    } else {
        quantityError.classList.add('alert','alert-danger' ,'mt-2' , 'quantityContent');
        return 1;
    };
}

// brand input validation
function brandValidation(brand) {
    let brandError = document.querySelector('div#brandError');
    if ( brand && brand.length >= 2 && brand.length <= 100 ) {
        brandError.classList.remove('alert','alert-danger' ,'mt-2' , 'brandContent');
        return 0;
    } else {
        brandError.classList.add('alert','alert-danger' ,'mt-2' , 'brandContent');
        return 1;
    };
}

// image input validation
function imageValidation(image) {
    let imageError = document.querySelector('div#imageError');
    if ( image ) {
        imageError.classList.remove('alert','alert-danger' ,'mt-2' , 'imageContent');
        return 0;
    } else {
        imageError.classList.add('alert','alert-danger' ,'mt-2' , 'imageContent');
        return 1;
    };
}

// description input validation
function descriptionValidation(description) {
    let descriptionError = document.querySelector('div#descriptionError');
    if ( description.length >= 10 && description.length <= 4000) {
        descriptionError.classList.remove('alert','alert-danger' ,'mt-2' , 'descriptionContent');
        return 0;
    } else {
        descriptionError.classList.add('alert','alert-danger' ,'mt-2' , 'descriptionContent');
        return 1;
    };
}
