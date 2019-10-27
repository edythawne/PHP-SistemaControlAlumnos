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
    protected $table_tiposangre = 'TiposSangre';
    protected $table_tutores = 'Tutores';
    protected $table_datosalumno = 'DatosAlumno';

    // Relation
    protected $grupos_idgrupo_to_alumno_fk_grupo = 'Alumnos.fk_grupo = Grupos.idGrupo';
    protected $tutores_idtutor_to_alumno_fk_tutor = 'Alumnos.fk_tutor = Tutores.idTutor';
    protected $datosalumno_iddatoalumno_to_alumno_fk_dato_alumno = 'Alumnos.fk_dato_alumno = DatosAlumno.idDatoAlumno';
    protected $tiposangre_idtipossangre_to_alumno_fk_tipo_sangre = 'Alumnos.fk_tipo_sangre = TiposSangre.idTiposSangre';
    protected $docgrup_fkd_grupo_to_grupos_idgrupo = 'DocGrup.fkd_grupo = Grupos.idGrupo';
    protected $docentes_iddocente_to_docgrup_fk_docente = 'DocGrup.fk_docente = Docentes.idDocente';

    // Conditial
    protected $grupo_activo = "Grupos.activo = '1' ";
    protected $alumno_activo = "Alumnos.activo = '1' ";
    protected $docente_activo = "Docentes.activo = '1' ";

    protected $grupo_inactivo = "Grupos.activo = '0' ";
    protected $alumno_inactivo = "Alumnos.activo = '0' ";
    protected $docente_inactivo = "Docentes.activo = '0' ";

    // JOIN
    protected $join_left = 'LEFT';
    protected $join_full = 'FULL';

    /**
     * AlumnoModel constructor.
     */
    public function __construct(){

    }

    /**
     * Regresa el numero de hombre y mujeres
     * @return mixed
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
     * @return mixed
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
     * @return mixed
     */
    public function getTodosAlumnosGrados(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this->table_alumno);
        $builder -> select('Alumnos.idAlumno, Alumnos.nombre, Alumnos.ape_paterno, Alumnos.ape_materno, Grupos.grado, Grupos.grupo');
        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo, $this -> join_left);
        $builder -> where($this -> alumno_activo);
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();

        return $query;
    }

    /**
     * Obtiene algunos datos del director
     * @return mixed
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

    /**
     * Obtener la informacion de Grados
     * Docente, Numero de Niños y Niñas
     * @return mixed
     */
    public function getInfGrados(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_alumno);
        $builder -> select("Grupos.idGrupo, Grupos.grado, ANY_VALUE(Docentes.nombre), ANY_VALUE(Docentes.ape_paterno), "
            ."ANY_VALUE(Docentes.ape_materno), "
            ."Grupos.grupo, COUNT(CASE WHEN Alumnos.sexo='M' THEN 1 END) AS hombres, "
            ."COUNT(CASE WHEN Alumnos.sexo='F' THEN 1 END) AS mujeres, COUNT(*) AS alumnos");
        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo, $this -> join_left);
        $builder -> join($this -> table_docgrup, $this -> docgrup_fkd_grupo_to_grupos_idgrupo, $this -> join_left);
        $builder -> join($this -> table_docentes, $this->docentes_iddocente_to_docgrup_fk_docente, $this -> join_left);
        $builder -> where($this -> alumno_activo);
        $builder -> where($this -> grupo_activo);
        $builder -> groupBy("Grupos.idGrupo");
        $query = $builder -> get() -> getResultArray();

        $this -> disconnect();
        return $query;
    }

    public function buildQueryReport($params, $grupos){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_alumno);
        $builder -> select($params);

        if (strpos($params, $this -> table_tutores)){
            $builder -> join($this -> table_tutores, $this -> tutores_idtutor_to_alumno_fk_tutor, $this -> join_left);
        }

        if (strpos($params, $this -> table_tiposangre)){
            $builder -> join($this -> table_tiposangre, $this -> tiposangre_idtipossangre_to_alumno_fk_tipo_sangre, $this -> join_left);
        }

        if (strpos($params, $this -> table_datosalumno)){
            $builder -> join($this -> table_datosalumno, $this -> datosalumno_iddatoalumno_to_alumno_fk_dato_alumno, $this -> join_left);
        }

        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo, $this -> join_left);
        $builder -> where($this -> alumno_activo);
        $builder -> where($this -> grupo_activo);

        if (!empty($grupos)){
            $builder -> where("Grupos.grado IN (".$grupos.")");
        }

        //print_r($builder->getCompiledSelect());
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
