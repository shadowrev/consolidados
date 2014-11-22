<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace L3E\ConsolidadosBundle\EntityRepository;

use Doctrine\ORM\EntityRepository;
/**
 * Description of CursoRepository
 *
 * @author sistemas1
 */
class CursoRepository extends EntityRepository 
{
    
    public function buscarPorCurso($id_curso)
    {
        
    }
    
    public function asignaturasPorPeriodo($id_paquete)
    {
        $sql = "SELECT * FROM asignaturaxexamen axe INNER JOIN asignatura asi "
                . "ON axe.asigidn = asi.asigidn"
                . " WHERE axe.examidn IN ("
                . "SELECT cal.examidn FROM calificacion cal WHERE cal.cal_caliidn = :id_paquete)";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql);
        $resultset->bindValue('id_paquete', $id_paquete);
        $resultset->execute();
        return $resultset->fetchAll();
    }
    
    public function paquetesPorCurso($paquete_curso)
    {
        $sql = "SELECT * FROM v_calificacion WHERE cal_caliidn = :paquete_curso";
        $resultset = $this->getEntityManager()->getConnection()
                ->prepare($sql);
        $resultset->bindValue('paquete_curso', $paquete_curso);
        $resultset->execute();
        return $resultset->fetchAll();
    }
}
