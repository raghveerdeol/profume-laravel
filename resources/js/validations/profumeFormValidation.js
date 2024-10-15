const nameElement = document.querySelector('input#name').value.trim();
const priceElement = document.querySelector('input#price').value.trim();
const quantityElement = document.querySelector('input#quantity').value.trim();
const brandElement = document.querySelector('input#brand').value.trim();
const imageElement = document.querySelector('input#image').value.trim();
const descriptionElement = document.querySelector('textarea#description').value.trim();

let hasError = false;

// name input validation
if ( nameElement && nameElement.length > 4 && nameElement.length < 70 ) {
    hasError = false;
} else {
    hasError = true;
    let nameErrorElement = document.querySelector('div#nameError');
    nameErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'nameContent');
};

// price input validation
if ( priceElement ) {
    hasError = false;
} else {
    hasError = true;
    let priceErrorElement = document.querySelector('div#priceError');
    priceErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'priceContent');
};

// quantity input validation
if ( Number.isInteger(quantityElement / 1) && quantityElement) {
    console.log(quantityElement)
    hasError = false;
} else {
    hasError = true;
    let quantityErrorElement = document.querySelector('div#quantityError');
    quantityErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'quantityContent');
};

// brand input validation
if ( brandElement && brandElement.length > 2 && brandElement.length < 100 ) {
    hasError = false;
} else {
    hasError = true;
    let brandErrorElement = document.querySelector('div#brandError');
    brandErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'brandContent');
};

// image input validation
if ( imageElement ) {
    hasError = false;
} else {
    hasError = true;
    let imageErrorElement = document.querySelector('div#imageError');
    imageErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'imageContent');
};

// description input validation
if ( descriptionElement ) {
    hasError = false;
} else {
    hasError = true;
    let descriptionErrorElement = document.querySelector('div#descriptionError');
    descriptionErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'descriptionContent');
};
