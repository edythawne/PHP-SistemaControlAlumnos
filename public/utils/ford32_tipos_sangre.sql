-- FORD 32
USE Ford32_school;

-- INSERT 
INSERT INTO TiposSangre VALUES
	(1, 'Ninguno', 'Ninguno'),
	(2, 'O Positivo', 'RHO+'),
    (3, 'O Negativo', 'RHO-'),
    (4, 'A Positivo', 'RHA+'),
    (5, 'A Negativo', 'RHA-'),
	(6, 'B Positivo', 'RHB+'),
    (7, 'B Negativo', 'RHB-'),
    (8, 'AB Positivo', 'RHAB+'),
    (9, 'AB Negativo', 'RHAB-');

-- CONSULTA
SELECT * FROM TiposSangre;