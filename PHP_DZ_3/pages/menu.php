<?php 
 include_once('pages\styles.php');
?>
<body>
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href=".\index.php">
              <i class="fa fa-line-chart"></i>
              My Site Main Page
            </a>           

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="pages\create.php" class="nav-link contact">Create</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages\read.php" class="nav-link contact">Read</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages\delete.php" class="nav-link contact">Delete</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages\update.php" class="nav-link contact">Update</a>
                    </li>
                    <li class="nav-item">
                        <a href="pages\list.php" class="nav-link contact">List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>