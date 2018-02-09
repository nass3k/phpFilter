<?
//Соединение с базой данных
$link = mysqli_connect('localhost', 'root', '', 'books');
// Сообщение об ощибке если не удалось соединение
if(!$link){
  echo 'Error' . mysqli_connect_error();
}
//Обработка запроса
//Если нажата кнопка "Фильтровать"
if($_POST['submit']){
    //Выполняем сортировку по автору
    if($_POST['select'] == 'autor' && !$_POST['text']){
      $sql = "SELECT * FROM `TABLE 1` ORDER BY `COL 2`";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo $row['COL 1'] . " || " . $row['COL 2'] . "<br>";
      }
      //Выполняем сортировку по названию книги
    }elseif($_POST['select'] == 'book' && !$_POST['text']){
      $sql = "SELECT * FROM `TABLE 1` ORDER BY `COL 1`";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo $row['COL 1'] . " || " . $row['COL 2'] . "<br>";
      }
      //Выполняем сортировку по символам введенным в текстовом поле
    }elseif($_POST['select'] == 'autor' && $_POST['text']){
      $text = $_POST['text'];
      $sql = "SELECT * FROM `TABLE 1` WHERE CONCAT(`COL 1`, `COL 2`) LIKE '%".$text."%'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo $row['COL 1'] . " || " . $row['COL 2'] . "<br>";
      }
      //Выполняем сортировку по символам введенным в текстовом поле
    }elseif($_POST['select'] == 'book' && $_POST['text']){
      $text = $_POST['text'];
      $sql = "SELECT * FROM `TABLE 1` WHERE CONCAT(`COL 1`, `COL 2`) LIKE '%".$text."%'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo $row['COL 1'] . " || " . $row['COL 2'] . "<br>";
      }
    }
}

  /*  if(isset($_POST['text'])){
      $text = $_POST['text'];
      $sql = "SELECT * FROM `table` WHERE CONCAT(`COL 1`, `COL 2`) LIKE '%".$text."%'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo $row['COL 1'] . " || " . $row['COL 2'] . "<br>";
      }
    }
    */
