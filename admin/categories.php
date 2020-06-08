<?php include "includes/admin_header.php"?>

<body>
<div id="wrapper">
    <?php include "./includes/admin_navigation.php"?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin page
                        <small>Author</small>
                    </h1>
                    <div class="col-xs-6">
                        <?php insert_categories(); ?>
                        <form action="" method= "post">
                            <div class="form-group">
                                <label for="category-title">Add Category</label>
                                <input type="text" class="form-control"  name="category_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>

                        <?php
                        // UPDATE and INCLUDE QUERY
                        if(isset($_GET['edit'])){
                            $category_id = $_GET['edit'];
                            include "./includes/admin_update_categories.php";
                        }
                        ?>
                    </div>

                    <div class="col-xs-6">
                        <h4>Blog Categories</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="list-unstyled">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category Title </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php findAllCategories(); ?>

                                        <?php
                                        //Delete Categories Query

                                        if(isset($_GET['delete'])){
                                            $the_category_id =$_GET['delete'];
                                            $query = "DELETE FROM categories WHERE category_id = {$the_category_id}";
                                            $delete = mysqli_query($connection, $query);
                                            header("Location: categories.php");
                                        }
                                        ?>

                                        <?php deleteCategories();?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
    <!-- /#wrapper -->
        <?php include "includes/admin_footer.php"?>
    
    

   