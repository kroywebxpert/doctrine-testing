<?php

namespace App;

/**
 * Task
 */
class Task
{
/**
 * @var integer
 */
private $id;

/**
 * @var string
 */
private $name;

/**
 * @var string
 */
private $description;

/**
 * @var boolean
 */
private $isDone;


/**
 * Get id
 *
 * @return integer
 */
public function getId()
{
return $this->id;
}

/**
 * Set name
 *
 * @param string $name
 *
 * @return Task
 */
public function setName($name)
{
$this->name = $name;

return $this;
}

/**
 * Get name
 *
 * @return string
 */
public function getName()
{
return $this->name;
}

/**
 * Set description
 *
 * @param string $description
 *
 * @return Task
 */
public function setDescription($description)
{
$this->description = $description;

return $this;
}

/**
 * Get description
 *
 * @return string
 */
public function getDescription()
{
return $this->description;
}

/**
 * Set isDone
 *
 * @param boolean $isDone
 *
 * @return Task
 */
public function setIsDone($isDone)
{
$this->isDone = $isDone;

return $this;
}

/**
 * Get isDone
 *
 * @return boolean
 */
public function getIsDone()
{
return $this->isDone;
}
}

