<?php

namespace DonkeyCode\Propel\Behavior\Overridable;

use Propel\Generator\Model\Behavior;
use Propel\Runtime\Exception\LogicException;
use Propel\Generator\Model\Unique;

/**
 * @author Cedric LOMBARDOT
 */
class OverridableBehavior extends Behavior
{
    private $objectBuilderModifier;

    /**
     * @var array
     */
    protected $parameters = array(
        'overridable_columns'     => [],
    );

    /**
     * {@inheritdoc}
     */
    public function modifyTable()
    {
        foreach ($this->getOverridableColumns() as $column) {
            if (!$this->getTable()->hasColumn($column)) {
                throw new \LogicException("Column $column not found !");
            }

            $col = $this->getTable()->getColumn($column);
            $colOverrided = clone $col;

            $colOverrided->setName($col->getName().'_override');            
            $colOverrided->setPhpName('Overrided'.$col->getPhpName());
            $col->setPhpName('Original'.$col->getPhpName());

            $this->getTable()->addColumn($colOverrided);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectBuilderModifier()
    {
        if (null === $this->objectBuilderModifier) {
            $this->objectBuilderModifier = new OverridableObjectBuilderModifier($this);
        }

        return $this->objectBuilderModifier;
    }

    public function getOverridableColumns()
    {
        return explode(',', str_replace(' ', '', $this->getParameter('overridable_columns')));
    }
}
