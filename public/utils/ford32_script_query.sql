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
    
SELECT Grupos.idGrupo, Grupos.grado, Grupos.grupo, COUNT(sexo), Alumnos.sexo, COUNT(*) AS 'mujeres' FROM Alumnos
    INNER JOIN Grupos ON Alumnos.fk_grupo = Grupos.idGrupo
	WHERE Alumnos.activo = '1' AND Grupos.activo = '1' AND Alumnos.sexo = 'M' GROUP BY Grupos.idGrupo;

SELECT (SELECT COUNT(idAlumno) FROM Alumnos WHERE activo = '1') AS Total, 
	(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'M' AND activo = '1') AS Hombre,
	(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'F' AND activo = '1') AS Mujeres;
