<?php

namespace L3E\ConsolidadosBundle\EntityRepository;

use Doctrine\ORM\EntityRepository;
/**
 * Description of ColegioRepository
 *
 * @author sistemas1
 */
class ColegioRepository extends EntityRepository
{
    /**
     * Obtiene los colegios por su nombre
     * @param type $nombre_colegio
     * @return type Lista de colegios
     */
    public function filtrarColegios($nombre_colegio)
    {
        $sql_colegios = "SELECT * FROM colegio co WHERE co.coledescripv ILIKE :nombre_colegio";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql_colegios);
        $resultset->bindValue('nombre_colegio', '%'.$nombre_colegio.'%');
        $resultset->execute();
        return $resultset->fetchAll();
    }
    
    public function buscarDane($codigo_dane)
    {
        $sql_colegios = "SELECT * FROM colegio co WHERE co.colecoddanen = :codigo_dane";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql_colegios);
        $resultset->bindValue('codigo_dane', $codigo_dane);
        $resultset->execute();
        return $resultset->fetchAll();
    }
    
    /**
     * Obtiene todos los colegios registrados en el sistema
     * @return type Lista de colegios
     */
    public function obtenerTodosColegios()
    {
        $sql_colegios = "SELECT * FROM colegio co";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql_colegios);
        $resultset->execute();
        return $resultset->fetchAll();
    }
    
    /**
     * Obtiene los cursos registrados en un colegio
     * @param type $id_colegio Identificador del colegio
     * @return type Lista de cursos
     */
    public function obtenerPaquetesGrados($id_colegio)
    {
        $sql_consulta = "SELECT caliidn, curso_cursdescripv, distnombrev, coledescripv, califechad, usuaidn, coleidn, distidn, califechadxano"
                . " FROM v_paquetes vp"
                . " WHERE vp.coleidn = :id_colegio"
                . " ORDER BY caliidn";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql_consulta);
        $resultset->bindValue('id_colegio', $id_colegio);
        $resultset->execute();
        return $resultset->fetchAll();
    }
    
    public function obtenerCursosCalificacion($id_curso)
    {
        $sql_consulta = "SELECT vs.caliidn, vs.curso_cursdescripv, vs.usuaidn, vs.califechad, vs.cal_caliidn, vs.nalumnos, vs.califica_jornada "
                . "FROM v_salones vs "
                . "WHERE vs.cal_caliidn = :id_curso "
                . "ORDER BY vs.califechad, vs.curso_cursdescripv";
        $resultset = $this->getEntityManager()->getConnection()
//                ->executeQuery($sql_consulta, array($caliidn_arr), array(\Doctrine\DBAL\Connection::PARAM_INT_ARRAY));
                ->prepare($sql_consulta);
        $resultset->bindValue('id_curso', $id_curso);
        $resultset->execute();
        return $resultset->fetchAll();
    }
}
