<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ExpedienteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ExpedienteRepository extends \Doctrine\ORM\EntityRepository {

    public function findExpedientesAsociados($term, $id, $dependencia) {
        $qb = $this->getEntityManager()->createQueryBuilder('e');
        $result = $qb->select('e')
                        ->from('AppBundle:Expediente', 'e')
                        ->leftJoin(\AppBundle\Entity\ExpedienteAsociado::class, "ea", "WITH",
                                "e.id = ea.expedienteAsociado")
                        ->leftJoin(\AppBundle\Entity\Ubicacion::class, "u", "WITH",
                                "e.ubicacionActual =u.id")
                        ->leftJoin(\AppBundle\Entity\Dependencia::class, "d", "WITH",
                                "u.dependencia =d.id")
                        ->where('d.id = :dependencia')
                        ->andWhere('ea.id IS NULL')
                        ->andWhere('e.id != :expediente_padre')
                        ->andWhere($qb->expr()
                                ->like('e.nroExpediente', $qb->expr()
                                        ->literal('%' . $term . '%')))
                        ->setParameters([
                            'expediente_padre'=> $id,
                            'dependencia'=>$dependencia
                                ])
                        ->setMaxResults(10)->getQuery()->getResult();
        return $result;
    }

    public function createExpedienteFilterQuery($user) {
        $qb = $this->getEntityManager()->createQueryBuilder('e');
        $result = $qb->select('e')
                ->from('AppBundle:Expediente', 'e')
                ->where("e.estado <>'ASOCIADO'");
        if ($user->getRole() != "ROLE_ADMIN") {
            $result->leftJoin(\AppBundle\Entity\Ubicacion::class, "u", "WITH",
                            "e.ubicacionActual = u.id")
                    ->andWhere('u.dependencia= :dependencia')
                    ->setParameter('dependencia', $user->getPersona()->getDependencia());
        }

        return $result;
    }

}
