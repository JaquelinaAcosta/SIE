<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\Persona;
use AppBundle\Entity\MesaEntrada;

class ConfigController extends Controller {
 
    /**
     * @Route("/config_inicial", name="generar_dependencia")
     */
    public function generarDependenciaAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $assetPath = $this->get('kernel')->getProjectDir() . "/web/config_inicial/";

        $dependenciasFile = file_get_contents($assetPath . "dependencia.json");
        $dependenciasArray = json_decode($dependenciasFile, true);

//        //GENERACION DE LAS DEPENDENCIAS
        for ($i = 0; $i < count($dependenciasArray); $i++) {
            $dependencia = new Dependencia();
            $metadata = $em->getClassMetadata(get_class($dependencia));
            $metadata->setIdGenerator(new \Doctrine\ORM\Id\AssignedGenerator());
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $dependencia->setDescripcion($dependenciasArray[$i]['descripcion']);
            $dependencia->setNivel($dependenciasArray[$i]['categoriaProgramatica']);
            $dependencia->setId($dependenciasArray[$i]['id']);
           
            $em->persist($dependencia);
            $em->flush();
        }        
         return $this->redirectToRoute('generar_persona');
    }
    

    /**
     * @Route("/config_inicial_persona", name="generar_persona")
     */
    public function cargarPersonaAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $assetPath = $this->get('kernel')->getProjectDir() . "/web/config_inicial/";

        $personasFile = file_get_contents($assetPath . "persona.json");
        $personaArray = json_decode($personasFile, true);

        //GENERACION DE CADA PERSONA
        for ($i = 0; $i < count($personaArray); $i++) {
            $persona = new Persona();
            $metadata = $em->getClassMetadata(get_parent_class($persona));
            $metadata->setIdGenerator(new \Doctrine\ORM\Id\AssignedGenerator());
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $persona->setId($personaArray[$i]['id']);        
            
            $dependencia = $em->getRepository("AppBundle:Dependencia")->find($personaArray[$i]['dependencia_id']);

            $persona->setNombre($personaArray[$i]['nombre']);
            $persona->setApellido($personaArray[$i]['apellido']);
            $persona->setDni($personaArray[$i]['numeroDocumento']);
            $persona->setCargo('Sin cargo asignado');
            $persona->setDependencia($dependencia);
            $em->persist($persona);
            $em->flush();
        }
        
         return $this->redirectToRoute('set_dependencia');
    }
    
    
    /**
     * @Route("/config_inicial_dependencia_set", name="set_dependencia")
     */
     public function setearDependenciaAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $assetPath = $this->get('kernel')->getProjectDir() . "/web/config_inicial/";
        
        $dependenciasFile = file_get_contents($assetPath . "dependencia.json");
        $dependenciasArray = json_decode($dependenciasFile, true);
        
       //SETEO DE DATA EN DEPENDENCIA
         for ($i = 0; $i < count($dependenciasArray); $i++) {
            $dependencia = $em->getRepository("AppBundle:Dependencia")->find($dependenciasArray[$i]['id']);
            $dependenciaPadre = $em->getRepository("AppBundle:Dependencia")->find($dependenciasArray[$i]['dependenciaPadre_id']);
            $personaResponsable = $em->getRepository("AppBundle:Persona")->find($dependenciasArray[$i]['personaResponsable_id']);
            
            $dependencia->setDependenciaPadre($dependenciaPadre);
            $dependencia->setResponsable($personaResponsable);
            
            $em->persist($dependencia);
            $em->flush();
        }
               
        return $this->redirectToRoute('generar_mesaentrada');
    }
    
    
    /**
     * @Route("/config_inicial_dependencia_mesaentrada", name="generar_mesaentrada")
     */
     public function generarMesaEntradaAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $assetPath = $this->get('kernel')->getProjectDir() . "/web/config_inicial/";
        
        $dependenciasFile = file_get_contents($assetPath . "dependencia.json");
        $dependenciasArray = json_decode($dependenciasFile, true);
        
        //GENERACION DE LAS MESAS DE ENTRADA DE LAS DEPENDENCIAS PERSISTIDAS ARRIBA
        for ($i = 0; $i < count($dependenciasArray); $i++) {

            $dependencia = $em->getRepository("AppBundle:Dependencia")->find($dependenciasArray[$i]['id']);
            $mesaentrada = new MesaEntrada();
            $mesaentrada->setCodigoExpediente('Sin codigo asignado');
            $mesaentrada->setDependencia($dependencia);
            $dependencia->setMesaentrada($mesaentrada);
            $lastUbicacion = $em->getRepository('AppBundle:Ubicacion')->findOneBy(array(),array('id'=>'DESC'),0,1);
            $mesaentrada->setId($lastUbicacion->getId()+1);
            $em->persist($mesaentrada);
            $em->flush();
        }        
        return $this->redirectToRoute('homepage');
    }
}
