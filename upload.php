
<?php
$db = new PDO('sqlite:car_scanner.db');

if (isset($_FILES['csvFile'])) {
    $file = $_FILES['csvFile']['tmp_name'];
    $handle = fopen($file, 'r');

    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
        if (is_numeric($data[1])) {
            $stmt = $db->prepare("INSERT INTO scanner_data (timestamp, rpm, speed, coolant_temp) VALUES (?, ?, ?, ?)");
            $stmt->execute([$data[0], $data[1], $data[2], $data[3]]);
        }
    }

    fclose($handle);
}
header('Location: index.php');
exit;
