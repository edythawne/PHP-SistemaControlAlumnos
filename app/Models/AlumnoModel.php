<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class AlumnoModel extends Model {
    // Database Variable
    protected $database;

    // Table Database
    protected $table_alumno = 'Alumnos';
    protected $table_grupo = 'Grupos';
    protected $table_docentes = 'Docentes';
    protected $table_docgrup = 'DocGrup';

    // Relation
    protected $grupos_idgrupo_to_alumno_fk_grupo = 'Alumnos.fk_grupo = Grupos.idGrupo';
    protected $docgrup_fkd_grupo_to_grupos_idgrupo = 'Grupos.idGrupo = DocGrup.fkd_grupo';
    protected $docentes_iddocente_to_docgrup_fk_docente = 'DocGrup.fk_docente = Docentes.idDocente';

    // Conditial
    protected $grupo_activo = "Grupos.activo = '1' ";
    protected $alumno_activo = "Alumnos.activo = '1' ";
    protected $docente_activo = "Docentes.activo = '1' ";

    protected $grupo_inactivo = "Grupos.activo = '0' ";
    protected $alumno_inactivo = "Alumnos.activo = '0' ";
    protected $docente_inactivo = "Docentes.activo = '0' ";



    /**
     * AlumnoModel constructor.
     */
    public function __construct(){

    }

    /**
     * Regresa el numero de hombre y mujeres
     */
    public function getNumeroAlumnos(){
        $this -> connect();

        // SQL Sentences Builder
        $builder = $this -> database -> query("SELECT (SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'M' AND activo = '1') AS hombres, "
            ."(SELECT COUNT(sexo) FROM Alumnos WHERE sexo = 'F' AND activo = '1') AS mujeres, "
            ."(SELECT COUNT(idAlumno) FROM Alumnos WHERE activo = '1') AS total");
        $query = $builder -> getRowArray();
        $this -> disconnect();

        return $query;
    }

    /**
     * Obtener todos los estudiantes
     */
    public function getTodosAlumnos(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_alumno);
        $builder -> select('idAlumno, nombre, ape_paterno, ape_materno');
        $builder -> where($this -> alumno_activo);
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();

        return $query;
    }

    /**
     * Obtener todos los estudiantes
     */
    public function getTodosAlumnosGrados(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this->table_alumno);
        $builder -> select('Alumnos.idAlumno, Alumnos.nombre, Alumnos.ape_paterno, Alumnos.ape_materno, Grupos.grado, Grupos.grupo');
        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo);
        $builder -> where($this -> alumno_activo);
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
        $builder = $this -> database -> table($this -> table_docentes);
        $builder -> select('idDocente, nombre, ape_paterno, ape_materno');
        $builder -> where($this -> docente_activo);
        $builder -> where("puesto = 'Director'");
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();
        return $query;
    }


    public function getInfGrados(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_alumno);
        $builder -> select("Grupos.idGrupo, Grupos.grado, Docentes.nombre, Docentes.ape_paterno, Docentes.ape_materno, "
            ."Grupos.grupo, COUNT(CASE WHEN Alumnos.sexo='M' THEN 1 END) AS hombres, "
            ."COUNT(CASE WHEN Alumnos.sexo='F' THEN 1 END) AS mujeres, COUNT(*) AS alumnos");
        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo);
        $builder -> join($this -> table_docgrup, $this -> docgrup_fkd_grupo_to_grupos_idgrupo);
        $builder -> join($this -> table_docentes, $this->docentes_iddocente_to_docgrup_fk_docente);
        $builder -> where($this -> alumno_activo);
        $builder -> where($this -> grupo_activo);
        $builder -> groupBy("Grupos.idGrupo");
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
