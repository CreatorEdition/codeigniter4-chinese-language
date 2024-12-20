<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// 会话语言设置
return [
    'missingDatabaseTable'   => '"sessionSavePath" 必须包含数据库会话处理器所需的表名。',
    'invalidSavePath'        => '会话: 配置的保存路径 "{0}" 不是目录、不存在或无法创建。',
    'writeProtectedSavePath' => '会话: 配置的保存路径 "{0}" 不能被 PHP 进程写入。',
    'emptySavePath'          => '会话: 没有配置保存路径。',
    'invalidSavePathFormat'  => '会话: 无效的 Redis 保存路径格式: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => '会话: SameSite 设置必须是 None、Lax、Strict 或空字符串。给定: "{0}"',
];
