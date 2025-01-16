## CT275: CÔNG NGHỆ WEB - LAB 2

Học kỳ 2, Năm học: 2024-2025

**Họ tên**: ...

**MSSV**: ...

**Lớp HP**: ...



## Triển khai trên Apache HTTP

```
# C:/xampp/apache/conf/extra/httpd-vhosts.conf

<VirtualHost *:80>	
    DocumentRoot "C:/xampp/htdocs" 
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>	
    DocumentRoot "D:/mysites/lab2/public"
    ServerName ct275-lab2.localhost
    # Set access permission 
    <Directory "D:/mysites/lab2/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

