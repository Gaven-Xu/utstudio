
<!-- TOC -->

- [1. 项目文档](#1-项目文档)
    - [1.1. 产品](#11-产品)
    - [1.2. 文件夹说明](#12-文件夹说明)
    - [1.3. git分支说明](#13-git分支说明)
- [2. 更新日志](#2-更新日志)

<!-- /TOC -->

# 1. 项目文档

## 1.1. 产品 

pc 单独一套

h5

## 1.2. 文件夹说明

scss 样式表目录，其中，各页面单独建立文件夹。

    文件夹名不要出现大写字母，不要(-)以外的特殊符号，不要数字开头，不要单字母

script ji脚本文件夹，命名规则同scss

parts php分页面和**页面组件**

    页面组件：可以方便复用的php代码块，比如弹窗

## 1.3. git分支说明

master 默认开发分支，自测没有问题之后，push，各人修改个人自己的部分

stable 稳定上线版本，由项目负责人确认测试没有问题之后，部署到服务器

# 2. 更新日志

**2017-09-21 10:48:02**

    徐佳程：基本的文件配置和文件格式说明

**2017-09-21 10:47:27**

    徐佳程：完成了本项目gulp工程化配置，开发之前，在UCAI项目目录下，执行gulp命令即可开启scss监听编译

> gulp scss 任务。进行一次scss文件的编译。scss任务对scss文件进行了缓存对比，没有修改的文件不会编译

> gulp css:clean 任务。完全清除css目录，谨慎使用

> gulp scss:watch 任务。开启scss文件监听

> gulp 任务。先执行scss，然后开启scss:watch，然后输出提示信息