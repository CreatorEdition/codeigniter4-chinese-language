<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// 验证语言设置
return [
    // 核心消息
    'noRuleSets'      => '验证配置中未指定规则集。',
    'ruleNotFound'    => '"{0}" 不是一个有效的规则。',
    'groupNotFound'   => '"{0}" 不是一个验证规则组。',
    'groupNotArray'   => '"{0}" 规则组必须是一个数组。',
    'invalidTemplate' => '"{0}" 不是一个有效的验证模板。',

    // 规则消息
    'alpha'                 => '{field} 字段只能包含字母字符。',
    'alpha_dash'            => '{field} 字段只能包含字母数字、下划线和破折号字符。',
    'alpha_numeric'         => '{field} 字段只能包含字母数字字符。',
    'alpha_numeric_punct'   => '{field} 字段只能包含字母数字字符、空格和 ~ ! # $ % & * - _ + = | : . 字符。',
    'alpha_numeric_space'   => '{field} 字段只能包含字母数字和空格字符。',
    'alpha_space'           => '{field} 字段只能包含字母字符和空格。',
    'decimal'               => '{field} 字段必须包含一个十进制数字。',
    'differs'               => '{field} 字段必须与 {param} 字段不同。',
    'equals'                => '{field} 字段必须完全等于: {param}。',
    'exact_length'          => '{field} 字段长度必须恰好为 {param} 个字符。',
    'field_exists'          => '{field} 字段必须存在。',
    'greater_than'          => '{field} 字段必须包含一个大于 {param} 的数字。',
    'greater_than_equal_to' => '{field} 字段必须包含一个大于或等于 {param} 的数字。',
    'hex'                   => '{field} 字段只能包含十六进制字符。',
    'in_list'               => '{field} 字段必须是以下之一: {param}。',
    'integer'               => '{field} 字段必须包含一个整数。',
    'is_natural'            => '{field} 字段只能包含数字。',
    'is_natural_no_zero'    => '{field} 字段只能包含数字且必须大于零。',
    'is_not_unique'         => '{field} 字段必须包含数据库中已存在的值。',
    'is_unique'             => '{field} 字段必须包含一个唯一值。',
    'less_than'             => '{field} 字段必须包含一个小于 {param} 的数字。',
    'less_than_equal_to'    => '{field} 字段必须包含一个小于或等于 {param} 的数字。',
    'matches'               => '{field} 字段与 {param} 字段不匹配。',
    'max_length'            => '{field} 字段的长度不能超过 {param} 个字符。',
    'min_length'            => '{field} 字段的长度必须至少为 {param} 个字符。',
    'not_equals'            => '{field} 字段不能是: {param}。',
    'not_in_list'           => '{field} 字段不能是以下之一: {param}。',
    'numeric'               => '{field} 字段必须只包含数字。',
    'regex_match'           => '{field} 字段格式不正确。',
    'required'              => '{field} 字段是必填的。',
    'required_with'         => '当 {param} 存在时，{field} 字段是必填的。',
    'required_without'      => '当 {param} 不存在时，{field} 字段是必填的。',
    'string'                => '{field} 字段必须是一个有效的字符串。',
    'timezone'              => '{field} 字段必须是一个有效的时区。',
    'valid_base64'          => '{field} 字段必须是一个有效的 base64 字符串。',
    'valid_email'           => '{field} 字段必须包含一个有效的电子邮件地址。',
    'valid_emails'          => '{field} 字段必须包含所有有效的电子邮件地址。',
    'valid_ip'              => '{field} 字段必须包含一个有效的 IP 地址。',
    'valid_url'             => '{field} 字段必须包含一个有效的 URL。',
    'valid_url_strict'      => '{field} 字段必须包含一个有效的 URL。',
    'valid_date'            => '{field} 字段必须包含一个有效的日期。',
    'valid_json'            => '{field} 字段必须包含一个有效的 JSON。',

    // 信用卡
    'valid_cc_num' => '{field} 似乎不是一个有效的信用卡号。',

    // 文件
    'uploaded' => '{field} 不是一个有效的上传文件。',
    'max_size' => '{field} 文件过大。',
    'is_image' => '{field} 不是一个有效的上传图片文件。',
    'mime_in'  => '{field} 的 MIME 类型无效。',
    'ext_in'   => '{field} 的文件扩展名无效。',
    'max_dims' => '{field} 不是图片，或者图片过宽或过高。',
];
