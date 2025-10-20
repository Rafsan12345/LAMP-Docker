<?php
if(isset($_FILES['image'])){
    $errors = [];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    $extensions = ["jpeg", "jpg", "png", "gif"];
    
    if(!in_array($file_ext, $extensions)){
        $errors[] = "Extension not allowed, please choose a JPEG, PNG, or GIF file.";
    }
    
    if($file_size > 2 * 1024 * 1024){
        $errors[] = 'File size must be less than 2 MB';
    }
    
    if(empty($errors)){
        $upload_path = "uploads/" . $file_name;
        if(move_uploaded_file($file_tmp, $upload_path)){
            echo "Success! Image uploaded to <a href='$upload_path'>$upload_path</a>";
        } else {
            echo "Failed to upload image.";
        }
    } else {
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }
} else {
    echo "No file uploaded.";
}
?>
