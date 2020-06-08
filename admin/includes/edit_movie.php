<?php

if(isset($_GET['p_id'])) {

    echo $_GET['p_id'];
}


$query = "SELECT * FROM movies";
$select_movies_by_id= mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_movies_by_id)) {
    $movie_id = $row['movie_id'];
    $movie_title = $row['movie_title'];
    $movie_director = $row['movie_director'];
    $movie_date = $row['movie_date'];
    $movie_content = $row['movie_content'];
    $movie_tags = $row['movie_tags'];
    $movie_status = $row['movie_status'];
    $movie_image = $row['movie_image'];
   
}

?>






<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Movie Title</label>
        <input type="text" class="form-control" name ="movie_title">
    </div>

    <div class="form-group">
        <label for="movie_category_id">Movie Category Id</label>
        <input type="number" class="form-control" name ="movie_category_id">
    </div>

    <div class="form-group">
        <label for="title">Movie Director</label>
        <input type="text" class="form-control" name ="movie_director">
    </div>

    <div class="form-group">
        <label for="movie_date">Movie Date </label>
        <input type="text" class="form-control" name ="movie_date">
    </div>

    <div class="form-group">
        <label for="movie_image">Movie Image </label>
        <input type="file" name ="movie_image">
    </div>

    <div class="form-group">
        <label for="movie_content">Movie Content </label>
        <textarea class = "form-control" name = "movie_content" id="" cols="10" rows="10"> </textarea>
    </div>
    <div class="form-group">
        <label for="movie_tags">Movie Tags</label>
        <input type="text" class="form-control" name ="movie_tags">
    </div>

    <div class="form-group">
        <label for="movie_status">Movie Status </label>
        <input type="text" class="form-control" name ="movie_status">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_movie" value="Publish the movie">
    </div>
</form>