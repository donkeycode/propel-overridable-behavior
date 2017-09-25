<?php

namespace OverridableBehavior\tests;

use Propel\Generator\Util\QuickBuilder;

class OverridableBehaviorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!class_exists('TableWithOverridableBehavior')) {
            $schema = <<<EOF
<database name="overridable_behavior" defaultIdMethod="native">
    <table name="table_with_overridable_behavior">
        <column name="id" required="true" primaryKey="true" autoIncrement="true" type="INTEGER" />

        <column name="title" type="varchar" size="255" required="true" />
        <column name="description" type="longvarchar" required="false" />

        <behavior name="overridable">    
            <parameter name="overridable_columns" value="title,description" />
        </behavior>
    </table>
</database>
EOF;
            $builder = new QuickBuilder();
            $config  = $builder->getConfig();
            $builder->setConfig($config);
            $builder->setSchema($schema);

            $builder->build();
        }
    }

    public function testGetPublic()
    {
        $post = new \TableWithOverridableBehavior();
        $post->setOriginalTitle('Lorem ipsum');
        $post->setOriginalDescription('Dolor Sit et Amet');

        $this->assertEquals('Lorem ipsum', $post->getTitle());
        $this->assertEquals('Dolor Sit et Amet', $post->getDescription());
        
        $post->setOverridedTitle('Overrided');
        $this->assertEquals('Overrided', $post->getTitle());

        $post->setOverridedTitle(null);
        $this->assertEquals('Lorem ipsum', $post->getTitle());
    }

    public function testSetPublic()
    {
        $post = new \TableWithOverridableBehavior();
        $post->setTitle('Lorem ipsum');
        $this->assertEquals('Lorem ipsum', $post->getTitle());

        $this->assertEquals(null, $post->getOriginalTitle());
        $this->assertEquals('Lorem ipsum', $post->getOverridedTitle());
    }


}