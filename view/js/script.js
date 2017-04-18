
// Open the modal
function showmodal() {
    document.getElementById('modal').style.display = 'block';
}

// Close the modal
function closemodal() {
    document.getElementById('modal').style.display = 'none';
}

// Close the modal when clicked outside the modal
window.onclick = function(event) {
    var modal = document.getElementById('modal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
