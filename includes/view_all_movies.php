<table>
                           
                           <table class="table table-bordered table-hover">
                               
                                <thead>
                                   <tr>
                                        <th>Id</th>
                                       <th>Title</th>
                                       <th>Director</th>
                                       <th>Date</th>
                                       <th>Content</th>
                                       <th>Tags</th>
                                       <th>Status</th>
                                       <th>Comment</th>
                                       <th>Image</th>
                                       
                                   </tr>
                               </thead>
                               
                               
                           <tbody>
                    
                               
                               <?php
                              
                               $query = "SELECT * FROM movies LIMIT 10 ";
                               $select_all_movies_query = mysqli_query($connection, $query);
                    
                             while($row = mysqli_fetch_assoc($select_all_movies_query)){
                                $movie_id = $row['movie_id'];
                                $movie_title = $row['movie_title'];
                                $movie_director = $row['movie_director'];
                                $movie_date = $row['movie_date'];
                                $movie_content = $row['movie_content'];
                                $movie_tags = $row['movie_tags'];
                                $movie_status = $row['movie_status'];                               
                                $movie_comment = $row['movie_comment_count'];
                                $movie_image = $row['movie_image'];
                                 
                                echo "<tr>";
                                echo "<td> $movie_id</td>"; 
                                echo "<td> $movie_title</td>";
                                echo "<td> $movie_director</td>";
                                echo "<td> $movie_date</td>";
                                echo "<td> $movie_content</td>";
                                echo "<td> $movie_tags</td>";
                                echo "<td> $movie_status</td>";      
                                echo "<td> $movie_comment</td>";
                                echo "<td> <img width='100' = 'img-responsive' img src ='../images/$movie_image' alt ='image' </td>";?> 
                               
                                
                          
                                
                           </tbody>
                                
                                <?php } ?> 
                                 
                            
                    
                           </table>
                           
                            
                           
                           
                       
            
                       </table>
                              
                                 