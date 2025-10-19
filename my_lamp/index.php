<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>আমার PHP Info পেজ</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 20px; }
        h1 { color: #333; }
        .container { background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container">
        <h1>আমার PHP Info পেজ</h1>
        <?php
            phpinfo();
        ?>
    </div>
</body>
</html>
