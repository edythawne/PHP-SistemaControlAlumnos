<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class AlumnoModel extends Model {
    // Database Variable
    protected $database;

    // Helper
    protected $helpers = ['json, logger'];


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
     * Obtiene algunos datos del director
     * @return mixed
     */
    public function getDirector(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_docentes);
        $builder -> select("idDocente, CONCAT(nombre, ' ',  ape_paterno, ' ',  ape_materno) AS Director");
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
        $builder -> select("Grupos.idGrupo AS id_grupo, Grupos.grado AS grado, Grupos.grupo AS grupo, "
            ."CONCAT(ANY_VALUE(Docentes.nombre), ' ', ANY_VALUE(Docentes.ape_paterno), ' ', ANY_VALUE(Docentes.ape_materno)) AS docente, "
            ."COUNT(CASE WHEN Alumnos.sexo='M' THEN 1 END) AS num_hombres, "
            ."COUNT(CASE WHEN Alumnos.sexo='F' THEN 1 END) AS num_mujeres, "
            ."COUNT(*) total_alumnos");
        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo);
        $builder -> join($this -> table_docgrup, $this -> docgrup_fkd_grupo_to_grupos_idgrupo);
        $builder -> join($this -> table_docentes, $this-> docentes_iddocente_to_docgrup_fk_docente);
        $builder -> where($this -> alumno_activo);
        $builder -> where($this -> grupo_activo);
        $builder -> groupBy("Grupos.idGrupo");

        $data = $builder -> get() -> getResultArray();

        $this -> disconnect();
        return arrayToJson($data);
    }

    /**
     * Obtener los alumnos del Grado
     * @param $id_grupo
     * @return false|string
     */
    public function getAlumnosGrado($id_grupo){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_alumno);
        $builder -> select("CONCAT(Grupos.grado, Grupos.grupo) AS Grupo,"
            ."Alumnos.idAlumno AS IdAlumno, Alumnos.nombre AS 'Nombre', Alumnos.ape_paterno AS 'Apellido Paterno', "
            ."Alumnos.ape_materno AS 'Apellido Materno', Alumnos.curp AS 'CURP' ");
        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo, $this->join_left);
        $builder -> where($this -> alumno_activo);
        $builder -> where($this -> grupo_activo);
        $builder -> where('Grupos.idGrupo = '.$id_grupo);

        $data = $builder -> get() -> getResultArray();

        $this -> disconnect();
        return arrayToJson($data);
    }

    public function getIDGradoGrupo(){
        $this -> connect();

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_grupo);
        $builder -> select("Grupos.idGrupo AS id_grupo, Grupos.grado AS grado, Grupos.grupo AS grupo");
        $builder -> where($this -> grupo_activo);

        //console_log($builder->getCompiledSelect());
        $data = $builder -> get() -> getResultArray();

        $this -> disconnect();
        return arrayToJson($data);
    }

    /**
     * Construccion de un Query desde la interfaz
     * @param $params
     * @return false|string
     */
    public function buildQueryReport($params){
        $this -> connect();

        // Variables extras
        $data = [];

        // SQL Sentences
        $builder = $this -> database -> table($this -> table_alumno);
        $builder -> select($params['campos']);

        if (strpos($params['campos'], $this -> table_tutores)){
            $builder -> join($this -> table_tutores, $this -> tutores_idtutor_to_alumno_fk_tutor, $this -> join_left);
        }

        if (strpos($params['campos'], $this -> table_tiposangre)){
            $builder -> join($this -> table_tiposangre, $this -> tiposangre_idtipossangre_to_alumno_fk_tipo_sangre, $this -> join_left);
        }

        if (strpos($params['campos'], $this -> table_datosalumno)){
            $builder -> join($this -> table_datosalumno, $this -> datosalumno_iddatoalumno_to_alumno_fk_dato_alumno, $this -> join_left);
        }

        $builder -> join($this -> table_grupo, $this -> grupos_idgrupo_to_alumno_fk_grupo, $this -> join_left);
        $builder -> where($this -> alumno_activo);
        $builder -> where($this -> grupo_activo);

        if (!empty($params['grupos'])){
            $builder -> where("Grupos.grado IN (".$params['grupos'].")");
        }

        if (!empty($params['sexo'])){
            $builder -> where("Alumnos.sexo IN (".$params['sexo'].")");
        }

        $builder -> orderBy('Grupos.grado ASC, Grupos.grupo ASC, Alumnos.ape_paterno ASC, Alumnos.ape_materno ASC, Alumnos.nombre');
        $data['data'] = $builder -> get() -> getResultArray();

        $this -> disconnect();
        return arrayToJson($data);
    }

    /**
     * Conectar a la Base de Datos
     */
    private function connect(){
        $this -> database = Database::connect();
    }

    /**
     * Desconectar la base de datos
     */
    private function disconnect(){
        $this -> database -> close();
    }

    /**
     * Algunos comentarios
     * print_r($builder->getCompiledSelect());
     * print_r($builder -> get() -> getResultArray());
     * $data['sql'] = $builder->getCompiledSelect();
     * $data['fields'] = $builder -> get() -> getFieldNames();
     */
}
