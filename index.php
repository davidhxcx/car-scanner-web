
<?php
$db = new PDO('sqlite:car_scanner.db');
$db->exec("CREATE TABLE IF NOT EXISTS scanner_data (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    timestamp TEXT,
    rpm INTEGER,
    speed INTEGER,
    coolant_temp INTEGER
)");

$data = $db->query("SELECT * FROM scanner_data ORDER BY id DESC LIMIT 100")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Importar Car Scanner</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    table, th, td { border: 1px solid #ccc; border-collapse: collapse; padding: 5px; }
  </style>
</head>
<body>
  <h1>Importar CSV do Car Scanner</h1>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="csvFile" accept=".csv" required>
    <button type="submit">Enviar</button>
  </form>

  <h2>Últimos Registros</h2>
  <table>
    <tr><th>Timestamp</th><th>RPM</th><th>Velocidade</th><th>Temp. Água</th></tr>
    <?php foreach ($data as $row): ?>
      <tr>
        <td><?= htmlspecialchars($row['timestamp']) ?></td>
        <td><?= $row['rpm'] ?></td>
        <td><?= $row['speed'] ?></td>
        <td><?= $row['coolant_temp'] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
