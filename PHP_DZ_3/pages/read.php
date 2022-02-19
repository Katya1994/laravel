<?php 
 include_once('styles.php');
?>
<form action="read.php" method="post" style="padding: 5% 50% 0 10%">
<h2>Reading</h2>
<div class="form-group">
    <label for="login">Enter user id:</label>
    <input type="text" class="form-control" name="id">
</div>
<button type="submit" class="btn btn-primary" 
name="readButton">Show data</button>
</form>
<div style="padding: 5% 0 0 10%; color: green;">
    <?php showUserData()?>
</div>

<?php
function showUserData()
{
    if (isset($_POST['readButton']))
    {
        if(!empty($_POST['id']))
        {
            $mysqlHandler = mysqli_connect('localhost', 'root', '', 'My_DB'); 
            $id = $_POST['id'];
            echo "Данные пользователя по id: (".$id.")<br>";
            $myQuery = mysqli_query($mysqlHandler, 'SELECT * FROM users WHERE id = '.$id.';');
        

            while ($row =  mysqli_fetch_array($myQuery))
            {
                print("id: ".$row['id']."<br>");
                print("Login: ".$row['login']."<br>");
                print("Password is: ".$row['password']."<br>");
                print("Created at: ".$row['created']."<br>");
                print("Avatar link: ".$row['avatae']."<br>");
                print("Last logined: ".$row['lastlogin']."<br>");
            }
        }
    }
}
?>