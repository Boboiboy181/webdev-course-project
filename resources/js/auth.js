const changAuthView = () => {
    const authOption = document.querySelectorAll(".auth-option__item");
    const authContent = document.querySelectorAll(".auth-option__view");

    authOption.forEach((option, index) => {
        option.addEventListener("click", () => {
            authOption.forEach((opt) => opt.classList.remove("active"));
            authContent.forEach((content) =>
                content.classList.remove("auth-option-active")
            );

            option.classList.add("active");
            authContent[index].classList.add("auth-option-active");
        });
    });
};

const myModal = document.getElementById("staticBackdrop");

myModal.addEventListener("shown.bs.modal", async function () {
    changAuthView();
});
