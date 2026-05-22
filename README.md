## CT275: CÔNG NGHỆ WEB - LAB 2

Học kỳ 3, Năm học: 2025-2026

**Họ tên**: ...

**MSSV**: ...

**Lớp HP**: ...



## Triển khai trên nginx

```
# D:/Servers/nginx/conf/nginx.conf

server {
	listen       80;
	server_name  ct275-lab2.localhost;

	root "D:/mysites/lab2/public";
	index index.php;

	charset utf-8;

	location / {
		try_files $uri $uri/ =404;
	}

	location ~ \.php$ {
		fastcgi_pass   127.0.0.1:9000;
		include        fastcgi_params;
		fastcgi_param  SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
	}

	location ~ /\.(?!well-known).* {
		deny all;
	}
}
```
