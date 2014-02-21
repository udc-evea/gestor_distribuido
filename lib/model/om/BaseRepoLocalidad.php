<?php


/**
 * Base class that represents a row from the 'repo_localidad' table.
 *
 *
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRepoLocalidad extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'RepoLocalidadPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        RepoLocalidadPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the codigo_provincia field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $codigo_provincia;

    /**
     * The value for the localidad field.
     * @var        string
     */
    protected $localidad;

    /**
     * The value for the codigopostal field.
     * @var        string
     */
    protected $codigopostal;

    /**
     * The value for the codigotelarea field.
     * @var        string
     */
    protected $codigotelarea;

    /**
     * The value for the latitud field.
     * @var        string
     */
    protected $latitud;

    /**
     * The value for the longitud field.
     * @var        string
     */
    protected $longitud;

    /**
     * @var        RepoProvincia
     */
    protected $aRepoProvincia;

    /**
     * @var        PropelObjectCollection|Server[] Collection to store aggregation of Server objects.
     */
    protected $collServers;
    protected $collServersPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $serversScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->codigo_provincia = '';
    }

    /**
     * Initializes internal state of BaseRepoLocalidad object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [codigo_provincia] column value.
     *
     * @return string
     */
    public function getCodigoProvincia()
    {
        return $this->codigo_provincia;
    }

    /**
     * Get the [localidad] column value.
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Get the [codigopostal] column value.
     *
     * @return string
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Get the [codigotelarea] column value.
     *
     * @return string
     */
    public function getCodigotelarea()
    {
        return $this->codigotelarea;
    }

    /**
     * Get the [latitud] column value.
     *
     * @return string
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Get the [longitud] column value.
     *
     * @return string
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [codigo_provincia] column.
     *
     * @param string $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setCodigoProvincia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codigo_provincia !== $v) {
            $this->codigo_provincia = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::CODIGO_PROVINCIA;
        }

        if ($this->aRepoProvincia !== null && $this->aRepoProvincia->getId() !== $v) {
            $this->aRepoProvincia = null;
        }


        return $this;
    } // setCodigoProvincia()

    /**
     * Set the value of [localidad] column.
     *
     * @param string $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setLocalidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localidad !== $v) {
            $this->localidad = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::LOCALIDAD;
        }


        return $this;
    } // setLocalidad()

    /**
     * Set the value of [codigopostal] column.
     *
     * @param string $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setCodigopostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codigopostal !== $v) {
            $this->codigopostal = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::CODIGOPOSTAL;
        }


        return $this;
    } // setCodigopostal()

    /**
     * Set the value of [codigotelarea] column.
     *
     * @param string $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setCodigotelarea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codigotelarea !== $v) {
            $this->codigotelarea = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::CODIGOTELAREA;
        }


        return $this;
    } // setCodigotelarea()

    /**
     * Set the value of [latitud] column.
     *
     * @param string $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setLatitud($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->latitud !== $v) {
            $this->latitud = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::LATITUD;
        }


        return $this;
    } // setLatitud()

    /**
     * Set the value of [longitud] column.
     *
     * @param string $v new value
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setLongitud($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->longitud !== $v) {
            $this->longitud = $v;
            $this->modifiedColumns[] = RepoLocalidadPeer::LONGITUD;
        }


        return $this;
    } // setLongitud()

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
            if ($this->codigo_provincia !== '') {
                return false;
            }

        // otherwise, everything was equal, so return true
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
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->codigo_provincia = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->localidad = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->codigopostal = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->codigotelarea = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->latitud = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->longitud = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 7; // 7 = RepoLocalidadPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating RepoLocalidad object", $e);
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

        if ($this->aRepoProvincia !== null && $this->codigo_provincia !== $this->aRepoProvincia->getId()) {
            $this->aRepoProvincia = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(RepoLocalidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = RepoLocalidadPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRepoProvincia = null;
            $this->collServers = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(RepoLocalidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = RepoLocalidadQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseRepoLocalidad:delete:pre') as $callable)
            {
              if (call_user_func($callable, $this, $con))
              {
                $con->commit();
                return;
              }
            }

            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseRepoLocalidad:delete:post') as $callable)
                {
                  call_user_func($callable, $this, $con);
                }

                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(RepoLocalidadPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseRepoLocalidad:save:pre') as $callable)
            {
              if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
              {
                  $con->commit();
                return $affectedRows;
              }
            }

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
                // symfony_behaviors behavior
                foreach (sfMixer::getCallables('BaseRepoLocalidad:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                RepoLocalidadPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aRepoProvincia !== null) {
                if ($this->aRepoProvincia->isModified() || $this->aRepoProvincia->isNew()) {
                    $affectedRows += $this->aRepoProvincia->save($con);
                }
                $this->setRepoProvincia($this->aRepoProvincia);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->serversScheduledForDeletion !== null) {
                if (!$this->serversScheduledForDeletion->isEmpty()) {
                    ServerQuery::create()
                        ->filterByPrimaryKeys($this->serversScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->serversScheduledForDeletion = null;
                }
            }

            if ($this->collServers !== null) {
                foreach ($this->collServers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = RepoLocalidadPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . RepoLocalidadPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(RepoLocalidadPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(RepoLocalidadPeer::CODIGO_PROVINCIA)) {
            $modifiedColumns[':p' . $index++]  = '`codigo_provincia`';
        }
        if ($this->isColumnModified(RepoLocalidadPeer::LOCALIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`localidad`';
        }
        if ($this->isColumnModified(RepoLocalidadPeer::CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`codigoPostal`';
        }
        if ($this->isColumnModified(RepoLocalidadPeer::CODIGOTELAREA)) {
            $modifiedColumns[':p' . $index++]  = '`codigoTelArea`';
        }
        if ($this->isColumnModified(RepoLocalidadPeer::LATITUD)) {
            $modifiedColumns[':p' . $index++]  = '`latitud`';
        }
        if ($this->isColumnModified(RepoLocalidadPeer::LONGITUD)) {
            $modifiedColumns[':p' . $index++]  = '`longitud`';
        }

        $sql = sprintf(
            'INSERT INTO `repo_localidad` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`codigo_provincia`':
                        $stmt->bindValue($identifier, $this->codigo_provincia, PDO::PARAM_STR);
                        break;
                    case '`localidad`':
                        $stmt->bindValue($identifier, $this->localidad, PDO::PARAM_STR);
                        break;
                    case '`codigoPostal`':
                        $stmt->bindValue($identifier, $this->codigopostal, PDO::PARAM_STR);
                        break;
                    case '`codigoTelArea`':
                        $stmt->bindValue($identifier, $this->codigotelarea, PDO::PARAM_STR);
                        break;
                    case '`latitud`':
                        $stmt->bindValue($identifier, $this->latitud, PDO::PARAM_STR);
                        break;
                    case '`longitud`':
                        $stmt->bindValue($identifier, $this->longitud, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aRepoProvincia !== null) {
                if (!$this->aRepoProvincia->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRepoProvincia->getValidationFailures());
                }
            }


            if (($retval = RepoLocalidadPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collServers !== null) {
                    foreach ($this->collServers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = RepoLocalidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getCodigoProvincia();
                break;
            case 2:
                return $this->getLocalidad();
                break;
            case 3:
                return $this->getCodigopostal();
                break;
            case 4:
                return $this->getCodigotelarea();
                break;
            case 5:
                return $this->getLatitud();
                break;
            case 6:
                return $this->getLongitud();
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
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['RepoLocalidad'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['RepoLocalidad'][$this->getPrimaryKey()] = true;
        $keys = RepoLocalidadPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCodigoProvincia(),
            $keys[2] => $this->getLocalidad(),
            $keys[3] => $this->getCodigopostal(),
            $keys[4] => $this->getCodigotelarea(),
            $keys[5] => $this->getLatitud(),
            $keys[6] => $this->getLongitud(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aRepoProvincia) {
                $result['RepoProvincia'] = $this->aRepoProvincia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collServers) {
                $result['Servers'] = $this->collServers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = RepoLocalidadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setCodigoProvincia($value);
                break;
            case 2:
                $this->setLocalidad($value);
                break;
            case 3:
                $this->setCodigopostal($value);
                break;
            case 4:
                $this->setCodigotelarea($value);
                break;
            case 5:
                $this->setLatitud($value);
                break;
            case 6:
                $this->setLongitud($value);
                break;
        } // switch()
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
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = RepoLocalidadPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCodigoProvincia($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLocalidad($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCodigopostal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCodigotelarea($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLatitud($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLongitud($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(RepoLocalidadPeer::DATABASE_NAME);

        if ($this->isColumnModified(RepoLocalidadPeer::ID)) $criteria->add(RepoLocalidadPeer::ID, $this->id);
        if ($this->isColumnModified(RepoLocalidadPeer::CODIGO_PROVINCIA)) $criteria->add(RepoLocalidadPeer::CODIGO_PROVINCIA, $this->codigo_provincia);
        if ($this->isColumnModified(RepoLocalidadPeer::LOCALIDAD)) $criteria->add(RepoLocalidadPeer::LOCALIDAD, $this->localidad);
        if ($this->isColumnModified(RepoLocalidadPeer::CODIGOPOSTAL)) $criteria->add(RepoLocalidadPeer::CODIGOPOSTAL, $this->codigopostal);
        if ($this->isColumnModified(RepoLocalidadPeer::CODIGOTELAREA)) $criteria->add(RepoLocalidadPeer::CODIGOTELAREA, $this->codigotelarea);
        if ($this->isColumnModified(RepoLocalidadPeer::LATITUD)) $criteria->add(RepoLocalidadPeer::LATITUD, $this->latitud);
        if ($this->isColumnModified(RepoLocalidadPeer::LONGITUD)) $criteria->add(RepoLocalidadPeer::LONGITUD, $this->longitud);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(RepoLocalidadPeer::DATABASE_NAME);
        $criteria->add(RepoLocalidadPeer::ID, $this->id);

        return $criteria;
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
     * @param  int $key Primary key.
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
     * @param object $copyObj An object of RepoLocalidad (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCodigoProvincia($this->getCodigoProvincia());
        $copyObj->setLocalidad($this->getLocalidad());
        $copyObj->setCodigopostal($this->getCodigopostal());
        $copyObj->setCodigotelarea($this->getCodigotelarea());
        $copyObj->setLatitud($this->getLatitud());
        $copyObj->setLongitud($this->getLongitud());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getServers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addServer($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return RepoLocalidad Clone of current object.
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
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return RepoLocalidadPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new RepoLocalidadPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a RepoProvincia object.
     *
     * @param             RepoProvincia $v
     * @return RepoLocalidad The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRepoProvincia(RepoProvincia $v = null)
    {
        if ($v === null) {
            $this->setCodigoProvincia('');
        } else {
            $this->setCodigoProvincia($v->getId());
        }

        $this->aRepoProvincia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the RepoProvincia object, it will not be re-added.
        if ($v !== null) {
            $v->addRepoLocalidad($this);
        }


        return $this;
    }


    /**
     * Get the associated RepoProvincia object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return RepoProvincia The associated RepoProvincia object.
     * @throws PropelException
     */
    public function getRepoProvincia(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRepoProvincia === null && (($this->codigo_provincia !== "" && $this->codigo_provincia !== null)) && $doQuery) {
            $this->aRepoProvincia = RepoProvinciaQuery::create()->findPk($this->codigo_provincia, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRepoProvincia->addRepoLocalidads($this);
             */
        }

        return $this->aRepoProvincia;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Server' == $relationName) {
            $this->initServers();
        }
    }

    /**
     * Clears out the collServers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return RepoLocalidad The current object (for fluent API support)
     * @see        addServers()
     */
    public function clearServers()
    {
        $this->collServers = null; // important to set this to null since that means it is uninitialized
        $this->collServersPartial = null;

        return $this;
    }

    /**
     * reset is the collServers collection loaded partially
     *
     * @return void
     */
    public function resetPartialServers($v = true)
    {
        $this->collServersPartial = $v;
    }

    /**
     * Initializes the collServers collection.
     *
     * By default this just sets the collServers collection to an empty array (like clearcollServers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initServers($overrideExisting = true)
    {
        if (null !== $this->collServers && !$overrideExisting) {
            return;
        }
        $this->collServers = new PropelObjectCollection();
        $this->collServers->setModel('Server');
    }

    /**
     * Gets an array of Server objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this RepoLocalidad is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Server[] List of Server objects
     * @throws PropelException
     */
    public function getServers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collServersPartial && !$this->isNew();
        if (null === $this->collServers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collServers) {
                // return empty collection
                $this->initServers();
            } else {
                $collServers = ServerQuery::create(null, $criteria)
                    ->filterByRepoLocalidad($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collServersPartial && count($collServers)) {
                      $this->initServers(false);

                      foreach($collServers as $obj) {
                        if (false == $this->collServers->contains($obj)) {
                          $this->collServers->append($obj);
                        }
                      }

                      $this->collServersPartial = true;
                    }

                    $collServers->getInternalIterator()->rewind();
                    return $collServers;
                }

                if($partial && $this->collServers) {
                    foreach($this->collServers as $obj) {
                        if($obj->isNew()) {
                            $collServers[] = $obj;
                        }
                    }
                }

                $this->collServers = $collServers;
                $this->collServersPartial = false;
            }
        }

        return $this->collServers;
    }

    /**
     * Sets a collection of Server objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $servers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function setServers(PropelCollection $servers, PropelPDO $con = null)
    {
        $serversToDelete = $this->getServers(new Criteria(), $con)->diff($servers);

        $this->serversScheduledForDeletion = unserialize(serialize($serversToDelete));

        foreach ($serversToDelete as $serverRemoved) {
            $serverRemoved->setRepoLocalidad(null);
        }

        $this->collServers = null;
        foreach ($servers as $server) {
            $this->addServer($server);
        }

        $this->collServers = $servers;
        $this->collServersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Server objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Server objects.
     * @throws PropelException
     */
    public function countServers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collServersPartial && !$this->isNew();
        if (null === $this->collServers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collServers) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getServers());
            }
            $query = ServerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByRepoLocalidad($this)
                ->count($con);
        }

        return count($this->collServers);
    }

    /**
     * Method called to associate a Server object to this object
     * through the Server foreign key attribute.
     *
     * @param    Server $l Server
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function addServer(Server $l)
    {
        if ($this->collServers === null) {
            $this->initServers();
            $this->collServersPartial = true;
        }
        if (!in_array($l, $this->collServers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddServer($l);
        }

        return $this;
    }

    /**
     * @param	Server $server The server object to add.
     */
    protected function doAddServer($server)
    {
        $this->collServers[]= $server;
        $server->setRepoLocalidad($this);
    }

    /**
     * @param	Server $server The server object to remove.
     * @return RepoLocalidad The current object (for fluent API support)
     */
    public function removeServer($server)
    {
        if ($this->getServers()->contains($server)) {
            $this->collServers->remove($this->collServers->search($server));
            if (null === $this->serversScheduledForDeletion) {
                $this->serversScheduledForDeletion = clone $this->collServers;
                $this->serversScheduledForDeletion->clear();
            }
            $this->serversScheduledForDeletion[]= clone $server;
            $server->setRepoLocalidad(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->codigo_provincia = null;
        $this->localidad = null;
        $this->codigopostal = null;
        $this->codigotelarea = null;
        $this->latitud = null;
        $this->longitud = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collServers) {
                foreach ($this->collServers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRepoProvincia instanceof Persistent) {
              $this->aRepoProvincia->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collServers instanceof PropelCollection) {
            $this->collServers->clearIterator();
        }
        $this->collServers = null;
        $this->aRepoProvincia = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string The value of the 'localidad' column
     */
    public function __toString()
    {
        return (string) $this->getLocalidad();
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    /**
     * Catches calls to virtual methods
     */
    public function __call($name, $params)
    {

        // symfony_behaviors behavior
        if ($callable = sfMixer::getCallable('BaseRepoLocalidad:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
