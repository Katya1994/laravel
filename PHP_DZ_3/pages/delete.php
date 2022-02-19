<?php 
 include_once('styles.php');
?>
<form action="delete.php" method="post" style="padding: 5% 50% 0 10%">
<h2>Deleting</h2>
<div class="form-group">
    <label for="login">Enter user id:</label>
    <input type="text" class="form-control" name="id">
</div>
<button type="submit" class="btn btn-primary" 
name="deleteButton">Delete user</button>
</form>

<?php
if (isset($_POST['deleteButton']))
{
    if(!empty($_POST['id']))
    {
        $mysqlHandler = mysqli_connect('localhost', 'root', '', 'My_DB'); 
        $id = $_POST['id'];
        $myQuery = mysqli_query($mysqlHandler, 'DELETE FROM users WHERE id = '.$id.';');
        echo "Пользователь с id: (".$id.") успешно удален из таблицы!<br>";
    }
    else
        echo "Нужно ввести id пользователя!";
}
?>