<?php
namespace VpwTest\Dal\Asset;

use Vpw\Dal\ModelObject;

class FooObject extends ModelObject
{
    protected $foo;

    protected $ref;

    protected $id;

    protected $update_time;

    private $object;

    /**
    * @param int $id
    * @return FooObject
    */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
    * @return int
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $foo
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }


    /**
    * @param string $ref
    */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
    * @return string
    */
    public function getRef()
    {
        return $this->ref;
    }

    /**
      * @return string
      */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * @param string $update_time
     */
    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
    }


    public function getIdentity()
    {
        return $this->getFoo();
    }

    public function setObject($object)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
    }
}
