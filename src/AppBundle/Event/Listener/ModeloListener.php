<?php

namespace AppBundle\Event\Listener;

use DateTime;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ModeloListener {

    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function onFlush(OnFlushEventArgs $args) {
        $entityManager = $args->getEntityManager();
        $securityContext = $this->container->get('security.token_storage');
        if ($securityContext->getToken() && $securityContext->getToken()->getUser() != 'anon.') {
            $user = $securityContext->getToken()->getUser()->getUsername();
        } else {
            $user = 'admin';
        }
        $uow = $entityManager->getUnitOfWork();
        foreach ($uow->getScheduledEntityInsertions() as $entity) {
            $entity->setFechaAlta(new DateTime());
            $entity->setFechaUltimaModificacion(new DateTime());
            $entity->setUsuarioUltimaModificacion($user);
            // Instead of $em->flush() cos we're already in flush process
            $entityMetadata = $entityManager->getClassMetadata(get_class($entity));
            $uow->recomputeSingleEntityChangeSet($entityMetadata, $entity);
        }
        foreach ($uow->getScheduledEntityUpdates() as $entity) {
            $entity->setFechaUltimaModificacion(new DateTime());
            $entity->setUsuarioUltimaModificacion($user);
            // Instead of $em->flush() cos we're already in flush process
            $entityMetadata = $entityManager->getClassMetadata(get_class($entity));
            $uow->recomputeSingleEntityChangeSet($entityMetadata, $entity);
        }
        foreach ($uow->getScheduledEntityDeletions() as $entity) {
            $entity->setFechaUltimaModificacion(new DateTime());
            $entity->setUsuarioUltimaModificacion($user);
            // Instead of $em->flush() cos we're already in flush process
            $entityMetadata = $entityManager->getClassMetadata(get_class($entity));
//            $uow->recomputeSingleEntityChangeSet($entityMetadata, $entity);
        }
    }

}
