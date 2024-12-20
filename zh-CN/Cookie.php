<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// Cookie 语言设置
return [
    'invalidExpiresTime'    => '"Expires" 属性的 "{0}" 类型无效。预期类型：字符串、整数或 DateTimeInterface 对象。',
    'invalidExpiresValue'   => 'Cookie 的过期时间无效。',
    'invalidCookieName'     => 'Cookie 名称 "{0}" 包含无效字符。',
    'emptyCookieName'       => 'Cookie 名称不能为空。',
    'invalidSecurePrefix'   => '使用 "__Secure-" 前缀需要设置 "Secure" 属性。',
    'invalidHostPrefix'     => '使用 "__Host-" 前缀必须设置 "Secure" 标志，不能包含 "Domain" 属性，并且 "Path" 必须设置为 "/"。',
    'invalidSameSite'       => 'SameSite 值必须是 None、Lax、Strict 或空字符串，传入的是 {0}。',
    'invalidSameSiteNone'   => '使用 "SameSite=None" 属性时，必须设置 "Secure" 属性。',
    'invalidCookieInstance' => '"{0}" 类期望 cookies 数组中的元素是 "{1}" 类的实例，但在索引 {3} 处得到了 "{2}"。',
    'unknownCookieInstance' => '在集合中未找到名为 "{0}" 且前缀为 "{1}" 的 Cookie 对象。',
];
