<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// 图片语言设置
return [
    'sourceImageRequired'    => '必须在设置中指定源图片。',
    'gdRequired'             => '使用此功能需要GD图像库。',
    'gdRequiredForProps'     => '您的服务器必须支持GD图像库才能确定图像属性。',
    'gifNotSupported'        => '由于许可限制，GIF图像通常不被支持。您可能需要使用JPG或PNG图像。',
    'jpgNotSupported'        => '不支持JPG图像。',
    'pngNotSupported'        => '不支持PNG图像。',
    'webpNotSupported'       => '不支持WEBP图像。',
    'fileNotSupported'       => '提供的文件不是支持的图像类型。',
    'unsupportedImageCreate' => '您的服务器不支持处理此类型图像所需的GD函数。',
    'jpgOrPngRequired'       => '在设置中指定的图像调整协议仅适用于JPEG或PNG图像类型。',
    'rotateUnsupported'      => '图像旋转似乎不被您的服务器支持。',
    'libPathInvalid'         => '图像库的路径不正确。请在设置中设置正确的路径：“{0}”',
    'imageProcessFailed'     => '图像处理失败。请验证您的服务器是否支持所选协议，并确保图像库的路径正确。',
    'rotationAngleRequired'  => '旋转图像需要指定旋转角度。',
    'invalidPath'            => '图像路径不正确。',
    'copyFailed'             => '图像复制过程失败。',
    'missingFont'            => '无法找到可用的字体。',
    'saveFailed'             => '无法保存图像。请确保图像和文件目录是可写的。',
    'invalidDirection'       => '翻转方向只能是“垂直”或“水平”。给定值：“{0}”',
    'exifNotSupported'       => '此PHP安装不支持读取EXIF数据。',
];
