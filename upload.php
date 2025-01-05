<?php
$targetDir = "uploads/";
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir. $fileName;
$message = '';
if (isset($_POST["submit"]) &&!empty($_FILES["file"]["name"])) {
    // 上传文件
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        $message = "文件 $fileName 上传成功。";
    } else {
        $message = "上传文件时出错。";
    }
} else {
    $message = '请选择一个文件上传。';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF - 8">
    <meta name="viewport" content="width=device - width, initial - scale = 1.0">
    <title>文件上传</title>
</head>

<body>
    <p><?php echo $message;?></p>
    <a href="index.php">返回首页</a>
</body>

</html>