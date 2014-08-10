<?php
namespace PMS\Component\Project\Model;

class Category implements \PMS\Component\Project\Interfaces\CategoryInterface
{
    /**
     * Name
     * 
     * @var string
     */
    protected $name;
    
    /**
     * Description
     * @var string
     */
    protected $description;
    
    /**
     * Parent
     * @var \PMS\Component\Project\Model\Category
     */
    protected $parent;
    
    /**
     * Public
     * @var boolean
     */
    protected $public;
    
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @inheritdoc
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * @inheritdoc
     */
    public function setParent(\PMS\Component\Project\Model\Category $parent)
    {
        $this->parent = $parent;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function isPUblic($public = null)
    {
        if (null == $public) {
            return (bool) $this->public;
        }
        
        $this->public = $public;
        
        return $this;
    }
}
