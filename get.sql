SELECT CONCAT_WS(' ', students.last_name, students.middle_name, students.first_name) as student, CONCAT_WS(' ', guardians.last_name, guardians.middle_name, guardians.first_name) as guardian, contacts.mobile as guardian_contact, student_fathers.name as father, student_fathers.phone as father_phone, student_mothers.name as mother, student_mothers.phone as mother_phone
FROM `students`
INNER JOIN student_fathers ON student_fathers.student_id = students.id
INNER JOIN student_mothers ON student_mothers.student_id = students.id
INNER JOIN guardians ON guardians.id = students.guardian_id
INNER JOIN contacts ON contacts.contactable_id = guardians.id && contacts.contactable_type = 'guardian'
WHERE 1
