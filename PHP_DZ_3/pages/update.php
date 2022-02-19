<?php 
 include_once('styles.php');
?>
<form action="update.php" method="post" style="padding: 5% 50% 0 10%">
<h2>Updating</h2>
<div class="form-group">
    <label for="login">Enter user Id:</label>
    <input type="text" class="form-control" name="id">
</div>
<div class="form-group">
    <label for="login">Change password:</label>
    <input type="text" class="form-control" name="newPassword">
</div>
<div class="form-group">
    <label for="login">Change login:</label>
    <input type="text" class="form-control" name="newLogin">
</div>
<button type="submit" class="btn btn-primary" 
name="updateButton">Submit updating</button>
</form>

<?php
if (isset($_POST['updateButton']))
{
    if(!empty($_POST['id']))
    {
        $mysqlHandler = mysqli_connect('localhost', 'root', '', 'My_DB'); 
        $id = $_POST['id'];

        if(!empty($_POST['newPassword']) && !empty($_POST['newLogin']))
        {
            $newPassword = $_POST['newPassword'];
            $newLogin = $_POST['newLogin'];
            $myQuery = mysqli_query($mysqlHandler, "UPDATE `users` SET `login` = '$newLogin', `password` = '$newPassword'  WHERE `id` = ".$id.";");
            echo "Изменение данных завершено!";
        }
        else
            echo "Нужно ввести данные для изменения!";
    }
    else
        echo "Нужно ввести id";
}
?>