<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Contact form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="./feedback.js"></script>
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

<section class="container">
    <h2>Contact information</h2>
    <ul class="list-unstyled">
        <li>Email: <a href="mailto:illia.choplak.ki.2020@lpnu.ua">illia.choplak.ki.2020@lpnu.ua</a></li>
        <li>Telegram: <a href="https://t.me/Bru_tus">https://t.me/Bru_tus</a></li>
        <li>GitHub: <a href="https://github.com/illia-choplak">https://github.com/illia-choplak</a></li>
    </ul>

    <h2>Contact me</h2>
    <form id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="text">Message:</label>
				<textarea name="text" rows="4" class="form-control" required></textarea>
			</div>

			<input type="submit" id="sendMessageBtn" value="Send a message" class="btn btn-primary">
		</form>
</section>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>