use laraveljobportals;
show tables;
select * from jobs;
select * from applicants;
INSERT INTO `jobs` (`title`, `description`, `salary`, `job_type`, `key_skills`, `required_experience`, deadline , `created_at`, `updated_at`) 
VALUES
('Senior Software Engineer,Kathmandu', 
 'Develop and maintain software applications, collaborate with teams, and write clean, scalable code.',
 80000, 
 'Full-time', 
 'MERN,PostgresSQL,React',
 '4',
  '2025-01-10',
 NOW(), 
 NOW());
