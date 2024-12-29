use laraveljobportals;
show tables;
select * from jobs;
select * from applicants;
INSERT INTO `jobs` (`title`, `description`, `salary`, `job_type`, `key_skills`, `required_experience`, `created_at`, `updated_at`) 
VALUES
('Software Developer,Kathmandu', 
 'Develop and maintain software applications, collaborate with teams, and write clean, scalable code.',
 100000, 

 'Full-time', 
 'PHP, JavaScript, MySQL, Laravel, React',
 '2',
 NOW(), 
 NOW());
