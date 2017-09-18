# vkphp
从零开始写一个php框架

# 安装使用
1、搭建php运行环境，apache/nginx + php + mysql。  

2、利用navicat等工具连接到本地mysql数据库，创建数据库vkphp，字符集选择`utf8 -- UTF-8 Unicode`，排序方式选择 `utf8_general_ci`。

3、导入vkphp项目中的vkphp.sql文件。

4、更改app/smarty/templates_c文件夹权限。
```
cd app/smarty/
chmod -R 777 templates_c
```

# 参考教程
[从零开始打造自己的PHP框架](http://www.imooc.com/learn/696)   

[从零开始打造自己的PHP框架——第0章](http://www.voidking.com/2017/08/27/deve-vkphp-0/)   

[从零开始打造自己的PHP框架——第1章](http://www.voidking.com/2017/08/29/deve-vkphp-1/)

[从零开始打造自己的PHP框架——第2章](http://www.voidking.com/2017/08/30/deve-vkphp-2/)
