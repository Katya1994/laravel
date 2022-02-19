<?php 
 include_once('styles.php');
?>
<h3 style="padding: 0% 0% 0% 2%;">List of users:</h3>
<div style="padding: 0% 0% 0% 2%; color: green;">
    <?php showListOfUsers()?>
</div>

<?php
function showListOfUsers()
{
    $mysqlHandler = mysqli_connect('localhost', 'root', '', 'My_DB'); 
    $myQuery = mysqli_query($mysqlHandler, 'SELECT * FROM users;');
    while ($row =  mysqli_fetch_array($myQuery))
    {
        print("id: ".$row['id']."<br>");
        print("Login: ".$row['login']."<br>");
        print("Password is: ".$row['password']."<br>");
        print("Created at: ".$row['created']."<br>");
        print("Avatar link: ".$row['avatae']."<br>");
        print("Last logined: ".$row['lastlogin']."<br>");
        print("----------------------------------<br>");
    }
}
?>