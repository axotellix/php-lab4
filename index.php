
<?php
    
    // [ FUNCTIONS ]
    function split( $str ) {

        $cols = [];
        $rows = explode('#', $str);

        foreach( $rows as $row ) {
            $cols []= explode('*', $row);
        }

        return $cols;
    
    }

    function printTable( $str ) {
        if( strpos($str, "*") && $str !== '' ) {
            $split_str = split($str);
            
            echo "<table class = 'table-dark'>";
            foreach( $split_str as $row ) {
                echo "<tr>";
                foreach( $row as $col ) {
                    echo "<td>$col</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } elseif( $str !== '' ) {
            echo "В таблице нет строк с ячейками";
        } else {
            echo "В таблице нет строк";
        }
        
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
    <section class="table bg-light">
        
        <?php
            $string = '#';
            printTable( $string );
        ?>

    </section>


    <footer class = 'fixed-bottom'>
        <p>&copy; EcoGuard | All rights reserved.</p>
    </footer>

</body>
</html>