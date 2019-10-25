-- FORD 32
USE Ford32_school;

-- Consulta de Alumnos
SELECT * FROM Alumnos WHERE activo = '1';
SELECT * FROM Tutores;
SELECT * FROM Grupos;

SELECT Alumnos.idAlumno, Alumnos.nombre, Alumnos.apellidos, Tutores.nombre, Tutores.apellidos, Grupos.idGrupo, Grupos.grado, Grupos.grupo FROM Alumnos 
	INNER JOIN Tutores ON Alumnos.fk_tutor = Tutores.idTutor
    INNER JOIN Grupos ON Alumnos.fk_grupo = Grupos.idGrupo
    WHERE Alumnos.sexo = 'F' AND (Grupos.grado = 6 OR Grupos.grado = 1) AND Alumnos.apellidos LIKE '%PEREZ%'; 
    
SELECT sexo, COUNT(*) AS 'Total' FROM Alumnos WHERE activo = '1' GROUP BY sexo;

SELECT (SELECT COUNT(idAlumno) FROM Alumnos WHERE activo = '1') AS Total, 
	(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'M' AND activo = '1') AS Hombre,
	(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'F' AND activo = '1') AS Mujeres;
