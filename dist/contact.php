<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">


    <title>Contact Me</title>
</head>

<body>
    <header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <nav class="menu">
            <div class="menu-branding">
                <div class="portrait">

                </div>
            </div>
            <ul class="menu-nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="portfolio.html" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item current">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main id="contact">
        <h1 class="lg-heading">
            Contact
            <span class="text-secondary">Me</span>
        </h1>

        <div class="boxes">
            <div>
                <span class="text-secondary">Email:</span><a href="mailto:info@willyanicette.com">
                    info@willyanicette.com</a>
            </div>
            <div>
                <span class="text-secondary">Phone:</span> (561) 247-2618
            </div>
            <div>
                <span class="text-secondary">Address:</span> Port St. Lucie, FL 34953
            </div>
        </div>
        <form class="myForm" method="POST" action="contactEmail.php">
            <label for="customer_name">Name </label>
            <input type="text" name="name" id="name" required>
            <label for="email_address">Email </label>
            <input type="email" name="email_address" id="email_address" required>
            <label for="subject">Subject </label>
            <input type="text" name="subject" id="subject" required>
            <div id="comment-box">
                <label for="comments">Message</label>
                <textarea name="comments" id="comments" maxlength="500" required></textarea>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </main>

    <footer id="main-footer">
        Copyright &copy; 2018
    </footer>

    <script src="js/main.js"></script>
</body>

</html>