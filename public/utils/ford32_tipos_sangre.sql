-- FORD 32
USE Ford32_school;

-- INSERT 
INSERT INTO TiposSangre VALUES
	(1, 'O Positivo', 'RHO+'),
    (2, 'O Negativo', 'RHO-'),
    (3, 'A Positivo', 'RHA+'),
    (4, 'A Negativo', 'RHA-'),
	(5, 'B Positivo', 'RHB+'),
    (6, 'B Negativo', 'RHB-'),
    (7, 'AB Positivo', 'RHAB+'),
    (8, 'AB Negativo', 'RHAB-');

-- CONSULTA
SELECT * FROM TiposSangre;