<?php
namespace PMS\Component\Project\Model;

class Project implements \PMS\Component\Project\Interfaces\ProjectInterface
{
    /**
     * Name
     * 
     * @var string
     */
    protected $name;
    
    /**
     * Description
     * 
     * @var string
     */
    protected $description;
    
    /**
     * Category
     * 
     * @var \PMS\Component\Project\Model\Category
     */
    protected $category;
    
    /**
     * Status
     * 
     * @var \PMS\Component\Project\Model\Status
     */
    protected $status;
    
    /**
     * Client
     * 
     * @var \PMS\Component\User\Model\Client
     */
    protected $client;
    
    /**
     * Developer
     * @var \PMS\Component\User\Model\Developer 
     */
    protected $developer;
    
    /**
     * Public
     * 
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
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @inheritdoc
     */
    public function setCategory(\PMS\Component\Project\Model\Category $category)
    {
        $this->category = $category;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * @inheritdoc
     */
    public function setStatus(\PMS\Component\Project\Model\Status $status)
    {
        $this->status = $status;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function getClient()
    {
        return $this->client;
    }
    
    /**
     * @inheritdoc
     */
    public function setClient(\PMS\Component\User\Model\Client $client)
    {
        $this->client = $client;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function getDeveloper()
    {
        return $this->developer;
    }
    
    /**
     * @inheritdoc
     */
    public function setDeveloper(\PMS\Component\User\Model\Developer $developer)
    {
        $this->developer = $developer;
        
        return $this;
    }
    
    /**
     * @inheritdoc
     */
    public function isPublic($public = null)
    {
        if (null == $public) {
            return (bool) $this->public;
        }
        
        $this->public = $public;
        
        return $this;
    }
}
