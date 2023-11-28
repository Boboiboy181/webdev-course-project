// TODO: Code your modal here
export const modal = () => {
  const myModal = document.getElementById("staticBackdrop");
  myModal.addEventListener("show.bs.modal", async function (event) {
      const button = event.relatedTarget;
      const details = JSON.parse(button.dataset.bsDetails);
      const modalBody = document.getElementsByClassName("modal-body")[0];
      try {
          const response = await fetch(`${details.category}s/${details.id}`);
          const { content } = await response.json();
          modalBody.innerHTML = content;
      } catch (error) {
          console.error("Error fetching modal content:", error);
      }
  });
};
