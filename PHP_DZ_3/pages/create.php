<?php 
 include_once('styles.php');
?>
<form action="create.php" method="post" style="padding: 5% 50% 0 10%">
<h2>Creation</h2>
<div class="form-group">
    <label for="login">Login:</label>
    <input type="text" class="form-control" name="login">
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control" name="password">
</div>
<button type="submit" class="btn btn-primary" 
name="createButton">Submit</button>
</form>
<?php 
if (isset($_POST['createButton']))
{
    $mysqlHandler = mysqli_connect('localhost', 'root', '', 'My_DB');    
    if(!empty( $_POST['login']))
    {
        mysqli_query($mysqlHandler, 'INSERT INTO users (`login`, `password`, `created`) 
            VALUES("'. $_POST['login'].'", "' . $_POST['password'].'", NOW())');

        echo "Запись успешно добавлена в таблицу";
    }
    else
    {
        echo "Нужно сначала заполнить поля!";
    }
}
?>