<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class AlumnoModel extends Model {
    // Database Variable
    protected $database;

    // Table DataBase
    protected $table_alumno = 'Alumnos';
    protected $table_grupo = 'Grupos';

    /**
     * AlumnoModel constructor.
     */
    public function __construct(){

    }

    /**
     * Regresa el numero de hombre y mujeres
     */
    public function getNumbersStudents(){
        $this -> connect();

        // SQL Sentences Builder
        $statement = "SELECT (SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'M' AND activo = '1') AS Hombres,
            (SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'F' AND activo = '1') AS Mujeres,
            (SELECT COUNT(idAlumno) FROM Alumnos WHERE activo = '1') AS Total";
        $query = $this -> database -> query($statement);
        $result = $query -> getRowArray();

        $this -> disconnect();

        return $result;
    }

    /**
     * Obtener todos los estudiantes
     */
    public function getAllStudents(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table('Alumnos');
        $builder -> select('idAlumno, nombre, ape_paterno, ape_materno');
        $builder -> where("activo = '1'");
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();

        return $query;
    }

    /**
     * Obtener todos los estudiantes
     */
    public function getAllStudentsGrade(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table('Alumnos');
        $builder -> select('Alumnos.idAlumno, Alumnos.nombre, Alumnos.ape_paterno, Alumnos.ape_materno, Grupos.grado, Grupos.grupo');
        $builder -> join('Grupos', 'Grupos.idGrupo = Alumnos.fk_grupo');
        $builder -> where("Alumnos.activo = '1'");
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();

        return $query;
    }

    /**
     * Obtiene algunos datos del director
     */
    public function getDirector(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table('Docentes');
        $builder -> select('idDocente, nombre, ape_paterno, ape_materno');
        $builder -> where("activo = '1'");
        $builder -> where("puesto = 'Director'");
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();

        return $query;
    }

    /**
     * Conectar a la Base de Datos
     */
    private function connect(){
        $this -> database = Database::connect();
    }

    private function disconnect(){
        $this -> database -> close();
    }
}
