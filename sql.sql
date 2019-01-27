USE ic_academico;
SET SQL_SAFE_UPDATES = 0;

SELECT * FROM noticias ORDER BY created_at ASC LIMIT 4;

DELETE  FROM noticias WHERE titulo IS NULL;
SELECT * FROM noticias;
