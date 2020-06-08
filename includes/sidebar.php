<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <div class="well">
                    <h4>Movies Search</h4>
                    <form action="search.php " method="post">
                        <div class="input-group">
                            <input name="search" class="form-control">
                            <span class="input-group-btn">
                                <button name ="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="well">
                    <?php
                        $query = "SELECT *FROM categories";
                        $select_categories_sidebar = mysqli_query($connection, $query);
                    ?>
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php
                                    while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                                        $category_title = $row['category_title'];
                                        echo "<li><a href='#'>{$category_title}</a></li>";
                                    }
                                ?>
     <?php include "widget.php";?>
