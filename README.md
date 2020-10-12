# rl06ti4
4ti
# Własne repozytorium kodu
```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
```

## Dokumentacja
Moja dokumentacja dotycząca pracy w domu na zajęcia Tworzenioe stron i aplikacji internetowych
## Instalacja
Instalacja została wykonana na zajęciach.

You can install it with Composer:

```
https://github.com/ElGoliatto/rl06ti4
```

## Cel i funkcje

* Zbiór elementów pracy w domu
* Możliwość pomocy kolegów zespołu projektowego
* Nadzór kierownika projektu

## Wkład projektowy

* Główny nadzór: https://github.com/Michal3456
* Kod projektu: https://github.com/ElGoliatto

## Licencja

Ten projekt jest udostępiony na licencji MIT. Szczegółowe informacje można znaleźć w dołączonym pliku LICENCJA.

## Autor

Radosław Łukaszyk
