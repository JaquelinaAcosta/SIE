<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonaRegistro
 *
 * @ORM\Table(name="persona_registro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonaRegistroRepository")
 */
class PersonaRegistro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="persona_id", type="integer", nullable=true)
     */
    private $personaId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personaId
     *
     * @param integer $personaId
     *
     * @return PersonaRegistro
     */
    public function setPersonaId($personaId)
    {
        $this->personaId = $personaId;

        return $this;
    }

    /**
     * Get personaId
     *
     * @return int
     */
    public function getPersonaId()
    {
        return $this->personaId;
    }
}

