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
        $movie_image = $row['movie_image'];
        echo "<tr>";
        echo "<td> $movie_id</td>";
        echo "<td> $movie_title</td>";
        echo "<td> $movie_director</td>";
        echo "<td> $movie_date</td>";
        echo "<td> $movie_content</td>";
        echo "<td> $movie_tags</td>";
        echo "<td> $movie_status</td>";
        echo "<td> <img width='100' = 'img-responsive' img src ='../images/$movie_image' alt ='image' </td>";
    echo "<td> <a href='movies.php?source=edit_movie&p_id={$movie_id}'>Edit</a></td>";
        echo "<td> <a href='movies.php?delete={$movie_id}'>Delete</a></td>";

        ;?>

    </tbody>
        <?php } ?>
    </table>

<?php

    if(isset($_GET['delete'])){
        $the_post_id=$_GET['delete'];

        $query = "DELETE FROM movies where movie_id = {$movie_id}";

        $delete_query = mysqli_query($connection, $query);


    }


    ?>

                                 