use laraveljobportals;
show tables;
select * from users;
select * from applicants;
select * from companies;
select * from jobs;

INSERT INTO jobs (title, description, job_type, key_skills, required_experience, salary, deadline, company_id, created_at, updated_at)
VALUES
('Software Developer', 'Develop and maintain software applications.', 'full-time', 'Java, Spring, SQL', 3, 75000.00,'2025-01-04', 1, NOW(), NOW()),
('Data Scientist', 'Analyze and interpret data to help with decision making.', 'part-time', 'Excel, SQL, Python', 2, 40000.00, '2025-01-04', 2, NOW(), NOW());

INSERT INTO companies (name, address, email, phone, url, created_at, updated_at)
VALUES
('Swiggy', 'Banglore, India', 'contact@swiggy.com', '+1 650-253-0000', 'https://www.swiggy.com', NOW(), NOW()),
('Esewa', 'Kathmandu, Nepal', 'contact@esewa.com', '9812345678', 'https://www.esewa.com', NOW(), NOW());


UPDATE jobs SET company_id = (SELECT id FROM companies LIMIT 1) WHERE company_id = 0;

SET SQL_SAFE_UPDATES = 1;

SELECT * FROM Student;

SELECT * FROM jobs WHERE company_id IS NOT NULL AND company_id NOT IN (SELECT id FROM companies);
SELECT id FROM companies;
SELECT * FROM companies;
DELETE FROM jobs WHERE company_id IS NOT NULL AND company_id NOT IN (SELECT id FROM companies);



