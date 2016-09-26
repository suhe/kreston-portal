SELECT 
e.name,COUNT(DISTINCT(s.user_id)) AS total_user,
c.competencies,sc.`sub_competencies`,q.id AS NO,q.question,(SUM(a.value)/COUNT(DISTINCT(s.user_id))) AS result,MIN(a.value) AS minx,MAX(a.value) AS maxx
FROM answer a
INNER JOIN survey s ON s.id = a.survey_id
INNER JOIN employee e ON e.id = s.employee_id
INNER JOIN question q ON q.id = a.question_id
INNER JOIN sub_competencies sc ON sc.id = q.sub_id
INNER JOIN competencies c ON c.group_id = sc.comptencies_id
WHERE (SELECT COUNT(aa.id) FROM answer aa WHERE aa.survey_id = a.survey_id) >= 127
GROUP BY q.id, e.name
ORDER BY e.name ASC,q.id ASC
LIMIT 1000000
