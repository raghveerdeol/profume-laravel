const nameElement = document.querySelector('input#name').value;
const priceElement = document.querySelector('input#price').value;
const quantityElement = document.querySelector('input#quantity').value;
const brandElement = document.querySelector('input#brand').value;
const imageElement = document.querySelector('input#image').value;
const descriptionElement = document.querySelector('textarea#description').value;

let hasError = false;
// name input validation
if ( nameElement && nameElement.length > 4 && nameElement.length < 70 ) {
    hasError = false;
    console.log('a')
} else {
    hasError = true;
    let nameErrorElement = document.querySelector('div#nameError');
    nameErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'nameContent');
    console.log('b')
};
// price input validation
if ( priceElement ) {
    hasError = false;
    console.log('a')
} else {
    hasError = true;
    let priceErrorElement = document.querySelector('div#priceError');
    priceErrorElement.classList.add('alert','alert-danger' ,'mt-2' , 'priceContent');
    console.log('b')
};
