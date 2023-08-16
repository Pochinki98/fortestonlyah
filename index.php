<?php
$directory = 'path_to_your_directory/'; // 替换为你的目录路径
$allowedExtensions = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG'];// 允许的文件扩展名

// 扫描目录中的文件
$files = scandir($directory);

// 从目录中筛选出允许的图片文件
$imageFiles = [];
foreach ($files as $file) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($extension, $allowedExtensions)) {
        $imageFiles[] = $file;
    }
}

// 从允许的图片文件中随机选择一个
if (!empty($imageFiles)) {
    $randomImage = $imageFiles[array_rand($imageFiles)];
    $imageUrl = $directory . $randomImage;
    echo '<img src="' . $imageUrl . '" alt="Random Image">';
} else {
    echo 'No eligible image files found.';
}
?>
