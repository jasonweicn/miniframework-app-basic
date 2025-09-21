MiniFramework Basic Application Template
========================================

这是一套基于 MiniFramework 的基础应用模板，开发者可以通过这个模板快速开始构建自己的 Web 应用。


安装说明
-------

### 1.安装 Composer

> 如果已经安装好了 Composer 可跳过本节内容。

在 Linux 系统中，全局安装 Composer 的命令如下：

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

> Windows 和 MacOS 系统的开发者可前往 Composer 的官网 [https://getcomposer.org/](https://getcomposer.org/) 下载对应的安装包进行安装。

### 2.通过 Composer 安装 MiniFramework 基础应用模板

在命令行执行如下命令：

```
composer create-project --prefer-dist --stability=dev jasonweicn/miniframework-app-basic myapp
```

> 上述命令结尾的 myapp 为要创建的项目目录，可根据实际情况修改。


### 3.配置应用

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

### 4.配置站点

请将 myapp/Public 目录配置到 Apache 或 Nginx 作为站点的根目录。


### 5.运行

完成所有配置后，可尝试通过浏览器访问，例如：

http://你的域名/index.php

如页面显示“Hello World!”内容，那么恭喜你，一个基于 MiniFramework 的应用已经运行起来了。

基于 Docker 部署运行环境
----------------------

本项目提供了完整的 Docker 配置，您可以通过 Docker 快速搭建开发和运行环境，无需手动安装 PHP、Nginx 等组件。

### 1.Docker 环境要求

请确保您的系统已安装 Docker（推荐最新版本）

### 2.部署步骤

进入项目目录

```bash
cd miniframework-app-basic
```

构建镜像并启动容器

```bash
docker compose up -d --build
```

这个命令会：
- 构建 PHP 服务镜像（包含 PHP 7.4、Composer 及必要扩展）
- 拉取 Nginx 稳定版镜像
- 创建并启动两个容器：`miniframework-nginx` 和 `miniframework-php`
- 建立两个容器间的网络连接

### 3.访问应用

容器启动成功后，您可以通过浏览器访问：

```
http://localhost/
```
> 上边的地址也可以是你的服务器 IP 地址（ 例如：http://192.168.1.100/ ）

如果页面显示"Hello World!"内容，说明应用已成功运行。

### 4.查看日志

项目中的日志配置已优化为 Docker 环境，Nginx 访问日志和错误日志输出到标准输出

您可以使用以下命令查看日志：

- 查看所有服务的日志：
  ```bash
  docker compose logs
  ```

- 实时查看日志：
  ```bash
  docker compose logs -f
  ```

### 5.常用 Docker 命令

- 停止容器：
  ```bash
  docker compose down
  ```

- 重启容器：
  ```bash
  docker compose restart
  ```

- 进入 PHP 容器：
  ```bash
  docker exec -it miniframework-php /bin/sh
  ```


开源协议
----------

MiniFramework 遵循 `Apache License Version 2.0` 开源协议发布。

协议详细内容请浏览项目目录中的 LICENSE 文件。
