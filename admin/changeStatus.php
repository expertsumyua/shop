<?php
/*
1. Проверяем есть ли в базе даных пользователь с номером, 
    что ввел пользователь
2. Если нет, то регистрируем нового
3. Добавляем заказ с базу данных с привязкой к пользователю
*/

?>
<?php
/*============ Базовый фукционал: база данных ============*/
    include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
/*========================================================*/

/*=============== Добавление заказа в базу ========================*/
if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

    // echo "Заказ оформлен";

    $sql_orders = "UPDATE `orders` SET status = '" . $_POST["status"] . "' WHERE id =" . $_POST["id"] . ";";
    if ($conn->query($sql_orders)) {
        //echo "<h2>Вы отредактировали Категорию</h2>";
        header("Location: /admin/viewOrder.php");
     }
} 
/*=================================================================*/


?>