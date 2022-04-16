const formDisplay = (category) => {
    let loginBtn = document.querySelector(`#${category}-btn-wrapper>button`);
    let formWrapper = document.querySelector(`#${category}-login-wrapper`);
    let darkElements = document.querySelectorAll('body>*');
    loginBtn.addEventListener('click', () => {
        formWrapper.classList.replace('hidden', 'grid');
        formWrapper.classList.toggle('popup-animation');
        darkElements.forEach(elem => {
            elem.querySelectorAll(`${elem.tagName}>*:not(#form-popups)`).forEach(e => {
                e.classList.add('dark');
            });
        });
    });
    let closeBtn = document.querySelector(`#close-btn-${category}`);
    closeBtn.addEventListener('click', () => {
        if (formWrapper.classList.contains('grid')) {
            formWrapper.classList.replace('grid', 'hidden');
            formWrapper.classList.toggle("popup-animation");
        };
        darkElements.forEach(elem => {
            elem.querySelectorAll(`${elem.tagName}>*:not(#form-popups)`).forEach(e => {
                e.classList.remove('dark');
            });
        });
    });
}
formDisplay('student');
formDisplay('admin');
