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

    //filtro
    public function createExpedienteFilterQuery($user, $padre_id = null) {
        $qb = $this->getEntityManager()->createQueryBuilder('e');
        $result = $qb->select('e')
                ->from('AppBundle:Expediente', 'e')
                ->where("e.estado <>'ASOCIADO'")
                ->andWhere('e.fechaBaja IS NULL');
        if ($padre_id != null) {
            $result->andWhere('e.id != :expediente_padre_id')
                    ->setParameter('expediente_padre_id', $padre_id);
        }
        if ($user->getRole() != "ROLE_ADMIN") {
            $result->leftJoin(\AppBundle\Entity\Ubicacion::class, "u", "WITH", "e.ubicacionActual = u.id")
                    ->andWhere('u.dependencia= :dependencia')
                    ->setParameter('dependencia', $user->getPersona()->getDependencia());
        } else {
            $result->innerJoin(\AppBundle\Entity\Ubicacion::class, "u", "WITH", "e.ubicacionActual = u.id")
                    ->innerJoin(\AppBundle\Entity\Dependencia::class, "d", "WITH", "u.dependencia = d.id");
        }
        return $result;
    }

    public function createExpedienteFastFilterQuery() {
        $qb = $this->getEntityManager()->createQueryBuilder('e');
        $result = $qb->select('e')
                ->from('AppBundle:Expediente', 'e')
                 ->where('e.fechaBaja IS NULL');
        return $result;
    }

    public function findByExpediente($expediente) {
        $qb = $this->getEntityManager()->createQueryBuilder('e');
        $result = $qb->select('e')
                ->from(\AppBundle\Entity\Expediente::class, 'e')
                ->where('e.id = :expediente')
                ->andWhere('e.fechaBaja IS NULL')
                ->setParameter('expediente', $expediente);

        $expediente = $result->getQuery()->getResult();
        return $expediente[0];
    }

}
