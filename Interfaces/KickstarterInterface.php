<?php
namespace PMS\Component\Project\Interfaces;

interface KickstarterInterface
{
    /**
     * Get name
     * 
     * @return string
     */
    public function getName();
    
    /**
     * Set name
     * 
     * @param string $name
     * @return \PMS\Component\Project\Interfaces\KickstarterInterface
     */
    public function setName($name);
    
    /**
     * Get description
     * 
     * @return string
     */
    public function getDescription();
    
    /**
     * Set description
     * 
     * @param string $description
     * @return \PMS\Component\Project\Interfaces\KickstarterInterface
     */
    public function setDescription($description);
}
