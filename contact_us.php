<?php 
$title = "Contact_Us";
require_once 'include/header.php'; 
?>
    <style>
        body {
    background-image: url('background.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;

    margin: 0;
    padding: 0;
    min-height: 100vh;

    /* Adjusting padding to make room for footer only */
    padding-bottom: 60px;
}

.footer {
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent to match navbar */
    box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    padding: 20px 0;
    width: 100%;
    position: fixed;
    bottom: 0;
    z-index: 1000; /* Ensures footer stays above other content */
    font-family: Arial, sans-serif; /* Consistent with the rest of the page */
}

.footer-content {
    display: flex;
    justify-content: space-between; /* Spreads content nicely */
    align-items: center;
    max-width: 1200px; /* Matches grid-container width */
    margin: 0 auto;
    padding: 0 20px;
}

.footer-content p {
    margin: 0;
    font-size: 14px;
    color: #131550; /* Matches nav and search bar text color */
    font-weight: 400;
}

.back-to-top {
    background-color: #007bff; /* Matches the 'read-more' button color */
    color: white;
    border: none;
    border-radius: 50%; /* Circular button */
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.back-to-top:hover {
    background-color: #00539f; /* Darker shade on hover, matches search button hover */
    transform: translateY(-3px); /* Slight lift effect */
}

.back-to-top:focus {
    outline: none; /* Removes default outline */
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.3); /* Accessible focus ring */
}

/* Responsive Design for Footer */
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column; /* Stack items vertically on smaller screens */
        gap: 10px;
        text-align: center;
    }

    .back-to-top {
        width: 36px;
        height: 36px;
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    .footer {
        padding: 15px 0; /* Slightly less padding */
    }

    .footer-content p {
        font-size: 12px; /* Smaller text for very small screens */
    }

    .back-to-top {
        width: 32px;
        height: 32px;
        font-size: 16px;
    }
}
    </style>