// Подключаемся к базе данных
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем соединение
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Выполняем запрос к базе данных
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Обрабатываем результат запроса
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

// Закрываем соединение с базой данных
mysqli_close($conn);