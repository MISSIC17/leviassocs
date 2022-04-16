class form{
    constructor(formName) {
        this.formName= formName;
        this.form = document.querySelector(`form[name='${formName}']`);
        this.formElems = [];
    }
    setup() {
        // this.form.addEventListener('submit', (e) => {
        //     e.preventDefault();
        // });
        for (let elem of this.form.elements) {
            this.formElems.push(elem.name);
            console.log(elem.name);
        }
        this.formElems = [...new Set(this.formElems)];
        this.formElems.map((elem) => {
            console.log(elem);
            let currentField = document.querySelector(`input[name="${elem}"]`);
            console.log(currentField);
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
        })
        
    }
    validate() {

    }
    showTopMsg() {
        
    }
}
let adminForm = new form('admin');
adminForm.setup();
// let a = document.querySelector('form[name="admin"]');
// for (let elem of a.elements) {
//     console.log(elem);
// }