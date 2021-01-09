MiniFramework Basic Application Template
====================

这是一套基于 MiniFramework 的基础应用模板，开发者可以通过这个模板快速开始构建自己的 Web 应用。


安装
====================

** 1.安装 Composer **

> 如果已经安装好了 Composer 可跳过本节内容。

在 Linux 系统中，全局安装 Composer 的命令如下：

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

> Windows 和 MacOS 系统的开发者可前往 Composer 的官网 [https://getcomposer.org/](https://getcomposer.org/) 下载对应的安装包进行安装。

** 2.通过 Composer 安装 MiniFramework 基础应用模板 **

在命令行执行如下命令：

```
composer create-project --prefer-dist --stability=dev jasonweicn/miniframework-app-basic myapp
```

> 上述命令结尾的 myapp 为要创建的项目目录，可根据实际情况修改。


配置
====================

** 1.配置应用入口文件 **

找到 myapp/Public/index.php 文件，这是应用的入口文件，可在其中定义所需的配置常量，例如：

```
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
```

> 上述代码已经包含在文件中了，最后两行是引入 MiniFramework 框架，通常不需要进行修改即可使用。

** 2.配置站点 **

请将 myapp/Public 目录配置到 Apache 或 Nginx 作为站点的根目录。


运行
====================

完成所有配置后，可尝试通过浏览器访问，例如：

http://你的域名/index.php

如页面显示“Hello World!”内容，那么恭喜你，一个基于 MiniFramework 的应用已经运行起来了。


开源协议
====================

MiniFramework 遵循 `Apache License Version 2.0` 开源协议发布。

协议详细内容请浏览项目目录中的 LICENSE 文件。
