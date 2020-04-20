<?php include "includes/db.php"?>
<?php include "includes/header.php"?>



<?php include "includes/navigation.php"?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
    
    <?php
                
                if(isset($_POST['submit'])){
                    
                    $search =$_POST['search']; 
                    
                    $query = "SELECT *FROM movies WHERE movie_tags LIKE '%$search%' ";
                    $search_query = mysqli_query($connection, $query);
                    
                    if(!$search_query){
                        die("QUERY FAILED ! " . mysqli_error($connection));
                    }
                    $count = mysqli_num_rows($search_query);
                    
                    if($count==0){
                        echo "<h1> no result</h1>";
                    }else{
                        
                      
                            while($row = mysqli_fetch_assoc($search_query)){
                                $movie_title = $row['movie_title'];
                                $movie_director = $row['movie_director'];
                                $movie_date = $row['movie_date'];
                                $movie_image = $row['movie_image'];
                                $movie_content = $row['movie_content'];
                  
                            ?>
                            
                            <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $movie_title ?></a>
                </h2>
                <p class="lead">
                    Directed by <a href="index.php"><?php echo $movie_director ?></a>
                </p>
                <p><span class= "glyphicon glyphicon-time"> Published :  </span><?php echo $movie_date ?> </p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $movie_image;?>" alt="">
                <hr>
                <p><?php echo $movie_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                            
                            
                
                
                <?php }

                    }
                    
           
                } 

?>
                
    
                   
                

                

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

              <?php include "includes/sidebar.php"?>

        </div>
        <!-- /.row -->

        <hr>
</div>
     

     
       