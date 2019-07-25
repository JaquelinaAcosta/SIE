<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\Persona;
use AppBundle\Form\ExpedienteType;

class PaginaPrincipalController extends Controller {

    /**
     * @Route("/", name="inicio")
     */
    public function indexAction() {


        // replace this example code with whatever you need
        return $this->render('AppBundle:PaginaPrincipal:inicio.html.twig', [
        ]);
    }

    /**
     * @Route("/home", name="homepage")
     */
    public function homeAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $assetPath = $this->get('kernel')->getProjectDir() . "/web/config_inicial/";

        $personasFile = file_get_contents($assetPath . "persona.json");
        $personaArray = json_decode($personasFile, true);

        $dependenciasFile = file_get_contents($assetPath . "dependencia.json");
        $dependenciasArray = json_decode($dependenciasFile, true);

        for ($i = 0; $i < count($dependenciasArray); $i++) {
            $dependencia = new Dependencia();
            $dependencia->setId($dependenciasArray[$i]['descripcion']);
            $dependencia->setDescripcion($dependenciasArray[$i]['descripcion']);
            $dependencia->setNivel($dependenciasArray[$i]['categoriaProgramatica']);
            $dependencia->setDependenciaPadre($dependenciasArray[$i]['dependenciaPadre_id']);
            $dependencia->setResponsable($dependenciasArray[$i]['personaResponsable_id']);
            $dependencia->setId($dependenciasArray[$i]['id']);
            $metadata = $em->getClassMetadata(get_class($dependencia));
            $metadata->setIdGenerator(new \Doctrine\ORM\Id\AssignedGenerator());
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->persist($dependencia);
            $em->flush();
        }

//        dump($personaArray);
//        die();
        for ($i = 0; $i < count($personaArray); $i++) {
            $persona = new Persona();
            $dependencia = $em->getRepository("AppBundle:Dependencia")->find($personaArray[$i]['dependencia_id']);

            $persona->setNombre($personaArray[$i]['nombre']);
            $persona->setApellido($personaArray[$i]['apellido']);
            $persona->setDni($personaArray[$i]['numeroDocumento']);
            $persona->setCargo('Sin cargo asignado');
            if ($dependencia != null) {
                $persona->setDependencia($dependencia);
            } else {
                $persona->setDependencia($sin_dependencia);
            }

            $persona->setId($personaArray[$i]['id']);
            $metadata = $em->getClassMetadata(get_parent_class($persona));
            $metadata->setIdGenerator(new \Doctrine\ORM\Id\AssignedGenerator());
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
//            $persona->setId($personaArray[$i]['id']);       
            $em->persist($persona);
            $em->flush();
        }


        die();
        // replace this example code with whatever you need
        return $this->render('AppBundle:PaginaPrincipal:index.html.twig', [
        ]);
    }

    /**
     * @Route("/loginUsuario", name="loginUsuario")
     */
    public function loginAction(Request $request) {
        // Recupera el servicio de autenticación
        $authenticationUtils = $this->get('security.authentication_utils');

        // Recupera, si existe, el último error al intentar hacer login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Recupera el último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        // Renderiza la plantilla, enviándole, si existen, el último error y nombre de usuario
        return $this->render('AppBundle:PaginaPrincipal:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error,
        ));
    }

    /**
     * @Route("login_check", name="login_check")
     */
    public function loginCheckAction() {
        
    }

    /**
     * @Route("logout", name="logout")
     */
    public function logoutAction() {
        
    }

}
