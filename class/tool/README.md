---
sort: -1
---

# 工具

[在线SQL解析器](../../SQL-GUI/index.html)

安装说明

* 程序[下载](../../assets/file/SQL-GUI.zip)解压到文件夹(如:SQL-GUI)
* 工具运行需要Web服务器的支持, 有很多服务器可供选择, 如: apache, nginx, tomcat, iis, python等
    * Python
        * 使用命令行 ```cd SQL-GUI``` 切换路径到```SQL-GUI```目录下
        * 使用命令```python3 -m http.server 8000```启动Python语言自带的http服务器
        * 打开浏览器访问 ```http://localhost:8000```
    * apache, nginx, tomcat, iis
        * 只需要将SQL-GUI文件夹复制到服务器的主目录下, 启动服务器即可访问