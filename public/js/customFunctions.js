const btn = document.getElementById("btnRed");
const txtbtn = document.getElementById("btn-text-danger");

btn?.addEventListener("mouseover", () => {
    txtbtn.classList.add("text-danger");
});

btn?.addEventListener("mouseout", () => {
    txtbtn.classList.remove("text-danger");
});


