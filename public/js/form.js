class form{
    constructor(formName) {
        this.formName= formName;
        this.form = document.querySelector(`form[name='${formName}']`);
        this.formElems = [];
    }
    setup() {
        for (let elem of this.form.elements) {
            this.formElems.push(elem.name);
        }
        this.formElems = [...new Set(this.formElems)];
        this.formElems.map((elem) => {
            if (document.querySelector(`#${elem}`).tagName !== 'SELECT') {

                let currentField = document.querySelector(`input[name="${elem}"]`);
                if (currentField.getAttribute('type') !== "radio") {
                    
                    currentField.addEventListener('focus', () => {
                        setInterval(() => {
                            let fieldValue = currentField.value;
                            if (document.activeElement == currentField) {
                                
                                if (fieldValue !== "") {
                                    
                                    if (currentField.classList.contains('black') || currentField.classList.contains('red')) {
                                        currentField.classList.remove('black');
                                        currentField.classList.remove('red');
                                        currentField.classList.add('green');
                                    }
                                } else {
                                    if (currentField.classList.contains('green') || currentField.classList.contains('black')) {
                                        
                                        currentField.classList.remove('black');
                                        currentField.classList.remove('green');
                                        currentField.classList.add('red');
                                    }
                                }
                                
                            }
                            
                        }, 500);
                    });
                }
            }
        })
        
    }
    validate() {

    }
    showTopMsg() {
        
    }
}
let formsOfDOM = document.querySelectorAll('form');
let formsArray = [];
for (let form of formsOfDOM) {
    formsArray.push(form.getAttribute('name'));
    console.log(form.getAttribute('name'));
}
for (let formName of formsArray) {
    let formElement = new form(formName);
    console.log(formElement);
    formElement.setup();
}
// let adminForm = new form('admin');
// adminForm.setup();
// let updateForm = new form('update');
// updateForm.setup();
function pwVisHandler(emoji) {
    let emojiElem = document.querySelector(`#${emoji}`);
    let fieldElem = emojiElem.parentElement.firstElementChild;
    emojiElem.addEventListener('click', () => {
        if (emojiElem.classList.contains('fa-eye-slash')) {
            fieldElem.setAttribute('type', 'text');
            emojiElem.classList.replace('fa-eye-slash', 'fa-eye');
        } else {
            fieldElem.setAttribute('type', 'password');
            emojiElem.classList.replace('fa-eye', 'fa-eye-slash');
        }
    })
}

pwVisHandler('update-eye');
