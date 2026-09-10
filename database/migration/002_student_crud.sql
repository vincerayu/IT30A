-- student query #1
SELECT * FROM students;

-- student query #2 select students order by id ASC
SELECT * FROM students
  ORDER BY student_id ASC;

  -- student query #3 select students order by id DESC
SELECT * FROM students
  ORDER BY student_last_name ASC;

 -- student query #4 select students order by student_last_name ASC
SELECT * FROM students
  ORDER BY student_last_name ASC;

 -- student query #4 selct students order by student_last_name ASC
SELECT 

 student_last_name, 
 student_first_name
 
FROM students  
  ORDER BY student_last_name ASC;

 -- student query #5 selct students order by student_last_name DESC
SELECT 
  student_first_name,
  student_last_name,
  student_first_name
FROM students
ORDER BY student_last_name DESC;

-- student query #6 selct students order by student_last_name ASC
SELECT 
 student_last_name,
 student_first_name
FROM students  
  ORDER BY student_first_name ASC;


-- student query #7 selct students order by student_first_name DESC
SELECT 
 student_first_name,
 student_last_name
FROM students  
  ORDER BY student_first_name DESC;

-- student query #8 selct students with specific id number
SELECT 
 student_first_name,
 student_last_name
FROM students  
WHERE student_id = 1
LIMIT 1;


-- student query #9 update student first name , last name using specific id 
UPDATE students
SET 
   student_first_name = "RYU"
   student_last_name = "LEYSON"
WHERE student_id = 1;
