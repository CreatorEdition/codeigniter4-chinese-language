<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// 邮件语言设置
return [
    'mustBeArray'          => '邮件验证方法必须传递一个数组。',
    'invalidAddress'       => '无效的邮件地址："{0}"',
    'attachmentMissing'    => '无法找到以下邮件附件："{0}"',
    'attachmentUnreadable' => '无法打开此附件："{0}"',
    'noFrom'               => '无法发送没有 "From" 头部的邮件。',
    'noRecipients'         => '必须包含收件人：收件人、抄送或密件抄送。',
    'sendFailurePHPMail'   => '无法使用 PHP mail() 发送邮件。您的服务器可能没有配置为使用此方法发送邮件。',
    'sendFailureSendmail'  => '无法使用 Sendmail 发送邮件。您的服务器可能没有配置为使用此方法发送邮件。',
    'sendFailureSmtp'      => '无法使用 SMTP 发送邮件。您的服务器可能没有配置为使用此方法发送邮件。',
    'sent'                 => '您的邮件已成功发送，使用以下协议：{0}',
    'noSocket'             => '无法打开 Sendmail 套接字。请检查设置。',
    'noHostname'           => '您未指定 SMTP 主机名。',
    'SMTPError'            => '遇到以下 SMTP 错误：{0}',
    'noSMTPAuth'           => '错误：您必须分配 SMTP 用户名和密码。',
    'failedSMTPLogin'      => '发送 AUTH LOGIN 命令失败。错误：{0}',
    'SMTPAuthUsername'     => '用户名认证失败。错误：{0}',
    'SMTPAuthPassword'     => '密码认证失败。错误：{0}',
    'SMTPDataFailure'      => '无法发送数据：{0}',
    'exitStatus'           => '退出状态码：{0}',
];
