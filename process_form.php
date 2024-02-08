<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fromCity = $_POST["fromCity"];
    $toCity = $_POST["toCity"];
    $departDate = $_POST["departDate"];
    $returnDate = $_POST["returnDate"];
    $travelClass = $_POST["travelClass"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];

    // Process the form data (you can add your logic here)

    // Generate a response
    $responseMessage = "Flight search request received:\n";
    $responseMessage .= "From: $fromCity\n";
    $responseMessage .= "To: $toCity\n";
    $responseMessage .= "Depart Date: $departDate\n";
    $responseMessage .= "Return Date: $returnDate\n";
    $responseMessage .= "Travel Class: $travelClass\n";
    $responseMessage .= "Adults: $adults\n";
    $responseMessage .= "Children: $children\n";

    // Display the response page
    echo "<html>
            <head>
                <title>Flight Search Response</title>
                <link rel='stylesheet' href='./stylephp.css'>
            </head>
            <body>
                <h1>Flight Search Response</h1>
                <p>$responseMessage</p>
                <a href='./index.html'>Back to Homepage</a>
            </body>
          </html>";
} else {
    // Redirect to the homepage if accessed directly without form submission
    header("Location: ./index.html");
    exit();
}
?>
