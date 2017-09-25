<?php

namespace DonkeyCode\Propel\Behavior\Overridable;

class OverridableObjectBuilderModifier
{
    /**
     * @var UuidBehavior
     */
    private $behavior;
    
    public function __construct(\Propel\Generator\Model\Behavior $behavior)
    {
        $this->behavior = $behavior;
    }

    public function objectMethods($builder)
    {
        return $this->behavior->renderTemplate('objectMethods', array(
            'getters' => $this->getAccessors(),
            'setters' => $this->getAccessors('set'),
        ));
    }

    protected function getAccessors($method = 'get')
    {
        $list = [];

        foreach ($this->behavior->getOverridableColumns() as $column) {
            $list[$column] = [
                'original'  => $method.$this->behavior->getTable()->getColumn($column)->getPhpName(),
                'overrided' => $method.$this->behavior->getTable()->getColumn($column.'_override')->getPhpName(),
                'public'    => $method.substr($this->behavior->getTable()->getColumn($column)->getPhpName(), 8), // remove Original
            ];
        }

        return $list;
    }

}