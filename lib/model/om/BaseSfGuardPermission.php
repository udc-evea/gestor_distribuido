<?php


/**
 * Base class that represents a row from the 'sf_guard_permission' table.
 *
 *
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSfGuardPermission extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SfGuardPermissionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SfGuardPermissionPeer
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
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * @var        PropelObjectCollection|SfGuardGroupPermission[] Collection to store aggregation of SfGuardGroupPermission objects.
     */
    protected $collSfGuardGroupPermissions;
    protected $collSfGuardGroupPermissionsPartial;

    /**
     * @var        PropelObjectCollection|SfGuardUserPermission[] Collection to store aggregation of SfGuardUserPermission objects.
     */
    protected $collSfGuardUserPermissions;
    protected $collSfGuardUserPermissionsPartial;

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
    protected $sfGuardGroupPermissionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sfGuardUserPermissionsScheduledForDeletion = null;

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
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = SfGuardPermissionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = SfGuardPermissionPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = SfGuardPermissionPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

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
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 3; // 3 = SfGuardPermissionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SfGuardPermission object", $e);
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
            $con = Propel::getConnection(SfGuardPermissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SfGuardPermissionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSfGuardGroupPermissions = null;

            $this->collSfGuardUserPermissions = null;

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
            $con = Propel::getConnection(SfGuardPermissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SfGuardPermissionQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseSfGuardPermission:delete:pre') as $callable)
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
                foreach (sfMixer::getCallables('BaseSfGuardPermission:delete:post') as $callable)
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
            $con = Propel::getConnection(SfGuardPermissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            // symfony_behaviors behavior
            foreach (sfMixer::getCallables('BaseSfGuardPermission:save:pre') as $callable)
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
                foreach (sfMixer::getCallables('BaseSfGuardPermission:save:post') as $callable)
                {
                  call_user_func($callable, $this, $con, $affectedRows);
                }

                SfGuardPermissionPeer::addInstanceToPool($this);
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

            if ($this->sfGuardGroupPermissionsScheduledForDeletion !== null) {
                if (!$this->sfGuardGroupPermissionsScheduledForDeletion->isEmpty()) {
                    SfGuardGroupPermissionQuery::create()
                        ->filterByPrimaryKeys($this->sfGuardGroupPermissionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sfGuardGroupPermissionsScheduledForDeletion = null;
                }
            }

            if ($this->collSfGuardGroupPermissions !== null) {
                foreach ($this->collSfGuardGroupPermissions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->sfGuardUserPermissionsScheduledForDeletion !== null) {
                if (!$this->sfGuardUserPermissionsScheduledForDeletion->isEmpty()) {
                    SfGuardUserPermissionQuery::create()
                        ->filterByPrimaryKeys($this->sfGuardUserPermissionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sfGuardUserPermissionsScheduledForDeletion = null;
                }
            }

            if ($this->collSfGuardUserPermissions !== null) {
                foreach ($this->collSfGuardUserPermissions as $referrerFK) {
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

        $this->modifiedColumns[] = SfGuardPermissionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SfGuardPermissionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SfGuardPermissionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(SfGuardPermissionPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SfGuardPermissionPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }

        $sql = sprintf(
            'INSERT INTO `sf_guard_permission` (%s) VALUES (%s)',
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
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
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


            if (($retval = SfGuardPermissionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSfGuardGroupPermissions !== null) {
                    foreach ($this->collSfGuardGroupPermissions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSfGuardUserPermissions !== null) {
                    foreach ($this->collSfGuardUserPermissions as $referrerFK) {
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
        $pos = SfGuardPermissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getName();
                break;
            case 2:
                return $this->getDescription();
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
        if (isset($alreadyDumpedObjects['SfGuardPermission'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SfGuardPermission'][$this->getPrimaryKey()] = true;
        $keys = SfGuardPermissionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getDescription(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collSfGuardGroupPermissions) {
                $result['SfGuardGroupPermissions'] = $this->collSfGuardGroupPermissions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSfGuardUserPermissions) {
                $result['SfGuardUserPermissions'] = $this->collSfGuardUserPermissions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SfGuardPermissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setName($value);
                break;
            case 2:
                $this->setDescription($value);
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
        $keys = SfGuardPermissionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SfGuardPermissionPeer::DATABASE_NAME);

        if ($this->isColumnModified(SfGuardPermissionPeer::ID)) $criteria->add(SfGuardPermissionPeer::ID, $this->id);
        if ($this->isColumnModified(SfGuardPermissionPeer::NAME)) $criteria->add(SfGuardPermissionPeer::NAME, $this->name);
        if ($this->isColumnModified(SfGuardPermissionPeer::DESCRIPTION)) $criteria->add(SfGuardPermissionPeer::DESCRIPTION, $this->description);

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
        $criteria = new Criteria(SfGuardPermissionPeer::DATABASE_NAME);
        $criteria->add(SfGuardPermissionPeer::ID, $this->id);

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
     * @param object $copyObj An object of SfGuardPermission (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSfGuardGroupPermissions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSfGuardGroupPermission($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSfGuardUserPermissions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSfGuardUserPermission($relObj->copy($deepCopy));
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
     * @return SfGuardPermission Clone of current object.
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
     * @return SfGuardPermissionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SfGuardPermissionPeer();
        }

        return self::$peer;
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
        if ('SfGuardGroupPermission' == $relationName) {
            $this->initSfGuardGroupPermissions();
        }
        if ('SfGuardUserPermission' == $relationName) {
            $this->initSfGuardUserPermissions();
        }
    }

    /**
     * Clears out the collSfGuardGroupPermissions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return SfGuardPermission The current object (for fluent API support)
     * @see        addSfGuardGroupPermissions()
     */
    public function clearSfGuardGroupPermissions()
    {
        $this->collSfGuardGroupPermissions = null; // important to set this to null since that means it is uninitialized
        $this->collSfGuardGroupPermissionsPartial = null;

        return $this;
    }

    /**
     * reset is the collSfGuardGroupPermissions collection loaded partially
     *
     * @return void
     */
    public function resetPartialSfGuardGroupPermissions($v = true)
    {
        $this->collSfGuardGroupPermissionsPartial = $v;
    }

    /**
     * Initializes the collSfGuardGroupPermissions collection.
     *
     * By default this just sets the collSfGuardGroupPermissions collection to an empty array (like clearcollSfGuardGroupPermissions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSfGuardGroupPermissions($overrideExisting = true)
    {
        if (null !== $this->collSfGuardGroupPermissions && !$overrideExisting) {
            return;
        }
        $this->collSfGuardGroupPermissions = new PropelObjectCollection();
        $this->collSfGuardGroupPermissions->setModel('SfGuardGroupPermission');
    }

    /**
     * Gets an array of SfGuardGroupPermission objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SfGuardPermission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SfGuardGroupPermission[] List of SfGuardGroupPermission objects
     * @throws PropelException
     */
    public function getSfGuardGroupPermissions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSfGuardGroupPermissionsPartial && !$this->isNew();
        if (null === $this->collSfGuardGroupPermissions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSfGuardGroupPermissions) {
                // return empty collection
                $this->initSfGuardGroupPermissions();
            } else {
                $collSfGuardGroupPermissions = SfGuardGroupPermissionQuery::create(null, $criteria)
                    ->filterBySfGuardPermission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSfGuardGroupPermissionsPartial && count($collSfGuardGroupPermissions)) {
                      $this->initSfGuardGroupPermissions(false);

                      foreach($collSfGuardGroupPermissions as $obj) {
                        if (false == $this->collSfGuardGroupPermissions->contains($obj)) {
                          $this->collSfGuardGroupPermissions->append($obj);
                        }
                      }

                      $this->collSfGuardGroupPermissionsPartial = true;
                    }

                    $collSfGuardGroupPermissions->getInternalIterator()->rewind();
                    return $collSfGuardGroupPermissions;
                }

                if($partial && $this->collSfGuardGroupPermissions) {
                    foreach($this->collSfGuardGroupPermissions as $obj) {
                        if($obj->isNew()) {
                            $collSfGuardGroupPermissions[] = $obj;
                        }
                    }
                }

                $this->collSfGuardGroupPermissions = $collSfGuardGroupPermissions;
                $this->collSfGuardGroupPermissionsPartial = false;
            }
        }

        return $this->collSfGuardGroupPermissions;
    }

    /**
     * Sets a collection of SfGuardGroupPermission objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sfGuardGroupPermissions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function setSfGuardGroupPermissions(PropelCollection $sfGuardGroupPermissions, PropelPDO $con = null)
    {
        $sfGuardGroupPermissionsToDelete = $this->getSfGuardGroupPermissions(new Criteria(), $con)->diff($sfGuardGroupPermissions);

        $this->sfGuardGroupPermissionsScheduledForDeletion = unserialize(serialize($sfGuardGroupPermissionsToDelete));

        foreach ($sfGuardGroupPermissionsToDelete as $sfGuardGroupPermissionRemoved) {
            $sfGuardGroupPermissionRemoved->setSfGuardPermission(null);
        }

        $this->collSfGuardGroupPermissions = null;
        foreach ($sfGuardGroupPermissions as $sfGuardGroupPermission) {
            $this->addSfGuardGroupPermission($sfGuardGroupPermission);
        }

        $this->collSfGuardGroupPermissions = $sfGuardGroupPermissions;
        $this->collSfGuardGroupPermissionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SfGuardGroupPermission objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SfGuardGroupPermission objects.
     * @throws PropelException
     */
    public function countSfGuardGroupPermissions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSfGuardGroupPermissionsPartial && !$this->isNew();
        if (null === $this->collSfGuardGroupPermissions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSfGuardGroupPermissions) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getSfGuardGroupPermissions());
            }
            $query = SfGuardGroupPermissionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySfGuardPermission($this)
                ->count($con);
        }

        return count($this->collSfGuardGroupPermissions);
    }

    /**
     * Method called to associate a SfGuardGroupPermission object to this object
     * through the SfGuardGroupPermission foreign key attribute.
     *
     * @param    SfGuardGroupPermission $l SfGuardGroupPermission
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function addSfGuardGroupPermission(SfGuardGroupPermission $l)
    {
        if ($this->collSfGuardGroupPermissions === null) {
            $this->initSfGuardGroupPermissions();
            $this->collSfGuardGroupPermissionsPartial = true;
        }
        if (!in_array($l, $this->collSfGuardGroupPermissions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSfGuardGroupPermission($l);
        }

        return $this;
    }

    /**
     * @param	SfGuardGroupPermission $sfGuardGroupPermission The sfGuardGroupPermission object to add.
     */
    protected function doAddSfGuardGroupPermission($sfGuardGroupPermission)
    {
        $this->collSfGuardGroupPermissions[]= $sfGuardGroupPermission;
        $sfGuardGroupPermission->setSfGuardPermission($this);
    }

    /**
     * @param	SfGuardGroupPermission $sfGuardGroupPermission The sfGuardGroupPermission object to remove.
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function removeSfGuardGroupPermission($sfGuardGroupPermission)
    {
        if ($this->getSfGuardGroupPermissions()->contains($sfGuardGroupPermission)) {
            $this->collSfGuardGroupPermissions->remove($this->collSfGuardGroupPermissions->search($sfGuardGroupPermission));
            if (null === $this->sfGuardGroupPermissionsScheduledForDeletion) {
                $this->sfGuardGroupPermissionsScheduledForDeletion = clone $this->collSfGuardGroupPermissions;
                $this->sfGuardGroupPermissionsScheduledForDeletion->clear();
            }
            $this->sfGuardGroupPermissionsScheduledForDeletion[]= clone $sfGuardGroupPermission;
            $sfGuardGroupPermission->setSfGuardPermission(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SfGuardPermission is new, it will return
     * an empty collection; or if this SfGuardPermission has previously
     * been saved, it will retrieve related SfGuardGroupPermissions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SfGuardPermission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|SfGuardGroupPermission[] List of SfGuardGroupPermission objects
     */
    public function getSfGuardGroupPermissionsJoinSfGuardGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SfGuardGroupPermissionQuery::create(null, $criteria);
        $query->joinWith('SfGuardGroup', $join_behavior);

        return $this->getSfGuardGroupPermissions($query, $con);
    }

    /**
     * Clears out the collSfGuardUserPermissions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return SfGuardPermission The current object (for fluent API support)
     * @see        addSfGuardUserPermissions()
     */
    public function clearSfGuardUserPermissions()
    {
        $this->collSfGuardUserPermissions = null; // important to set this to null since that means it is uninitialized
        $this->collSfGuardUserPermissionsPartial = null;

        return $this;
    }

    /**
     * reset is the collSfGuardUserPermissions collection loaded partially
     *
     * @return void
     */
    public function resetPartialSfGuardUserPermissions($v = true)
    {
        $this->collSfGuardUserPermissionsPartial = $v;
    }

    /**
     * Initializes the collSfGuardUserPermissions collection.
     *
     * By default this just sets the collSfGuardUserPermissions collection to an empty array (like clearcollSfGuardUserPermissions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSfGuardUserPermissions($overrideExisting = true)
    {
        if (null !== $this->collSfGuardUserPermissions && !$overrideExisting) {
            return;
        }
        $this->collSfGuardUserPermissions = new PropelObjectCollection();
        $this->collSfGuardUserPermissions->setModel('SfGuardUserPermission');
    }

    /**
     * Gets an array of SfGuardUserPermission objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SfGuardPermission is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SfGuardUserPermission[] List of SfGuardUserPermission objects
     * @throws PropelException
     */
    public function getSfGuardUserPermissions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSfGuardUserPermissionsPartial && !$this->isNew();
        if (null === $this->collSfGuardUserPermissions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSfGuardUserPermissions) {
                // return empty collection
                $this->initSfGuardUserPermissions();
            } else {
                $collSfGuardUserPermissions = SfGuardUserPermissionQuery::create(null, $criteria)
                    ->filterBySfGuardPermission($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSfGuardUserPermissionsPartial && count($collSfGuardUserPermissions)) {
                      $this->initSfGuardUserPermissions(false);

                      foreach($collSfGuardUserPermissions as $obj) {
                        if (false == $this->collSfGuardUserPermissions->contains($obj)) {
                          $this->collSfGuardUserPermissions->append($obj);
                        }
                      }

                      $this->collSfGuardUserPermissionsPartial = true;
                    }

                    $collSfGuardUserPermissions->getInternalIterator()->rewind();
                    return $collSfGuardUserPermissions;
                }

                if($partial && $this->collSfGuardUserPermissions) {
                    foreach($this->collSfGuardUserPermissions as $obj) {
                        if($obj->isNew()) {
                            $collSfGuardUserPermissions[] = $obj;
                        }
                    }
                }

                $this->collSfGuardUserPermissions = $collSfGuardUserPermissions;
                $this->collSfGuardUserPermissionsPartial = false;
            }
        }

        return $this->collSfGuardUserPermissions;
    }

    /**
     * Sets a collection of SfGuardUserPermission objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sfGuardUserPermissions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function setSfGuardUserPermissions(PropelCollection $sfGuardUserPermissions, PropelPDO $con = null)
    {
        $sfGuardUserPermissionsToDelete = $this->getSfGuardUserPermissions(new Criteria(), $con)->diff($sfGuardUserPermissions);

        $this->sfGuardUserPermissionsScheduledForDeletion = unserialize(serialize($sfGuardUserPermissionsToDelete));

        foreach ($sfGuardUserPermissionsToDelete as $sfGuardUserPermissionRemoved) {
            $sfGuardUserPermissionRemoved->setSfGuardPermission(null);
        }

        $this->collSfGuardUserPermissions = null;
        foreach ($sfGuardUserPermissions as $sfGuardUserPermission) {
            $this->addSfGuardUserPermission($sfGuardUserPermission);
        }

        $this->collSfGuardUserPermissions = $sfGuardUserPermissions;
        $this->collSfGuardUserPermissionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SfGuardUserPermission objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SfGuardUserPermission objects.
     * @throws PropelException
     */
    public function countSfGuardUserPermissions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSfGuardUserPermissionsPartial && !$this->isNew();
        if (null === $this->collSfGuardUserPermissions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSfGuardUserPermissions) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getSfGuardUserPermissions());
            }
            $query = SfGuardUserPermissionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySfGuardPermission($this)
                ->count($con);
        }

        return count($this->collSfGuardUserPermissions);
    }

    /**
     * Method called to associate a SfGuardUserPermission object to this object
     * through the SfGuardUserPermission foreign key attribute.
     *
     * @param    SfGuardUserPermission $l SfGuardUserPermission
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function addSfGuardUserPermission(SfGuardUserPermission $l)
    {
        if ($this->collSfGuardUserPermissions === null) {
            $this->initSfGuardUserPermissions();
            $this->collSfGuardUserPermissionsPartial = true;
        }
        if (!in_array($l, $this->collSfGuardUserPermissions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSfGuardUserPermission($l);
        }

        return $this;
    }

    /**
     * @param	SfGuardUserPermission $sfGuardUserPermission The sfGuardUserPermission object to add.
     */
    protected function doAddSfGuardUserPermission($sfGuardUserPermission)
    {
        $this->collSfGuardUserPermissions[]= $sfGuardUserPermission;
        $sfGuardUserPermission->setSfGuardPermission($this);
    }

    /**
     * @param	SfGuardUserPermission $sfGuardUserPermission The sfGuardUserPermission object to remove.
     * @return SfGuardPermission The current object (for fluent API support)
     */
    public function removeSfGuardUserPermission($sfGuardUserPermission)
    {
        if ($this->getSfGuardUserPermissions()->contains($sfGuardUserPermission)) {
            $this->collSfGuardUserPermissions->remove($this->collSfGuardUserPermissions->search($sfGuardUserPermission));
            if (null === $this->sfGuardUserPermissionsScheduledForDeletion) {
                $this->sfGuardUserPermissionsScheduledForDeletion = clone $this->collSfGuardUserPermissions;
                $this->sfGuardUserPermissionsScheduledForDeletion->clear();
            }
            $this->sfGuardUserPermissionsScheduledForDeletion[]= clone $sfGuardUserPermission;
            $sfGuardUserPermission->setSfGuardPermission(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SfGuardPermission is new, it will return
     * an empty collection; or if this SfGuardPermission has previously
     * been saved, it will retrieve related SfGuardUserPermissions from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SfGuardPermission.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|SfGuardUserPermission[] List of SfGuardUserPermission objects
     */
    public function getSfGuardUserPermissionsJoinSfGuardUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SfGuardUserPermissionQuery::create(null, $criteria);
        $query->joinWith('SfGuardUser', $join_behavior);

        return $this->getSfGuardUserPermissions($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->description = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->collSfGuardGroupPermissions) {
                foreach ($this->collSfGuardGroupPermissions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSfGuardUserPermissions) {
                foreach ($this->collSfGuardUserPermissions as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSfGuardGroupPermissions instanceof PropelCollection) {
            $this->collSfGuardGroupPermissions->clearIterator();
        }
        $this->collSfGuardGroupPermissions = null;
        if ($this->collSfGuardUserPermissions instanceof PropelCollection) {
            $this->collSfGuardUserPermissions->clearIterator();
        }
        $this->collSfGuardUserPermissions = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SfGuardPermissionPeer::DEFAULT_STRING_FORMAT);
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
        if ($callable = sfMixer::getCallable('BaseSfGuardPermission:' . $name))
        {
          array_unshift($params, $this);
          return call_user_func_array($callable, $params);
        }


        return parent::__call($name, $params);
    }

}
