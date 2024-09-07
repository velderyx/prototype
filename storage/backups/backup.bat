@echo off
for /f "tokens=2 delims==" %%I in ('"wmic os get localdatetime /value"') do set datetime=%%I
set year=%datetime:~0,4%
set month=%datetime:~4,2%
set day=%datetime:~6,2%
set hour=%datetime:~8,2%
set minute=%datetime:~10,2%
set second=%datetime:~12,2%
set TIMESTAMP=%day%-%month%-%year%_%hour%-%minute%-%second%

set BACKUP_PATH=C:\xampp\htdocs\prototype\storage\backups
set MYSQL_PATH=C:\xampp\mysql\bin
set DB_USER=root
set DB_NAME=prototype

"%MYSQL_PATH%\mysqldump.exe" -u %DB_USER% %DB_NAME% > "%BACKUP_PATH%\%DB_NAME%_%TIMESTAMP%.sql"
