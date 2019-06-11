<?php
/**
 * 应用入口
 */

// 应用命名空间（请与应用所在目录名保持一致）
define('APP_NAMESPACE', 'App');

// 应用路径
define('APP_PATH',      dirname(dirname(__FILE__)));

// 是否显示错误信息
define('SHOW_ERROR',    true);

// 是否开启日志（生产环境建议关闭）
define('LOG_ON',        false);

// 是否启用布局功能
define('LAYOUT_ON',     true);

// 是否开启REST模式的API接口功能（默认值：false）
define('REST_ON',       false);

// 引入 MiniFramework
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/jasonweicn/miniframework/Bootstrap.php';
