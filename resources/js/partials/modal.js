// TODO: Code your modal here
export const modal = () => {
    const myModal = document.getElementById("staticBackdrop");
    myModal.addEventListener("show.bs.modal", async function (event) {
        const button = event.relatedTarget;
        const details = JSON.parse(button.dataset.bsDetails);
        const modalBody = document.getElementsByClassName("modal-body")[0];
        if (details.category !== 'auth') {
            try {
                const response = await fetch(`${details.category}s/${details.id}`);
                const {content} = await response.json();
                modalBody.innerHTML = content;
            } catch (error) {
                console.error("Error fetching modal content:", error);
            }
        } else {
            try {
                const modalFooter = document.getElementsByClassName("modal-footer")[0];
                const response = await fetch('/auth');
                const {content} = await response.json();
                modalBody.innerHTML = content;
            } catch (error) {
                console.error("Error fetching modal content:", error);
            }
        }
    });
};
