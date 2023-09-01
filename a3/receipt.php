<?php
include 'tools.php';

// Initialize variables
$gst = 0;
$totalPrice = 0;


if (isset($_POST['day'])) {
    list($dayTime, $rate) = explode(',', $_POST['day']);
    list($day, $time) = explode('-', $dayTime);
} else {
    die("Day and rate not provided.");
}

// Check if movie code is set and valid
if (isset($_POST['movie']) && isValidMovie($_POST['movie'])) {
    $seatPrices = [
        'STA' => ['fullprice' => 21.5, 'discprice' => 16],
        'STP' => ['fullprice' => 19, 'discprice' => 14.5],
        'STC' => ['fullprice' => 17.5, 'discprice' => 13],
        'FCA' => ['fullprice' => 31, 'discprice' => 25],
        'FCP' => ['fullprice' => 28, 'discprice' => 23.5],
        'FCC' => ['fullprice' => 25, 'discprice' => 22],
    ];

    $totalPrice = 0;

    // Calculate total price based on seat quantities and prices
    foreach ($_POST['seats'] as $seatType => $quantity) {
        $priceRate = $rate === 'discprice' ? 'discprice' : 'fullprice';
        $quantity = intval($quantity);
        if (isset($seatPrices[$seatType][$priceRate])) {
            $totalPrice += $seatPrices[$seatType][$priceRate] * $quantity;
        }
        echo "Seat Type: $seatType, Price Rate: $priceRate, Quantity: $quantity<br>";

    }

    // Calculate GST
    $gst = $totalPrice * 0.1;

    // Organize data for CSV
    $data = [
        date('Y-m-d H:i:s'),
        $_POST['customer']['name'],
        $_POST['customer']['email'],
        $_POST['customer']['mobile'],
        $_POST['movie'],
        $_POST['seats']['STA'],
        $_POST['seats']['STP'],
        $_POST['seats']['STC'],
        $_POST['seats']['FCA'],
        $_POST['seats']['FCP'],
        $_POST['seats']['FCC'],
        $totalPrice,
        $gst
    ];

    $file = fopen('bookings.txt', 'a');
    fputcsv($file, $data);
    fclose($file);


} else {
    echo "Invalid data provided.";
}
?>

<!DOCTYPE html>
<html lang='en'>
   <head>
   <p> receipt page</p>
   </head>
   <body>
        <p><?php echo $gst; ?></p>
        <p><?php echo $totalPrice; ?></p>
   </body>
   <footer>
   </footer>
   <aside id="debug">
         <hr>
         <h3>Debug Area</h3>
         <pre>
        GET Contains:
        <?php print_r($_GET) ?>
        POST Contains:
        <?php print_r($_POST) ?>
        SESSION Contains:
        <?php print_r($_SESSION) ?>
      </pre>
      </aside>
   </body>
</html>
