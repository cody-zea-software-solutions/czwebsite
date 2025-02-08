<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Resizer</title>
</head>
<body>
    <h1>Upload Your Logo to Resize</h1>
    <form action="resize.php" method="post" enctype="multipart/form-data">
        <label for="logo">Choose an image (PNG only):</label>
        <input type="file" name="logo" id="logo" accept=".png" required>
        <br><br>
        <input type="submit" value="Upload and Resize">
    </form>
</body>
</html>
