-------Installation Guide--------

1) Unzip the files into your server directory (/htdocs in case of XAMPP). Place the files in a folder say "easy-sql".

2) Open the url - http://localhost/easy-sql/ (which will automatically redirect to http://localhost/easy-sql/login.php)

3) Login with MySQL login details. (Login are directly handled by MYSQL server)
	For eg- Default MySQL Login:
		Host='localhost'
		user='root'
		password='' (no password)
			
4) Visit: http://easy-sql.cu.cc for more info.

------Note for developers-------

*conn.php : contains the connection file

*db.php : contains operations related to database (Creating, drop, show)

*table-editor.php : Table Editor file. It contains all table editing functions - drop, describe, rename, show/edit/delete and insert.

*parser.php : SQL PARSER (For executing sql queries in mysql) + sql help

*user.php: User management 

*login.php: MySQL login (to establish connection)

*logout.php: To sign out of MySQL

*index.php: The home page of EasySQL

*create-table.php: To create new table