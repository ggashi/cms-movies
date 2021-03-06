<?php
if(isset($_POST['create_movie'])){
    $movie_title= $_POST['movie_title'];
    $movie_category_id = $_POST['movie_category_id'];
    $movie_director =$_POST['movie_director'];
    $movie_image = $_FILES['movie_image']['name'];
    $movie_image_temp = $_FILES ['movie_image']['tmp_name'];
    $movie_content = $_POST['movie_content'];
    $movie_status = $_POST['movie_status'];
    $movie_tags = $_POST['movie_tags'];
    $movie_date = date('d-m-y');

move_uploaded_file($movie_image_temp,"../images/$movie_image");


$query ="INSERT INTO movies(movie_title,movie_category_id,movie_director,movie_date, movie_image,
 movie_content,movie_status,movie_tags)";

    $query.= "VALUES('{$movie_title}',{$movie_category_id},'{$movie_director}',now(),'{$movie_image}'
    ,'{$movie_content}','{$movie_status}','{$movie_tags}')";

    $create_post_query = mysqli_query($connection,$query);

    if(!$create_post_query){
        die("Query failed ! ".mysqli_error($connection));
    }

}?>

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
        <input class="btn btn-primary" type="submit" name="create_movie" value="Publish the movie">
    </div>
</form>

