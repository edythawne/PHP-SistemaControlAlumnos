-- FORD 32
USE Ford32_school;

-- INSERT
INSERT INTO Grupos(idGrupo, grado, grupo, activo) VALUES
	(1, '1', 'A', '1'),
    (2, '1', 'B', '0'),
    (3, '2', 'A', '1'),
    (4, '2', 'B', '0'),
    (5, '3', 'A', '1'),
    (6, '3', 'B', '0'),
    (7, '4', 'A', '1'),
	(8, '4', 'B', '1'),
    (9, '5', 'A', '1'),
	(10, '5', 'B', '0'),
    (11, '6', 'A', '1'),
	(12, '6', 'B', '0');

INSERT INTO Docentes(idDocente, nombre, ape_paterno, ape_materno, puesto, activo, sexo) VALUES
	(1, 'Hilda Lilia', 'Cortes', 'Campos', 'Docente', '1', 'F'),
    (2, 'Maria de Lourdes', 'Rodriguéz', 'Bocarando', 'Docente', '1', 'F'),
    (3, 'Leoncio', 'Rubio', 'Bernabe', 'Docente', '1', 'M'),
    (4, 'Janeht', 'García', 'Martínez', 'Docente', '1', 'F'),
    (5, 'Antonio', 'Rodriguéz', 'Salomé', 'Docente', '0', 'M'),
    (6, 'Ana Celia', 'Palomino', 'Castillo', 'Docente', '1', 'F'),
    (7, 'Yadira', 'Cano', 'García', 'Docente', '1', 'F'),
    (8, 'Mercedes', 'Bautista', 'Hernández', 'Docente', '1', 'F'),
    (9, 'Víctor Manuel', 'Cerdá', 'Pérez', 'Director', '1', 'M'),
    (10, 'Margarita', 'Izquierdo', 'Clemente', 'Asistente', '1', 'F');

INSERT INTO DocGrup(idDocGrup, fk_docente, fkd_grupo, ciclo_escolar, activo) VALUES
	(1, 1, 1, '2019-2020', '1'),
    (2, 2, 3, '2019-2020', '1'),
    (3, 3, 5, '2019-2020', '1'),
    (4, 4, 7, '2019-2020', '1'),
    (5, 4, 8, '2019-2020', '1'),
    (6, 6, 9, '2019-2020', '1'),
    (7, 7, 11, '2019-2020', '1');

-- SELECT
SELECT * FROM Grupos;
SELECT * FROM Docentes;
SELECT * FROM DocGrup;