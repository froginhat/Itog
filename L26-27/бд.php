<?php
//установить соединение с MySQL server
$mysqli = new mysqli('localhost','root','','cyrs');
// проверка на ошибки Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
// запрос на выборку MySqli Select Query
$results = $mysqli->query("SELECT id,Name,Surname, tel_number, email,login,password FROM clin");
$dob = $mysqli->query("INSERT INTO clin ( Name, Surname,tel_number,email,login,password) VALUES ( 'prim_znach', 'prim_znach', 'prim_znach', 'prim_znach', 'prim_znach', 'prim_znach')");
print '<table border="1"';
while($row = $results->fetch_array()) {
    print '<tr>';
    print '<td>'.$row["id"].'</td>';
    print '<td>'.$row["Name"].'</td>';
    print '<td>'.$row["Surname"].'</td>';
    print '<td>'.$row["tel_number"].'</td>';
    print '<td>'.$row["email"].'</td>';
    print '<td>'.$row["login"].'</td>';
    print '<td>'.$row["password"].'</td>';
    print '</tr>';
}
print '</table>';
// освобождение памяти Frees the memory associated with a result
$results->free();
// закрытие соединения close connection
$mysqli->close();
?>
