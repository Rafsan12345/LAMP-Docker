<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image to Server</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image" accept="image/*" required><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
