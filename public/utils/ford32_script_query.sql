-- FORD 32
USE Ford32_school;

-- Consulta de Alumnos
SELECT * FROM Alumntos WHERE activo = '1';
SELECT * FROM Tutores;
SELECT * FROM Grupos;

SELECT Alumnos.idAlumno, Alumnos.nombre, Alumnos.apellidos, Tutores.nombre, Tutores.apellidos, Grupos.idGrupo, Grupos.grado, Grupos.grupo FROM Alumnos 
	INNER JOIN Tutores ON Alumnos.fk_tutor = Tutores.idTutor
    INNER JOIN Grupos ON Alumnos.fk_grupo = Grupos.idGrupo
    WHERE Alumnos.sexo = 'F' AND (Grupos.grado = 6 OR Grupos.grado = 1) AND Alumnos.apellidos LIKE '%PEREZ%'; 
    
SELECT Grupos.idGrupo, Grupos.grado, Docentes.nombre, Docentes.ape_paterno, Docentes.ape_materno, 
	Grupos.grupo, COUNT(CASE WHEN Alumnos.sexo='M' THEN 1 END) AS hombres, 
	COUNT(CASE WHEN Alumnos.sexo='F' THEN 1 END) AS mujeres, COUNT(*) AS 'alumnos' 
	FROM Alumnos
    INNER JOIN Grupos ON Alumnos.fk_grupo = Grupos.idGrupo
    INNER JOIN DocGrup ON Grupos.idGrupo = DocGrup.fkd_grupo
	INNER JOIN Docentes ON DocGrup.fk_docente = Docentes.idDocente
	WHERE Alumnos.activo = '1' AND Grupos.activo = '1' GROUP BY Grupos.idGrupo;

SELECT (SELECT COUNT(idAlumno) FROM Alumnos WHERE activo = '1') AS Total, 
	(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'M' AND activo = '1') AS Hombre,
	(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'F' AND activo = '1') AS Mujeres;
