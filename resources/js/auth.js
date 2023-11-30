const changAuthView = () => {
    const myModal = document.getElementById("staticBackdrop");
    console.log(myModal)
    myModal.addEventListener("show.bs.modal", async function (event) {
        const authOption = document.querySelectorAll('.auth-option__item');
        const authContent = document.querySelectorAll('.auth-option__view');

        authOption.forEach((option, index) => {
            option.addEventListener('click', () => {
                authOption.forEach((opt) => opt.classList.remove('active'));
                authContent.forEach((content) => content.classList.remove('auth-option-active'));

                option.classList.add('active');
                authContent[index].classList.add('auth-option-active');
            });
        });
    });
}

changAuthView();
