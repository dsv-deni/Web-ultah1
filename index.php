<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Happy Birthday, Mom!</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow: hidden;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            z-index: 10;
            padding: 20px;
        }
        h1 {
            font-size: 2.5em;
            color: #ff6f61;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: fadeIn 2s ease-in-out;
            margin-bottom: 15px;
        }
        p {
            font-size: 1.2em;
            color: #555;
            animation: fadeIn 4s ease-in-out;
        }
        .hearts {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        .heart {
            position: absolute;
            bottom: -50px;
            width: 40px;
            height: 40px;
            background-color: red;
            transform: rotate(45deg);
            animation: rise 6s linear infinite;
            opacity: 0.8;
        }
        .heart::before, .heart::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: red;
            border-radius: 50%;
        }
        .heart::before {
            left: -20px;
        }
        .heart::after {
            top: -20px;
        }
        .heart:nth-child(1) {
            background-color: #ff6f61;
            animation-delay: 0s;
        }
        .heart:nth-child(2) {
            background-color: #ffdd57;
            animation-delay: 2s;
            left: 50% !important;
        }
        .heart:nth-child(3) {
            background-color: #6bc5d2;
            animation-delay: 4s;
            left: 80% !important;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes rise {
            0% { 
                transform: rotate(45deg) translateY(0);
                opacity: 0.8;
            }
            100% { 
                transform: rotate(45deg) translateY(-100vh);
                opacity: 0;
            }
        }
        @media screen and (max-width: 480px) {
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
            .heart {
                width: 30px;
                height: 30px;
            }
            .heart::before, .heart::after {
                width: 30px;
                height: 30px;
            }
            .heart::before {
                left: -15px;
            }
            .heart::after {
                top: -15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Selamat Ulang Tahun Mamah!</h1>
    <p>Semoga panjang umur, bahagia, dan sehat selalu!!!</p>
    </div>
    <div class="hearts">
        <div class="heart" style="left: 20%;"></div>
        <div class="heart" style="left: 50%;"></div>
        <div class="heart" style="left: 80%;"></div>
    </div>
</body>
</html>