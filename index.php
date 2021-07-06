
<?php
    
    session_start();

    $clear = $_GET['clear'] ?? false;
    $reset = $_GET['reset'] ?? false;

    $_SESSION['counter'] = $_SESSION['counter'] ?? 0;
    $_SESSION['output'] = $_SESSION['output'] ?? '';

    //$output = $output ?? '';

    $digit = $_GET['digit'] ?? '';
        
        $_SESSION['counter']++;
        $_SESSION['output'] .= $digit;
    if( $clear ) { 
        $digit = $_SESSION['output'] = ''; 
        $clear = false;
    }
    if( $reset ) { 
        $digit = $_SESSION['output'] = ''; 
        $_SESSION['counter'] = 0;
        $reset = false;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "styles/css/Normalize.css">
    <link rel="stylesheet" href="styles/css/styles.css">

    <link rel = "shortcut icon" href = "imgs/favicon.ico">

    <title>EcoGuard.</title>
</head>
<body>
<div id = 'app'>


    <!-- [ NAVBAR ] -->
    <nav>
        
        <button class = 'menu'>
            <svg class="icon">
                <use xlink:href="imgs/icons.svg#ico-menu"></use>
            </svg>
        </button>

        <h1 class="logo">EcoGuard.</h1>

    </nav>


    <!-- [ MAIN ] -->
    <section class="how-it-works bg-light">
        
        <p class="description single-line-dark">
            Pressed: <?= $_SESSION['counter']; ?> times
        </p>
        <a href="index.php?reset=true" class="button bg-orange-hover mg-top-2">RESET</a>

    </section>

    <section class="input-field">
        <ul>
            <li class="output-field"><span><?= $_SESSION['output'] ?></span></li>

            <li class="input-digit"><a href = 'index.php?digit=0'>0</a></li>
            <li class="input-digit"><a href = 'index.php?digit=1'>1</a></li>
            <li class="input-digit"><a href = 'index.php?digit=2'>2</a></li>
            <li class="input-digit"><a href = 'index.php?digit=3'>3</a></li>
            <li class="input-digit"><a href = 'index.php?digit=4'>4</a></li>
            <li class="input-digit"><a href = 'index.php?digit=5'>5</a></li>
            <li class="input-digit"><a href = 'index.php?digit=6'>6</a></li>
            <li class="input-digit"><a href = 'index.php?digit=7'>7</a></li>
            <li class="input-digit"><a href = 'index.php?digit=8'>8</a></li>
            <li class="input-digit"><a href = 'index.php?digit=9'>9</a></li>
            
            <li class="input-clear"><a href = 'index.php?clear=true'>Clear</a></li>
        </ul>
    </section>


    <footer>
        <p>&copy; EcoGuard | All rights reserved.</p>
    </footer>

</div>
</body>
</html>