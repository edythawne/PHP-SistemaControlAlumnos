-- FORD 32
USE Ford32_school;

-- Consulta de Alumnos
SELECT * FROM Alumnos WHERE activo = '1';
SELECT * FROM Tutores;
SELECT * FROM Grupos;
SELECT * FROM DatosAlumno;

SELECT Alumnos.idAlumno, Alumnos.nombre, Alumnos.ape_paterno, Tutores.nombre, Tutores.ape_paterno, Grupos.idGrupo, Grupos.grado, Grupos.grupo FROM Alumnos 
	INNER JOIN Tutores ON Alumnos.fk_tutor = Tutores.idTutor
    INNER JOIN Grupos ON Alumnos.fk_grupo = Grupos.idGrupo
    WHERE Alumnos.sexo = 'F' AND (Grupos.grado = 6 OR Grupos.grado = 1) AND Alumnos.ape_paterno LIKE '%PEREZ%'; 
    
SELECT Grupos.idGrupo, Grupos.grado, ANY_VALUE(Docentes.nombre), ANY_VALUE(Docentes.ape_paterno), ANY_VALUE(Docentes.ape_materno), 
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

SELECT * FROM Grupos WHERE Grupos.grado IN(1, 2, 3, 4, 5, 6) AND Grupos.activo = '1' ;

SELECT CONCAT(Grupos.grado, Grupos.grupo) AS 'Grado', 
	CONCAT(Alumnos.ape_paterno, ' ', `Alumnos`.`ape_materno`, ' ', Alumnos.nombre) AS 'Nombre del Alumno', TiposSangre.tipo AS 'Tipo Sangre' 
    FROM `Alumnos` 
    LEFT JOIN `TiposSangre` ON `Alumnos`.`fk_tipo_sangre` = `TiposSangre`.`idTiposSangre` 
    JOIN `Grupos` ON `Alumnos`.`fk_grupo` = `Grupos`.`idGrupo` 
    WHERE `Alumnos`.`activo` = '1' AND `Grupos`.`activo` = '1' AND `Grupos`.`grado` IN ('1, 2, 3, 4, 5, 6');
    
    SELECT CONCAT(Grupos.grado, Grupos.grupo) AS 'Grado', 
			CONCAT(Alumnos.ape_paterno, ' ', `Alumnos`.`ape_materno`, ' ', Alumnos.nombre) AS 'Nombre del Alumno', 
            TiposSangre.tipo AS 'Tipo Sangre' FROM `Alumnos` 
            LEFT JOIN `TiposSangre` ON `TiposSangre`.`idTiposSangre` = `Alumnos`.`fk_tipo_sangre` 
            LEFT JOIN `Grupos` ON `Alumnos`.`fk_grupo` = `Grupos`.`idGrupo` 
            WHERE `Alumnos`.`activo` = '1' AND `Grupos`.`activo` = '1' AND `Grupos`.`grado` IN ('1, 2, 3, 4, 5, 6');
            
SELECT CONCAT(Grupos.grado, Grupos.grupo) AS 'Grado', CONCAT(`Alumnos`.`ape_paterno`, ' ', `Alumnos`.`ape_materno`, ' ', Alumnos.nombre) AS 'Nombre del Alumno' 
	FROM `Alumnos` 
    JOIN `Grupos` ON `Alumnos`.`fk_grupo` = `Grupos`.`idGrupo` 
    WHERE `Alumnos`.`activo` = '1' AND `Grupos`.`activo` = '1' AND `Grupos`.`grado` IN (1, 2, 3, 4, 5, 6);

-- SELECT @@sql_mode;
-- SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));

-- CALCULAR EDADES
SELECT TIMESTAMPDIFF(YEAR, Alumnos.fec_nacimiento, NOW()) FROM Alumnos;

-- Ordenar los grupos
SELECT CONCAT(ANY_VALUE(Grupos.grado), Grupos.grupo) AS 'Grado', CONCAT(ANY_VALUE(Alumnos.ape_paterno), ' ', ANY_VALUE(`Alumnos`.`ape_materno`), ' ', ANY_VALUE(Alumnos.nombre)) AS 'Nombre del Alumno', 
	ANY_VALUE(`Alumnos`.`curp`) AS `CURP`, CONCAT(ANY_VALUE(Tutores.ape_paterno), ' ', ANY_VALUE(`Tutores`.`ape_materno`), ' ', ANY_VALUE(Tutores.nombre)) AS 'Nombre del Tutor' 
    FROM `Alumnos` 
    LEFT JOIN `Tutores` ON `Alumnos`.`fk_tutor` = `Tutores`.`idTutor` 
    LEFT JOIN `Grupos` ON `Alumnos`.`fk_grupo` = `Grupos`.`idGrupo` 
    WHERE `Alumnos`.`activo` = '1' AND `Grupos`.`activo` = '1' AND `Grupos`.`grado` IN (1, 2, 3, 4, 5, 6) AND `Alumnos`.`sexo` IN ('F', 'M') 
    GROUP BY `Grupos`.`grupo`
    ORDER BY `Alumnos`.`ape_paterno` ASC, `Alumnos`.`ape_materno` ASC, `Alumnos`.`nombre`;
