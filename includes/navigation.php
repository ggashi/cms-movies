    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Homepage</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_all_categories_query)){
                        $category_title = $row['category_title'];
                        echo "<li><a href='#'>{$category_title}</a></li>";
                    }
                    ?>
                    <li>
                        <a href="./admin/movies.php">Admin Page</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>