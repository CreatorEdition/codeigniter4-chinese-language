<?php

/**
 * 该文件是 CodeIgniter 4 框架的一部分。
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * 有关完整的版权和许可信息，请查看
 * 随源代码一起分发的 LICENSE 文件。
 */

// 数据迁移语言设置
return [
    // 数据迁移运行器
    'missingTable'  => '必须设置迁移表。',
    'disabled'      => '迁移已加载，但被禁用或配置不正确。',
    'notFound'      => '找不到迁移文件：',
    'batchNotFound' => '未找到目标批次：',
    'empty'         => '没有找到迁移文件',
    'gap'           => '迁移序列中在版本号附近存在空隙：',
    'classNotFound' => '找不到迁移类 "%s"。',
    'missingMethod' => '迁移类缺少 "%s" 方法。',

    // 数据迁移命令
    'migHelpLatest'   => "\t\t将数据库迁移到最新可用的迁移版本。",
    'migHelpCurrent'  => "\t\t将数据库迁移到配置文件中设置的 'current' 版本。",
    'migHelpVersion'  => "\t将数据库迁移到版本 {v}。",
    'migHelpRollback' => "\t将所有迁移回滚到版本 0。",
    'migHelpRefresh'  => "\t\t卸载并重新运行所有迁移以刷新数据库。",
    'migHelpSeed'     => "\t运行名为 [name] 的数据填充器。",
    'migCreate'       => "\t创建一个名为 [name] 的新迁移文件。",
    'nameMigration'   => '为迁移文件命名',
    'migNumberError'  => '迁移编号必须是三位数，且序列中不能有空隙。',
    'rollBackConfirm' => '确定要回滚吗？',
    'refreshConfirm'  => '确定要刷新吗？',

    'latest'            => '正在运行所有新的迁移...',
    'generalFault'      => '迁移失败！',
    'migrated'          => '迁移完成。',
    'migInvalidVersion' => '提供的版本号无效。',
    'toVersionPH'       => '迁移到版本 %s...',
    'toVersion'         => '迁移到当前版本...',
    'rollingBack'       => '正在回滚迁移到批次：',
    'noneFound'         => '未找到迁移。',
    'migSeeder'         => '填充器名称',
    'migMissingSeeder'  => '必须提供填充器名称。',
    'nameSeeder'        => '为填充器文件命名',
    'removed'           => '回滚中：',
    'added'             => '正在运行：',

    // 数据迁移状态
    'namespace' => '命名空间',
    'filename'  => '文件名',
    'version'   => '版本',
    'group'     => '组',
    'on'        => '迁移日期：',
    'batch'     => '批次',
];
