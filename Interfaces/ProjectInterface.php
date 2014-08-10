<?php
namespace PMS\Component\Project\Interfaces;

interface ProjectInterface extends KickstarterInterface
{
    /**
     * Get category
     * 
     * @return \PMS\Component\Project\Model\Category
     */
    public function getCategory();
    
    /**
     * Set category
     * 
     * @param \PMS\Component\Project\Model\Category $category
     * @return \PMS\Component\Project\Model\ProjectInterface
     */
    public function setCategory(\PMS\Component\Project\Model\Category $category);
    
    /**
     * Get status
     * 
     * @return PMS\Component\Project\Model\Status
     */
    public function getStatus();
    
    /**
     * Set status
     * 
     * @param \PMS\Component\Project\Model\Status $status
     * @return \PMS\Component\Project\Interfaces\ProjectInterface
     */
    public function setStatus(\PMS\Component\Project\Model\Status $status);
    
    /**
     * Get client
     * 
     * @return \PMS\Component\User\Model\Client
     */
    public function getClient();
    
    /**
     * Set client
     * 
     * @param \PMS\Component\User\Model\Client $client
     * @return \PMS\Component\Project\Interfaces\ProjectInterface
     */
    public function setClient(\PMS\Component\User\Model\Client $client);
    
    /**
     * Get developer
     * 
     * @return \PMS\Component\User\Model\Developer
     */
    public function getDeveloper();
    
    /**
     * Set developer
     * 
     * @param \PMS\Component\Project\Model\Developer $developer
     * @return \PMS\Component\Project\Interfaces\ProjectInterface
     */
    public function setDeveloper(\PMS\Component\User\Model\Developer $developer);
}
