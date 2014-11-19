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
    public function obtenerCursosCalificacion($id_colegio)
    {
        $sql_consulta = "SELECT * FROM v_salones vs"
                . " WHERE vs.cal_caliidn IN ("
                . "SELECT vc.caliidn FROM v_paquetes vc"
                . " WHERE vc.coleidn = :id_colegio)";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql_consulta);
        $resultset->bindValue('id_colegio', $id_colegio);
        $resultset->execute();
        return $resultset->fetchAll();
    }
}
