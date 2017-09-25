PHPUnit 5.6.2 by Sebastian Bergmann and contributors.

E                                                                   1 / 1 (100%)

namespace Map
{

use \TableWithOverridableBehavior;
use \TableWithOverridableBehaviorQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'table_with_overridable_behavior' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class TableWithOverridableBehaviorTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.TableWithOverridableBehaviorTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'overridable_behavior';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'table_with_overridable_behavior';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\TableWithOverridableBehavior';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'TableWithOverridableBehavior';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the id field
     */
    const COL_ID = 'table_with_overridable_behavior.id';

    /**
     * the column name for the title field
     */
    const COL_TITLE = 'table_with_overridable_behavior.title';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'table_with_overridable_behavior.description';

    /**
     * the column name for the title_override field
     */
    const COL_TITLE_OVERRIDE = 'table_with_overridable_behavior.title_override';

    /**
     * the column name for the description_override field
     */
    const COL_DESCRIPTION_OVERRIDE = 'table_with_overridable_behavior.description_override';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'OriginalTitle', 'OriginalDescription', 'OverrideOriginalTitle', 'OverrideOriginalDescription', ),
        self::TYPE_CAMELNAME     => array('id', 'originalTitle', 'originalDescription', 'overrideOriginalTitle', 'overrideOriginalDescription', ),
        self::TYPE_COLNAME       => array(TableWithOverridableBehaviorTableMap::COL_ID, TableWithOverridableBehaviorTableMap::COL_TITLE, TableWithOverridableBehaviorTableMap::COL_DESCRIPTION, TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE, TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE, ),
        self::TYPE_FIELDNAME     => array('id', 'title', 'description', 'title_override', 'description_override', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'OriginalTitle' => 1, 'OriginalDescription' => 2, 'OverrideOriginalTitle' => 3, 'OverrideOriginalDescription' => 4, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'originalTitle' => 1, 'originalDescription' => 2, 'overrideOriginalTitle' => 3, 'overrideOriginalDescription' => 4, ),
        self::TYPE_COLNAME       => array(TableWithOverridableBehaviorTableMap::COL_ID => 0, TableWithOverridableBehaviorTableMap::COL_TITLE => 1, TableWithOverridableBehaviorTableMap::COL_DESCRIPTION => 2, TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE => 3, TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE => 4, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'title' => 1, 'description' => 2, 'title_override' => 3, 'description_override' => 4, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('table_with_overridable_behavior');
        $this->setPhpName('TableWithOverridableBehavior');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\TableWithOverridableBehavior');
        $this->setPackage('');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('title', 'OriginalTitle', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'OriginalDescription', 'LONGVARCHAR', false, null, null);
        $this->addColumn('title_override', 'OverrideOriginalTitle', 'VARCHAR', true, 255, null);
        $this->addColumn('description_override', 'OverrideOriginalDescription', 'LONGVARCHAR', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'overridable' => array('overridable_columns' => 'title,description', ),
        );
    } // getBehaviors()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TableWithOverridableBehaviorTableMap::CLASS_DEFAULT : TableWithOverridableBehaviorTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (TableWithOverridableBehavior object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = TableWithOverridableBehaviorTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = TableWithOverridableBehaviorTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + TableWithOverridableBehaviorTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TableWithOverridableBehaviorTableMap::OM_CLASS;
            /** @var TableWithOverridableBehavior $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            TableWithOverridableBehaviorTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = TableWithOverridableBehaviorTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = TableWithOverridableBehaviorTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var TableWithOverridableBehavior $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TableWithOverridableBehaviorTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TableWithOverridableBehaviorTableMap::COL_ID);
            $criteria->addSelectColumn(TableWithOverridableBehaviorTableMap::COL_TITLE);
            $criteria->addSelectColumn(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE);
            $criteria->addSelectColumn(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.title');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.title_override');
            $criteria->addSelectColumn($alias . '.description_override');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(TableWithOverridableBehaviorTableMap::DATABASE_NAME)->getTable(TableWithOverridableBehaviorTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(TableWithOverridableBehaviorTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new TableWithOverridableBehaviorTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a TableWithOverridableBehavior or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or TableWithOverridableBehavior object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \TableWithOverridableBehavior) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
            $criteria->add(TableWithOverridableBehaviorTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = TableWithOverridableBehaviorQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            TableWithOverridableBehaviorTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                TableWithOverridableBehaviorTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the table_with_overridable_behavior table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return TableWithOverridableBehaviorQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a TableWithOverridableBehavior or Criteria object.
     *
     * @param mixed               $criteria Criteria or TableWithOverridableBehavior object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from TableWithOverridableBehavior object
        }

        if ($criteria->containsKey(TableWithOverridableBehaviorTableMap::COL_ID) && $criteria->keyContainsValue(TableWithOverridableBehaviorTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TableWithOverridableBehaviorTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = TableWithOverridableBehaviorQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // TableWithOverridableBehaviorTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
TableWithOverridableBehaviorTableMap::buildTableMap();
}


namespace Base
{

use \TableWithOverridableBehaviorQuery as ChildTableWithOverridableBehaviorQuery;
use \Exception;
use \PDO;
use Map\TableWithOverridableBehaviorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'table_with_overridable_behavior' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class TableWithOverridableBehavior implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\TableWithOverridableBehaviorTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     *
     * @var        int
     */
    protected $id;

    /**
     * The value for the title field.
     *
     * @var        string
     */
    protected $title;

    /**
     * The value for the description field.
     *
     * @var        string
     */
    protected $description;

    /**
     * The value for the title_override field.
     *
     * @var        string
     */
    protected $title_override;

    /**
     * The value for the description_override field.
     *
     * @var        string
     */
    protected $description_override;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Initializes internal state of Base\TableWithOverridableBehavior object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>TableWithOverridableBehavior</code> instance.  If
     * <code>obj</code> is an instance of <code>TableWithOverridableBehavior</code>, delegates to
     * <code>equals(TableWithOverridableBehavior)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|TableWithOverridableBehavior The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [title] column value.
     *
     * @return string
     */
    public function getOriginalTitle()
    {
        return $this->title;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getOriginalDescription()
    {
        return $this->description;
    }

    /**
     * Get the [title_override] column value.
     *
     * @return string
     */
    public function getOverrideOriginalTitle()
    {
        return $this->title_override;
    }

    /**
     * Get the [description_override] column value.
     *
     * @return string
     */
    public function getOverrideOriginalDescription()
    {
        return $this->description_override;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return $this|\TableWithOverridableBehavior The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[TableWithOverridableBehaviorTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [title] column.
     *
     * @param string $v new value
     * @return $this|\TableWithOverridableBehavior The current object (for fluent API support)
     */
    public function setOriginalTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[TableWithOverridableBehaviorTableMap::COL_TITLE] = true;
        }

        return $this;
    } // setOriginalTitle()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return $this|\TableWithOverridableBehavior The current object (for fluent API support)
     */
    public function setOriginalDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[TableWithOverridableBehaviorTableMap::COL_DESCRIPTION] = true;
        }

        return $this;
    } // setOriginalDescription()

    /**
     * Set the value of [title_override] column.
     *
     * @param string $v new value
     * @return $this|\TableWithOverridableBehavior The current object (for fluent API support)
     */
    public function setOverrideOriginalTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title_override !== $v) {
            $this->title_override = $v;
            $this->modifiedColumns[TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE] = true;
        }

        return $this;
    } // setOverrideOriginalTitle()

    /**
     * Set the value of [description_override] column.
     *
     * @param string $v new value
     * @return $this|\TableWithOverridableBehavior The current object (for fluent API support)
     */
    public function setOverrideOriginalDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description_override !== $v) {
            $this->description_override = $v;
            $this->modifiedColumns[TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE] = true;
        }

        return $this;
    } // setOverrideOriginalDescription()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TableWithOverridableBehaviorTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TableWithOverridableBehaviorTableMap::translateFieldName('OriginalTitle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->title = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TableWithOverridableBehaviorTableMap::translateFieldName('OriginalDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TableWithOverridableBehaviorTableMap::translateFieldName('OverrideOriginalTitle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->title_override = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TableWithOverridableBehaviorTableMap::translateFieldName('OverrideOriginalDescription', TableMap::TYPE_PHPNAME, $indexType)];
            $this->description_override = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = TableWithOverridableBehaviorTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\TableWithOverridableBehavior'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTableWithOverridableBehaviorQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see TableWithOverridableBehavior::setDeleted()
     * @see TableWithOverridableBehavior::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTableWithOverridableBehaviorQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TableWithOverridableBehaviorTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[TableWithOverridableBehaviorTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TableWithOverridableBehaviorTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'title';
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE)) {
            $modifiedColumns[':p' . $index++]  = 'title_override';
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE)) {
            $modifiedColumns[':p' . $index++]  = 'description_override';
        }

        $sql = sprintf(
            'INSERT INTO table_with_overridable_behavior (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'title':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'title_override':
                        $stmt->bindValue($identifier, $this->title_override, PDO::PARAM_STR);
                        break;
                    case 'description_override':
                        $stmt->bindValue($identifier, $this->description_override, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TableWithOverridableBehaviorTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getOriginalTitle();
                break;
            case 2:
                return $this->getOriginalDescription();
                break;
            case 3:
                return $this->getOverrideOriginalTitle();
                break;
            case 4:
                return $this->getOverrideOriginalDescription();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['TableWithOverridableBehavior'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['TableWithOverridableBehavior'][$this->hashCode()] = true;
        $keys = TableWithOverridableBehaviorTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOriginalTitle(),
            $keys[2] => $this->getOriginalDescription(),
            $keys[3] => $this->getOverrideOriginalTitle(),
            $keys[4] => $this->getOverrideOriginalDescription(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\TableWithOverridableBehavior
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TableWithOverridableBehaviorTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\TableWithOverridableBehavior
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setOriginalTitle($value);
                break;
            case 2:
                $this->setOriginalDescription($value);
                break;
            case 3:
                $this->setOverrideOriginalTitle($value);
                break;
            case 4:
                $this->setOverrideOriginalDescription($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = TableWithOverridableBehaviorTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOriginalTitle($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOriginalDescription($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOverrideOriginalTitle($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOverrideOriginalDescription($arr[$keys[4]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\TableWithOverridableBehavior The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TableWithOverridableBehaviorTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_ID)) {
            $criteria->add(TableWithOverridableBehaviorTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_TITLE)) {
            $criteria->add(TableWithOverridableBehaviorTableMap::COL_TITLE, $this->title);
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION)) {
            $criteria->add(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION, $this->description);
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE)) {
            $criteria->add(TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE, $this->title_override);
        }
        if ($this->isColumnModified(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE)) {
            $criteria->add(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE, $this->description_override);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildTableWithOverridableBehaviorQuery::create();
        $criteria->add(TableWithOverridableBehaviorTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \TableWithOverridableBehavior (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOriginalTitle($this->getOriginalTitle());
        $copyObj->setOriginalDescription($this->getOriginalDescription());
        $copyObj->setOverrideOriginalTitle($this->getOverrideOriginalTitle());
        $copyObj->setOverrideOriginalDescription($this->getOverrideOriginalDescription());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \TableWithOverridableBehavior Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id = null;
        $this->title = null;
        $this->description = null;
        $this->title_override = null;
        $this->description_override = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TableWithOverridableBehaviorTableMap::DEFAULT_STRING_FORMAT);
    }

    // overridable behavior
    public function getTitle()
    {
        if ($overrided = $this->getOverrideOriginalTitle()) {
            return $overrided;
        }

        return $this->getOriginalTitle();
    }
    public function getDescription()
    {
        if ($overrided = $this->getOverrideOriginalDescription()) {
            return $overrided;
        }

        return $this->getOriginalDescription();
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
}


namespace Base
{

use \TableWithOverridableBehavior as ChildTableWithOverridableBehavior;
use \TableWithOverridableBehaviorQuery as ChildTableWithOverridableBehaviorQuery;
use \Exception;
use \PDO;
use Map\TableWithOverridableBehaviorTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'table_with_overridable_behavior' table.
 *
 *
 *
 * @method     ChildTableWithOverridableBehaviorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildTableWithOverridableBehaviorQuery orderByOriginalTitle($order = Criteria::ASC) Order by the title column
 * @method     ChildTableWithOverridableBehaviorQuery orderByOriginalDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildTableWithOverridableBehaviorQuery orderByOverrideOriginalTitle($order = Criteria::ASC) Order by the title_override column
 * @method     ChildTableWithOverridableBehaviorQuery orderByOverrideOriginalDescription($order = Criteria::ASC) Order by the description_override column
 *
 * @method     ChildTableWithOverridableBehaviorQuery groupById() Group by the id column
 * @method     ChildTableWithOverridableBehaviorQuery groupByOriginalTitle() Group by the title column
 * @method     ChildTableWithOverridableBehaviorQuery groupByOriginalDescription() Group by the description column
 * @method     ChildTableWithOverridableBehaviorQuery groupByOverrideOriginalTitle() Group by the title_override column
 * @method     ChildTableWithOverridableBehaviorQuery groupByOverrideOriginalDescription() Group by the description_override column
 *
 * @method     ChildTableWithOverridableBehaviorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTableWithOverridableBehaviorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTableWithOverridableBehaviorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTableWithOverridableBehaviorQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTableWithOverridableBehaviorQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTableWithOverridableBehaviorQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTableWithOverridableBehavior findOne(ConnectionInterface $con = null) Return the first ChildTableWithOverridableBehavior matching the query
 * @method     ChildTableWithOverridableBehavior findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTableWithOverridableBehavior matching the query, or a new ChildTableWithOverridableBehavior object populated from the query conditions when no match is found
 *
 * @method     ChildTableWithOverridableBehavior findOneById(int $id) Return the first ChildTableWithOverridableBehavior filtered by the id column
 * @method     ChildTableWithOverridableBehavior findOneByOriginalTitle(string $title) Return the first ChildTableWithOverridableBehavior filtered by the title column
 * @method     ChildTableWithOverridableBehavior findOneByOriginalDescription(string $description) Return the first ChildTableWithOverridableBehavior filtered by the description column
 * @method     ChildTableWithOverridableBehavior findOneByOverrideOriginalTitle(string $title_override) Return the first ChildTableWithOverridableBehavior filtered by the title_override column
 * @method     ChildTableWithOverridableBehavior findOneByOverrideOriginalDescription(string $description_override) Return the first ChildTableWithOverridableBehavior filtered by the description_override column *

 * @method     ChildTableWithOverridableBehavior requirePk($key, ConnectionInterface $con = null) Return the ChildTableWithOverridableBehavior by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTableWithOverridableBehavior requireOne(ConnectionInterface $con = null) Return the first ChildTableWithOverridableBehavior matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTableWithOverridableBehavior requireOneById(int $id) Return the first ChildTableWithOverridableBehavior filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTableWithOverridableBehavior requireOneByOriginalTitle(string $title) Return the first ChildTableWithOverridableBehavior filtered by the title column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTableWithOverridableBehavior requireOneByOriginalDescription(string $description) Return the first ChildTableWithOverridableBehavior filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTableWithOverridableBehavior requireOneByOverrideOriginalTitle(string $title_override) Return the first ChildTableWithOverridableBehavior filtered by the title_override column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTableWithOverridableBehavior requireOneByOverrideOriginalDescription(string $description_override) Return the first ChildTableWithOverridableBehavior filtered by the description_override column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTableWithOverridableBehavior[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTableWithOverridableBehavior objects based on current ModelCriteria
 * @method     ChildTableWithOverridableBehavior[]|ObjectCollection findById(int $id) Return ChildTableWithOverridableBehavior objects filtered by the id column
 * @method     ChildTableWithOverridableBehavior[]|ObjectCollection findByOriginalTitle(string $title) Return ChildTableWithOverridableBehavior objects filtered by the title column
 * @method     ChildTableWithOverridableBehavior[]|ObjectCollection findByOriginalDescription(string $description) Return ChildTableWithOverridableBehavior objects filtered by the description column
 * @method     ChildTableWithOverridableBehavior[]|ObjectCollection findByOverrideOriginalTitle(string $title_override) Return ChildTableWithOverridableBehavior objects filtered by the title_override column
 * @method     ChildTableWithOverridableBehavior[]|ObjectCollection findByOverrideOriginalDescription(string $description_override) Return ChildTableWithOverridableBehavior objects filtered by the description_override column
 * @method     ChildTableWithOverridableBehavior[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TableWithOverridableBehaviorQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\TableWithOverridableBehaviorQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'overridable_behavior', $modelName = '\\TableWithOverridableBehavior', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTableWithOverridableBehaviorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTableWithOverridableBehaviorQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTableWithOverridableBehaviorQuery) {
            return $criteria;
        }
        $query = new ChildTableWithOverridableBehaviorQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildTableWithOverridableBehavior|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TableWithOverridableBehaviorTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTableWithOverridableBehavior A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, title, description, title_override, description_override FROM table_with_overridable_behavior WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildTableWithOverridableBehavior $obj */
            $obj = new ChildTableWithOverridableBehavior();
            $obj->hydrate($row);
            TableWithOverridableBehaviorTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildTableWithOverridableBehavior|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByOriginalTitle('%fooValue%', Criteria::LIKE); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalTitle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterByOriginalTitle($originalTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalTitle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_TITLE, $originalTitle, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByOriginalDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterByOriginalDescription($originalDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION, $originalDescription, $comparison);
    }

    /**
     * Filter the query on the title_override column
     *
     * Example usage:
     * <code>
     * $query->filterByOverrideOriginalTitle('fooValue');   // WHERE title_override = 'fooValue'
     * $query->filterByOverrideOriginalTitle('%fooValue%', Criteria::LIKE); // WHERE title_override LIKE '%fooValue%'
     * </code>
     *
     * @param     string $overrideOriginalTitle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterByOverrideOriginalTitle($overrideOriginalTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($overrideOriginalTitle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_TITLE_OVERRIDE, $overrideOriginalTitle, $comparison);
    }

    /**
     * Filter the query on the description_override column
     *
     * Example usage:
     * <code>
     * $query->filterByOverrideOriginalDescription('fooValue');   // WHERE description_override = 'fooValue'
     * $query->filterByOverrideOriginalDescription('%fooValue%', Criteria::LIKE); // WHERE description_override LIKE '%fooValue%'
     * </code>
     *
     * @param     string $overrideOriginalDescription The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function filterByOverrideOriginalDescription($overrideOriginalDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($overrideOriginalDescription)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_DESCRIPTION_OVERRIDE, $overrideOriginalDescription, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTableWithOverridableBehavior $tableWithOverridableBehavior Object to remove from the list of results
     *
     * @return $this|ChildTableWithOverridableBehaviorQuery The current query, for fluid interface
     */
    public function prune($tableWithOverridableBehavior = null)
    {
        if ($tableWithOverridableBehavior) {
            $this->addUsingAlias(TableWithOverridableBehaviorTableMap::COL_ID, $tableWithOverridableBehavior->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the table_with_overridable_behavior table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TableWithOverridableBehaviorTableMap::clearInstancePool();
            TableWithOverridableBehaviorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TableWithOverridableBehaviorTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TableWithOverridableBehaviorTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TableWithOverridableBehaviorTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TableWithOverridableBehaviorTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TableWithOverridableBehaviorQuery
}

namespace
{


use Base\TableWithOverridableBehavior as BaseTableWithOverridableBehavior;

/**
 * Skeleton subclass for representing a row from the 'table_with_overridable_behavior' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TableWithOverridableBehavior extends BaseTableWithOverridableBehavior
{

}

}

namespace
{


use Base\TableWithOverridableBehaviorQuery as BaseTableWithOverridableBehaviorQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'table_with_overridable_behavior' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TableWithOverridableBehaviorQuery extends BaseTableWithOverridableBehaviorQuery
{

}

}


Time: 118 ms, Memory: 16.00MB

There was 1 error:

1) OverridableBehavior\tests\OverridableBehaviorTest::testGetPublic
Error: Call to undefined method OverridableBehavior\tests\OverridableBehaviorTest::getTitle()

/Users/cedric/Documents/DonkeyCode/propel-overridable-behavior/tests/OverridableBehaviorTest.php:42

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
