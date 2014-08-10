<?php
namespace PMS\Component\Project\Interfaces;

interface CategoryInterface extends KickstarterInterface
{
    /**
     * Get parent
     * 
     * @return \PMS\Component\Project\Interfaces\CategoryInterface
     */
    public function getParent();
    
    /**
     * Set parent
     * 
     * @param \PMS\Component\Project\Model\Category $parent
     * @return \PMS\Component\Project\Interfaces\CategoryInterface
     */
    public function setParent(\PMS\Component\Project\Model\Category $parent);
}
