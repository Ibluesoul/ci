# ci
写的时候windows和mac LF和CRLF似乎各种冲突,代码换行缩进有点奇怪,不是大问题.主要我对于git的LF,CRLF互相转换设置的方面没有研究过

application/config/config.php 的 $config['base_url'] 值设置成你自己的域名

application/config/database.php 修改成你自己的mysql设置

public/ci.sql 是数据库文件,导入就行