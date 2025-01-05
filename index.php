<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件传输系统</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>文件传输系统</h1>
        <div class="upload-section">
            <h2>上传文件</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file">
                <input type="submit" name="submit" value="上传">
            </form>
        </div>
        <div class="download-section">
            <h2>下载文件</h2>
            <ul id="fileList"></ul>
        </div>
    </div>
    <script>
    console.log("%c By Fubi %c QQ:1072385033 ",
'color:#fff;background-color:blue;line-height:20px;border-radius: 5px 0 0 5px',
'color:#fff;background-color:orange;line-height:20px;border-radius: 0px 5px 0')
    </script>
    <script src="script.js"></script>
</body>

</html>