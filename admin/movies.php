<?php include "includes/admin_header.php"?>
<body>
<div id="wrapper">
    <?php include "includes/admin_navigation.php"?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class = "col-lg-12">
                    <h1 class ="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <?php
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }
                    else {
                        $source = '';
                    }
                    switch($source){
                        case 'add_movie';
                        include "includes/add_movie.php";
                        break;

                        case 'edit_movie';
                        include "includes/edit_movie.php";
                        break;

                        case '200';
                        echo 'nice 2000';
                    break;

                    default:

                    include "../includes/view_all_movies.php";
                    break;



                        }


                       

                       
                       
                       
                       
                       ?>
                       
                        </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
    
    <?php include "includes/admin_footer.php"?>
    
    

   