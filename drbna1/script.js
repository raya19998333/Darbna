function search() {
    let textToSearch = document.getElementById("idsearch").value.trim(); // Trim whitespace from the input
    let p = document.getElementById("p");

    // If search input is empty, clear the highlighting
    if (textToSearch === "") {
        p.innerHTML = p.textContent; // Reset to original content
        return; // Exit the function
    }

    // Create a regular expression with the search text and flags
    let pattern = new RegExp(textToSearch, "gi");

    // Highlight the matching text with <mark> tags
    p.innerHTML = p.textContent.replace(pattern, match => `<mark>${match}</mark>`);
}
