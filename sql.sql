USE ic_academico;
SET SQL_SAFE_UPDATES = 0;

DELETE  FROM noticias WHERE titulo IS NULL;
SELECT * FROM noticias;
