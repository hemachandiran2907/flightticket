// Function to generate a PDF with e-ticket details and seat numbers
function generatePDF() {
    var doc = new jsPDF();
    var userInputs = JSON.parse(sessionStorage.getItem("userInputs"));

    // Adding e-ticket details
    doc.setFontSize(18);
    doc.text(20, 20, 'E-Ticket Details');
    doc.setFontSize(12);
    var yOffset = 30;
    Object.keys(userInputs).forEach(function(key) {
        doc.text(20, yOffset, key + ': ' + userInputs[key]);
        yOffset += 10;
    });

    // Adding seat numbers
    var seatNumbers = document.getElementById('seatNumbers').innerText;
    doc.text(20, yOffset + 10, 'Seat Numbers:');
    doc.setFontSize(10);
    doc.text(20, yOffset + 20, seatNumbers);

    // Save the PDF
    doc.save('e-ticket.pdf');
}

// Event listener for download button
document.getElementById('downloadButton').addEventListener('click', function() {
    generatePDF();
});
