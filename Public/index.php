<?php
/**
 * 应用入口
 */

// 应用命名空间
const APP_NAMESPACE = 'App';

// 是否显示错误信息
const SHOW_ERROR = false;

// 是否启用布局功能（默认值：false）
const LAYOUT_ON = true;

// 兼容多平台的目录分隔符
const DS = DIRECTORY_SEPARATOR;

// 引入 MiniFramework 就是这么简单
require dirname(__DIR__) . DS . 'vendor' . DS . 'autoload.php';
require dirname(__DIR__) . DS . 'vendor' . DS . 'jasonweicn' . DS . 'miniframework' . DS . 'Bootstrap.php';
