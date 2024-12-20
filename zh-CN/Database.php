<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// 数据库语言设置
return [
    'invalidEvent'                     => '"{0}" 不是一个有效的模型事件回调。',
    'invalidArgument'                  => '必须提供有效的 "{0}"。',
    'invalidAllowedFields'             => '模型 "{0}" 必须指定允许的字段。',
    'emptyDataset'                     => '没有数据可以 {0}。',
    'emptyPrimaryKey'                  => '尝试进行 {0} 时没有定义主键。',
    'failGetFieldData'                 => '从数据库获取字段数据失败。',
    'failGetIndexData'                 => '从数据库获取索引数据失败。',
    'failGetForeignKeyData'            => '从数据库获取外键数据失败。',
    'parseStringFail'                  => '解析键字符串失败。',
    'featureUnavailable'               => '您使用的数据库不支持此功能。',
    'tableNotFound'                    => '在当前数据库中找不到表 "{0}"。',
    'noPrimaryKey'                     => '"{0}" 模型类未指定主键。',
    'noDateFormat'                     => '"{0}" 模型类没有有效的 dateFormat。',
    'fieldNotExists'                   => '未找到字段 "{0}"。',
    'forEmptyInputGiven'               => '字段 "{0}" 给定了空值。',
    'forFindColumnHaveMultipleColumns' => '列名中只能包含单个列。',
    'methodNotAvailable'               => '不能在 "{0}" 中使用 "{1}"。这是查询构建器类的方法。',
];
