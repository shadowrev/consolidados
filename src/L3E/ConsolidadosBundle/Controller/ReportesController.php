<?php

namespace L3E\ConsolidadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ReportesController extends Controller
{
    public function listarColegiosAction()
    {
        
        return $this->render('L3EConsolidadosBundle:Reportes:listarColegios.html.twig', array(
            // ...
        ));    
    }

    public function filtrarColegiosAction()
    {
        if($this->getRequest()->isXmlHttpRequest()) 
        {
            $repo_colegios = $this->getDoctrine()->getRepository('L3EConsolidadosBundle:Colegio');
            $colegios = null;
            if(0 != strcmp($this->getRequest()->get('nombre'), ""))
            {
                if(is_numeric($this->getRequest()->get('nombre')))
                {
                    $colegios = $repo_colegios->buscarDane($this->getRequest()->get('nombre'));
                }
                else
                {
                    $colegios = $repo_colegios->filtrarColegios($this->getRequest()->get('nombre'));
                }
            }
            else
                $colegios = $repo_colegios->obtenerTodosColegios();
            return $this->render('L3EConsolidadosBundle:Reportes:filtrarColegios.html.twig', array(
                    'colegios' => $colegios
                ));    
        }
    }
    
    public function listarCursosAction()
    {
        $repo_colegios = $this->getDoctrine()->getRepository('L3EConsolidadosBundle:Colegio');
        $cursos = null;
        if($this->getRequest()->get('coleidn'))
//            $cursos = $repo_colegios->obtenerCursosCalificacion($this->getRequest()->get('coleidn'));
            $cursos = $repo_colegios->obtenerPaquetesGrados($this->getRequest()->get('coleidn'));
        else
            throw new Exception('Excepcion encontrada');
//        var_dump($cursos);
        return $this->render('L3EConsolidadosBundle:Reportes:listarCursos.html.twig', array(
            'cursos' => $cursos
        ));
    }
    
    public function verMateriasAction()
    {
        $repo_colegios = $this->getDoctrine()->getRepository('L3EConsolidadosBundle:Colegio');
        $repo_cursos = $this->getDoctrine()->getRepository('L3EConsolidadosBundle:Curso');
        
        $asignaturas = $repo_cursos->paquetesPorCurso($this->getRequest()->get('paquete'));
        var_dump($asignaturas);
        $resultado = '<ul>';
        foreach($asignaturas as $asignatura)
        {
            $resultado .= '<li>ping' . '</li>';
        }
        $resultado .= '</ul>';
        return new Response('<html><body>' . '</body></html>');
    }
}
