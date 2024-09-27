<?php

$leftImageSrc = "./assets/ford.jpg"; 
$leftName = "Clifford Bayangos";
$leftLinkedinUrl = "https://www.linkedin.com/in/clifford-bayangos-bab8a92b5/";
$leftQuote = "Let go of who you think you're supposed to be and embrace who you are.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Group 1 Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kings&display=swap" rel="stylesheet">

    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            display: flex;
            margin-top: 50px;
        }

        .left-side {
            width: 25%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.515);
        }

        .right-side {
            width: 75%;
            padding-left: 20px;
        }

        .groupname {
            font-family: 'Kings', cursive;
            color: #1b4f72;
            text-shadow: 2px 0 #fff, -2px 0 #fff, 0 2px #fff, 0 -2px #fff,
               1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;
            text-align: center;
            font-size: 100px;
            font-weight: bold;
            padding-top: 30px;
        }

        .mycard {
            min-height: 50vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .card {
            position: relative;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15);
            padding: 50px;
            margin: 10px 24px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(169, 204, 227, 0.8);
        }

        .card-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 15px 35px -15px rgba(0, 0, 0, 0.5), 0 5px 20px 0 rgba(0, 0, 0, 0.1);
        }

        .card-image img {
            width: 100%;
            transform: scale(1.2);
        }

        p {
            line-height: 24px;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            text-align: center;
        }

        .name {
            margin-top: 80px;
            font-size: 1.4em;
            font-weight: bold;
            letter-spacing: 0.8px;
            margin-bottom: 8px;
        }

        a {
            text-decoration: none;
        }

        img {
            height: 140px;
            width: 100px;
        }

        .left-image img {
            border-radius: 10%;
            margin-top: 30px;
            margin-left: 20%;
            height: 400px;
            width: 300px;
        }

        .left-image {
            padding-bottom: 75%;
        }

        a {
            color: white;
            text-decoration: underline;
        }

        .left-name {
            font-size: 30px;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            color: white;
        }

        h1 {
            color: white;
            text-align: center;
        }

        #left-quote {
            color: white;
            font-size: 25px;
        }
    </style>
</head>

<body background="./assets/background.jpg">
    <div class="container">
        <div class="left-side">
            <div class="left-image">
                <img src="<?php echo $leftImageSrc; ?>" alt="Profile image">
                <h1 id="left-name"><?php echo $leftName; ?></h1>
                
                <p>
                    <a id="left-link" href="<?php echo $leftLinkedinUrl; ?>" target="_blank">LinkedIn</a>
                </p>
                <p id="left-quote">
                    <?php echo $leftQuote; ?>
                </p>
            </div>
        </div>

        <div class="right-side">
            <div class="groupname">Group 1</div>
            <br />
            <div class="mycard">
                <div class="card" onclick="updateLeftSide('./assets/ford.jpg', 'Clifford Bayangos', 'https://www.linkedin.com/in/clifford-bayangos-bab8a92b5/', 'Let go of who you think you\'re supposed to be and embrace who you are.')">
                    <div class="card-image">
                        <img src="./assets/ford.jpg" alt="Profile image">
                    </div>
                    <p class="name">Clifford Bayangos</p>
                    <p>Ford</p>
                    <p>IT STUDENT</p>
                </div>

                <div class="card" onclick="updateLeftSide('./assets/jay.jpg', 'Marion Jay Amian', 'https://www.linkedin.com/in/marion-jay-amian-248726322/', 'Strive not to be a success, but rather to be of value.')">
                    <div class="card-image">
                        <img src="./assets/jay.jpg" alt="Profile image">
                    </div>
                    <p class="name">Marion Jay Amian</p>
                    <p>Jay</p>
                    <p>IT STUDENT</p>
                </div>

                <div class="card" onclick="updateLeftSide('./assets/rald.jpg', 'Micah Gerald Briones', 'https://www.linkedin.com/in/micah-briones-a6b6312aa', 'Success is not the key to happiness. Happiness is the key to success.')">
                    <div class="card-image">
                        <img src="./assets/rald.jpg" alt="Profile image">
                    </div>
                    <p class="name">Micah Gerald Briones</p>
                    <p>Rald</p>
                    <p>IT STUDENT</p>
                </div>

                <div class="card" onclick="updateLeftSide('./assets/tame.jpg', 'Christamae Carandang', 'https://www.linkedin.com/in/christa-mae-carandang-7010122b1/', 'Do not wait for leaders; do it alone, person to person.')">
                    <div class="card-image">
                        <img src="./assets/tame.jpg" alt="Profile image">
                    </div>
                    <p class="name">Christamae Carandang</p>
                    <p>Tame</p>
                    <p>IT STUDENT</p>
                </div>

                <div class="card" onclick="updateLeftSide('./assets/nas.jpg', 'Jonas Alabarta', 'https://www.linkedin.com/in/jonas-alabarta-595a32322', 'In the end, it’s not the years in your life that count. It’s the life in your years.')">
                    <div class="card-image">
                        <img src="./assets/nas.jpg" alt="Profile image">
                    </div>
                    <p class="name">Jonas Alabarta</p>
                    <p>Nas</p>
                    <p>IT STUDENT</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateLeftSide(imageSrc, name, linkedinUrl, quote) {
            document.querySelector('.left-image img').src = imageSrc;
            document.getElementById('left-name').textContent = name;
            document.getElementById('left-link').href = linkedinUrl;
            document.getElementById('left-quote').textContent = quote;
        }
    </script>
</body>
</html>
