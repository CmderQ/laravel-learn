# laravel-learn

学习laravel对表单进行增删改查操作，版本为laravel5.2。视频来源于慕课网[http://www.imooc.com/learn/699]

# 配置说明

### 1 数据库配置

host ：localhost
port ：3306
usernmae ： root
password： ''

### 2 站点配置

本人在windows下，使用的是Apache，hosts文件下(C:\Windows\System32\drivers\etc\hosts)加入站点设置：127.0.0.1  www.laravel.com  
在Apache的httpd-vhosts.conf中(.\apache\conf\extra)中的配置如下：

--------------------------------  
##www.laravel.com  
<VirtualHost *:80>  
    DocumentRoot "C:/www/laravel/public"  
    ServerName www.laravel.com  
    ErrorLog "logs/dummy-host2.example.com-error.log"  
    CustomLog "logs/dummy-host2.example.com-access.log" common  
</VirtualHost>  
---------------------------------



### 3 代码使用说明

按照1,2步骤配置好后，将代码放到www目录下的新建laravel文件夹中，开启apache，在浏览器中输入http://www.laravel.com/student/index  即可。在这里，需要注意的是，若直接放入www目录下，则在步骤2中， DocumentRoot "C:/www/laravel/public"直接改为"www所在的盘:/www/public"即可
   

   如有什么疑问，可以留言说明。