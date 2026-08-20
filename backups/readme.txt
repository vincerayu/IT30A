C:\Dev\IT30A\backups

1.CREATE DATABASE <database_name>;
2. SHOW DATABASES;
3.CONNECT <database_name>;
4. CREATE TABLE <table_name_in_plural> ();
5. INSERT UINTI <table_name_in_plural>
   (columns)
   VALUES(values);

6. ALTER TABLES srtudents ADD COLUMN student_created_at TIMESTAMP NULL DEFAULT NULL;
7.DESCRIBE students;
8. UPDATE students SET student_created_at = CURRENT_TIMESTAMP WHERE student_created_at IS NULL;
9.ALTER TABLE students MODIFY COLUMN student_created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;

ulitily commands:
\! cls
mysqldump -u root -p --databases library_db > C:\Dev\IT30A\backups\08182026_library_db.sql

mysqldump -u root -p --databases library_db > C:\Dev\IT30A\backups\%date:~-4%_%date:~4,2%_%date:~7,2%_%time:~0,2%_%time:~3,2%_%time:~6,2%_library_db.sql"

%date:~-4%_
%date:~4,2%_
%date:~7,2%_
%time:~0,2%_
%time:~3,2%_
%time:~6,2%_
library_db.sql"
