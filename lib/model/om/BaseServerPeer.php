<?php


/**
 * Base static class for performing query and update operations on the 'server' table.
 *
 *
 *
 * @package propel.generator.lib.model.om
 */
abstract class BaseServerPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'propel';

    /** the table name for this class */
    const TABLE_NAME = 'server';

    /** the related Propel class for this table */
    const OM_CLASS = 'Server';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ServerTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'server.id';

    /** the column name for the repo_localidad_id field */
    const REPO_LOCALIDAD_ID = 'server.repo_localidad_id';

    /** the column name for the descripcion field */
    const DESCRIPCION = 'server.descripcion';

    /** the column name for the ultimo_reporte field */
    const ULTIMO_REPORTE = 'server.ultimo_reporte';

    /** the column name for the ultimo_reporte_contenido field */
    const ULTIMO_REPORTE_CONTENIDO = 'server.ultimo_reporte_contenido';

    /** the column name for the hash field */
    const HASH = 'server.hash';

    /** the column name for the chequear_replicacion_bd field */
    const CHEQUEAR_REPLICACION_BD = 'server.chequear_replicacion_bd';

    /** the column name for the chequear_moodledata field */
    const CHEQUEAR_MOODLEDATA = 'server.chequear_moodledata';

    /** the column name for the chequear_codigo field */
    const CHEQUEAR_CODIGO = 'server.chequear_codigo';

    /** the column name for the estado_replicacion_bd field */
    const ESTADO_REPLICACION_BD = 'server.estado_replicacion_bd';

    /** the column name for the estado_moodledata field */
    const ESTADO_MOODLEDATA = 'server.estado_moodledata';

    /** the column name for the estado_codigo field */
    const ESTADO_CODIGO = 'server.estado_codigo';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Server objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Server[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ServerPeer::$fieldNames[ServerPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'RepoLocalidadId', 'Descripcion', 'UltimoReporte', 'UltimoReporteContenido', 'Hash', 'ChequearReplicacionBd', 'ChequearMoodledata', 'ChequearCodigo', 'EstadoReplicacionBd', 'EstadoMoodledata', 'EstadoCodigo', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'repoLocalidadId', 'descripcion', 'ultimoReporte', 'ultimoReporteContenido', 'hash', 'chequearReplicacionBd', 'chequearMoodledata', 'chequearCodigo', 'estadoReplicacionBd', 'estadoMoodledata', 'estadoCodigo', ),
        BasePeer::TYPE_COLNAME => array (ServerPeer::ID, ServerPeer::REPO_LOCALIDAD_ID, ServerPeer::DESCRIPCION, ServerPeer::ULTIMO_REPORTE, ServerPeer::ULTIMO_REPORTE_CONTENIDO, ServerPeer::HASH, ServerPeer::CHEQUEAR_REPLICACION_BD, ServerPeer::CHEQUEAR_MOODLEDATA, ServerPeer::CHEQUEAR_CODIGO, ServerPeer::ESTADO_REPLICACION_BD, ServerPeer::ESTADO_MOODLEDATA, ServerPeer::ESTADO_CODIGO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'REPO_LOCALIDAD_ID', 'DESCRIPCION', 'ULTIMO_REPORTE', 'ULTIMO_REPORTE_CONTENIDO', 'HASH', 'CHEQUEAR_REPLICACION_BD', 'CHEQUEAR_MOODLEDATA', 'CHEQUEAR_CODIGO', 'ESTADO_REPLICACION_BD', 'ESTADO_MOODLEDATA', 'ESTADO_CODIGO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'repo_localidad_id', 'descripcion', 'ultimo_reporte', 'ultimo_reporte_contenido', 'hash', 'chequear_replicacion_bd', 'chequear_moodledata', 'chequear_codigo', 'estado_replicacion_bd', 'estado_moodledata', 'estado_codigo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ServerPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RepoLocalidadId' => 1, 'Descripcion' => 2, 'UltimoReporte' => 3, 'UltimoReporteContenido' => 4, 'Hash' => 5, 'ChequearReplicacionBd' => 6, 'ChequearMoodledata' => 7, 'ChequearCodigo' => 8, 'EstadoReplicacionBd' => 9, 'EstadoMoodledata' => 10, 'EstadoCodigo' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'repoLocalidadId' => 1, 'descripcion' => 2, 'ultimoReporte' => 3, 'ultimoReporteContenido' => 4, 'hash' => 5, 'chequearReplicacionBd' => 6, 'chequearMoodledata' => 7, 'chequearCodigo' => 8, 'estadoReplicacionBd' => 9, 'estadoMoodledata' => 10, 'estadoCodigo' => 11, ),
        BasePeer::TYPE_COLNAME => array (ServerPeer::ID => 0, ServerPeer::REPO_LOCALIDAD_ID => 1, ServerPeer::DESCRIPCION => 2, ServerPeer::ULTIMO_REPORTE => 3, ServerPeer::ULTIMO_REPORTE_CONTENIDO => 4, ServerPeer::HASH => 5, ServerPeer::CHEQUEAR_REPLICACION_BD => 6, ServerPeer::CHEQUEAR_MOODLEDATA => 7, ServerPeer::CHEQUEAR_CODIGO => 8, ServerPeer::ESTADO_REPLICACION_BD => 9, ServerPeer::ESTADO_MOODLEDATA => 10, ServerPeer::ESTADO_CODIGO => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'REPO_LOCALIDAD_ID' => 1, 'DESCRIPCION' => 2, 'ULTIMO_REPORTE' => 3, 'ULTIMO_REPORTE_CONTENIDO' => 4, 'HASH' => 5, 'CHEQUEAR_REPLICACION_BD' => 6, 'CHEQUEAR_MOODLEDATA' => 7, 'CHEQUEAR_CODIGO' => 8, 'ESTADO_REPLICACION_BD' => 9, 'ESTADO_MOODLEDATA' => 10, 'ESTADO_CODIGO' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'repo_localidad_id' => 1, 'descripcion' => 2, 'ultimo_reporte' => 3, 'ultimo_reporte_contenido' => 4, 'hash' => 5, 'chequear_replicacion_bd' => 6, 'chequear_moodledata' => 7, 'chequear_codigo' => 8, 'estado_replicacion_bd' => 9, 'estado_moodledata' => 10, 'estado_codigo' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ServerPeer::getFieldNames($toType);
        $key = isset(ServerPeer::$fieldKeys[$fromType][$name]) ? ServerPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ServerPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ServerPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ServerPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ServerPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ServerPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ServerPeer::ID);
            $criteria->addSelectColumn(ServerPeer::REPO_LOCALIDAD_ID);
            $criteria->addSelectColumn(ServerPeer::DESCRIPCION);
            $criteria->addSelectColumn(ServerPeer::ULTIMO_REPORTE);
            $criteria->addSelectColumn(ServerPeer::ULTIMO_REPORTE_CONTENIDO);
            $criteria->addSelectColumn(ServerPeer::HASH);
            $criteria->addSelectColumn(ServerPeer::CHEQUEAR_REPLICACION_BD);
            $criteria->addSelectColumn(ServerPeer::CHEQUEAR_MOODLEDATA);
            $criteria->addSelectColumn(ServerPeer::CHEQUEAR_CODIGO);
            $criteria->addSelectColumn(ServerPeer::ESTADO_REPLICACION_BD);
            $criteria->addSelectColumn(ServerPeer::ESTADO_MOODLEDATA);
            $criteria->addSelectColumn(ServerPeer::ESTADO_CODIGO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.repo_localidad_id');
            $criteria->addSelectColumn($alias . '.descripcion');
            $criteria->addSelectColumn($alias . '.ultimo_reporte');
            $criteria->addSelectColumn($alias . '.ultimo_reporte_contenido');
            $criteria->addSelectColumn($alias . '.hash');
            $criteria->addSelectColumn($alias . '.chequear_replicacion_bd');
            $criteria->addSelectColumn($alias . '.chequear_moodledata');
            $criteria->addSelectColumn($alias . '.chequear_codigo');
            $criteria->addSelectColumn($alias . '.estado_replicacion_bd');
            $criteria->addSelectColumn($alias . '.estado_moodledata');
            $criteria->addSelectColumn($alias . '.estado_codigo');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ServerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ServerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ServerPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseServerPeer', $criteria, $con);
        }

        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Server
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ServerPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ServerPeer::populateObjects(ServerPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ServerPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ServerPeer::DATABASE_NAME);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseServerPeer', $criteria, $con);
        }


        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Server $obj A Server object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            ServerPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Server object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Server) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Server object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ServerPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Server Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ServerPeer::$instances[$key])) {
                return ServerPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references)
      {
        foreach (ServerPeer::$instances as $instance)
        {
          $instance->clearAllReferences(true);
        }
      }
        ServerPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to server
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ServerPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ServerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ServerPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ServerPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Server object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ServerPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ServerPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ServerPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ServerPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ServerPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related RepoLocalidad table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRepoLocalidad(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ServerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ServerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ServerPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ServerPeer::REPO_LOCALIDAD_ID, RepoLocalidadPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseServerPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Server objects pre-filled with their RepoLocalidad objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Server objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRepoLocalidad(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ServerPeer::DATABASE_NAME);
        }

        ServerPeer::addSelectColumns($criteria);
        $startcol = ServerPeer::NUM_HYDRATE_COLUMNS;
        RepoLocalidadPeer::addSelectColumns($criteria);

        $criteria->addJoin(ServerPeer::REPO_LOCALIDAD_ID, RepoLocalidadPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseServerPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ServerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ServerPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ServerPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ServerPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RepoLocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RepoLocalidadPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RepoLocalidadPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RepoLocalidadPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Server) to $obj2 (RepoLocalidad)
                $obj2->addServer($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ServerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ServerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ServerPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ServerPeer::REPO_LOCALIDAD_ID, RepoLocalidadPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseServerPeer', $criteria, $con);
        }

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Server objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Server objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ServerPeer::DATABASE_NAME);
        }

        ServerPeer::addSelectColumns($criteria);
        $startcol2 = ServerPeer::NUM_HYDRATE_COLUMNS;

        RepoLocalidadPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RepoLocalidadPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ServerPeer::REPO_LOCALIDAD_ID, RepoLocalidadPeer::ID, $join_behavior);

        // symfony_behaviors behavior
        foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
        {
          call_user_func($sf_hook, 'BaseServerPeer', $criteria, $con);
        }

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ServerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ServerPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ServerPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ServerPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined RepoLocalidad rows

            $key2 = RepoLocalidadPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RepoLocalidadPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RepoLocalidadPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RepoLocalidadPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Server) to the collection in $obj2 (RepoLocalidad)
                $obj2->addServer($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ServerPeer::DATABASE_NAME)->getTable(ServerPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseServerPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseServerPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new ServerTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ServerPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Server or Criteria object.
     *
     * @param      mixed $values Criteria or Server object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Server object
        }

        if ($criteria->containsKey(ServerPeer::ID) && $criteria->keyContainsValue(ServerPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ServerPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ServerPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Server or Criteria object.
     *
     * @param      mixed $values Criteria or Server object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ServerPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ServerPeer::ID);
            $value = $criteria->remove(ServerPeer::ID);
            if ($value) {
                $selectCriteria->add(ServerPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ServerPeer::TABLE_NAME);
            }

        } else { // $values is Server object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ServerPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the server table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ServerPeer::TABLE_NAME, $con, ServerPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ServerPeer::clearInstancePool();
            ServerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Server or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Server object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ServerPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Server) { // it's a model object
            // invalidate the cache for this single object
            ServerPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ServerPeer::DATABASE_NAME);
            $criteria->add(ServerPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ServerPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ServerPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ServerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Server object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Server $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ServerPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ServerPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ServerPeer::DATABASE_NAME, ServerPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Server
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ServerPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ServerPeer::DATABASE_NAME);
        $criteria->add(ServerPeer::ID, $pk);

        $v = ServerPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Server[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ServerPeer::DATABASE_NAME);
            $criteria->add(ServerPeer::ID, $pks, Criteria::IN);
            $objs = ServerPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

    // symfony behavior

    /**
     * Returns an array of arrays that contain columns in each unique index.
     *
     * @return array
     */
    static public function getUniqueColumnNames()
    {
      return array();
    }

    // symfony_behaviors behavior

    /**
     * Returns the name of the hook to call from inside the supplied method.
     *
     * @param string $method The calling method
     *
     * @return string A hook name for {@link sfMixer}
     *
     * @throws LogicException If the method name is not recognized
     */
    static private function getMixerPreSelectHook($method)
    {
      if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
      {
        return sprintf('BaseServerPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
      }

      throw new LogicException(sprintf('Unrecognized function "%s"', $method));
    }

} // BaseServerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseServerPeer::buildTableMap();

