<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// HTTP语言设置
return [
    // CurlRequest
    'missingCurl'     => '必须启用CURL才能使用CURLRequest类。',
    'invalidSSLKey'   => '无法设置SSL密钥。"{0}" 不是有效的文件。',
    'sslCertNotFound' => '未找到SSL证书："{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" 不是有效的协商类型。必须是以下之一：media、charset、encoding、language。',
    'invalidJSON'            => '解析JSON字符串失败。错误：{0}',
    'unsupportedJSONFormat'  => '提供的JSON格式不被支持。',

    // Message
    'invalidHTTPProtocol' => '无效的HTTP协议版本：{0}',

    // Negotiate
    'emptySupportedNegotiations' => '必须为所有协商提供支持的值数组。',

    // RedirectResponse
    'invalidRoute' => '无法找到"{0}"的路由。',

    // DownloadResponse
    'cannotSetBinary'        => '设置文件路径时，无法设置二进制数据。',
    'cannotSetFilepath'      => '设置二进制数据时，无法设置文件路径："{0}"',
    'notFoundDownloadSource' => '未找到下载源。',
    'cannotSetCache'         => '下载不支持缓存。',
    'cannotSetStatusCode'    => '下载不支持更改状态代码。代码：{0}，原因：{1}',

    // Response
    'missingResponseStatus' => 'HTTP响应缺少状态码',
    'invalidStatusCode'     => '{0} 不是有效的HTTP返回状态码',
    'unknownStatusCode'     => '提供了未知的HTTP状态码，且没有消息：{0}',

    // URI
    'cannotParseURI'       => '无法解析URI："{0}"',
    'segmentOutOfRange'    => '请求的URI段超出范围："{0}"',
    'invalidPort'          => '端口必须介于0和65535之间。给定值：{0}',
    'malformedQueryString' => '查询字符串不能包含URI片段。',

    // Page Not Found
    'pageNotFound'       => '页面未找到',
    'emptyController'    => '未指定控制器。',
    'controllerNotFound' => '未找到控制器或其方法：{0}::{1}',
    'methodNotFound'     => '未找到控制器方法："{0}"',
    'localeNotSupported' => '不支持的语言环境：{0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => '您请求的操作不被允许。',

    // 上传文件移动
    'alreadyMoved' => '上传的文件已经被移动。',
    'invalidFile'  => '原始文件不是有效的文件。',
    'moveFailed'   => '无法将文件"{0}"移动到"{1}"。原因：{2}',

    'uploadErrOk'        => '文件上传成功。',
    'uploadErrIniSize'   => '文件"%s"超出了upload_max_filesize ini指令限制。',
    'uploadErrFormSize'  => '文件"%s"超出了表单定义的上传限制。',
    'uploadErrPartial'   => '文件"%s"只部分上传。',
    'uploadErrNoFile'    => '未上传文件。',
    'uploadErrCantWrite' => '文件"%s"无法写入磁盘。',
    'uploadErrNoTmpDir'  => '文件无法上传：缺少临时目录。',
    'uploadErrExtension' => '文件上传被PHP扩展停止。',
    'uploadErrUnknown'   => '文件"%s"未上传，原因是未知错误。',

    // SameSite设置
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite设置必须为None、Lax、Strict或空字符串。给定值：{0}',
];
