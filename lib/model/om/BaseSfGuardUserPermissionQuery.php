<?php


/**
 * Base class that represents a query for the 'sf_guard_user_permission' table.
 *
 *
 *
 * @method SfGuardUserPermissionQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method SfGuardUserPermissionQuery orderByPermissionId($order = Criteria::ASC) Order by the permission_id column
 *
 * @method SfGuardUserPermissionQuery groupByUserId() Group by the user_id column
 * @method SfGuardUserPermissionQuery groupByPermissionId() Group by the permission_id column
 *
 * @method SfGuardUserPermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SfGuardUserPermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SfGuardUserPermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SfGuardUserPermissionQuery leftJoinSfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfGuardUser relation
 * @method SfGuardUserPermissionQuery rightJoinSfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfGuardUser relation
 * @method SfGuardUserPermissionQuery innerJoinSfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the SfGuardUser relation
 *
 * @method SfGuardUserPermissionQuery leftJoinSfGuardPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfGuardPermission relation
 * @method SfGuardUserPermissionQuery rightJoinSfGuardPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfGuardPermission relation
 * @method SfGuardUserPermissionQuery innerJoinSfGuardPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SfGuardPermission relation
 *
 * @method SfGuardUserPermission findOne(PropelPDO $con = null) Return the first SfGuardUserPermission matching the query
 * @method SfGuardUserPermission findOneOrCreate(PropelPDO $con = null) Return the first SfGuardUserPermission matching the query, or a new SfGuardUserPermission object populated from the query conditions when no match is found
 *
 * @method SfGuardUserPermission findOneByUserId(int $user_id) Return the first SfGuardUserPermission filtered by the user_id column
 * @method SfGuardUserPermission findOneByPermissionId(int $permission_id) Return the first SfGuardUserPermission filtered by the permission_id column
 *
 * @method array findByUserId(int $user_id) Return SfGuardUserPermission objects filtered by the user_id column
 * @method array findByPermissionId(int $permission_id) Return SfGuardUserPermission objects filtered by the permission_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSfGuardUserPermissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSfGuardUserPermissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'SfGuardUserPermission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SfGuardUserPermissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SfGuardUserPermissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SfGuardUserPermissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SfGuardUserPermissionQuery) {
            return $criteria;
        }
        $query = new SfGuardUserPermissionQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$user_id, $permission_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SfGuardUserPermission|SfGuardUserPermission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SfGuardUserPermissionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SfGuardUserPermissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SfGuardUserPermission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `user_id`, `permission_id` FROM `sf_guard_user_permission` WHERE `user_id` = :p0 AND `permission_id` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SfGuardUserPermission();
            $obj->hydrate($row);
            SfGuardUserPermissionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return SfGuardUserPermission|SfGuardUserPermission[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SfGuardUserPermission[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SfGuardUserPermissionPeer::USER_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SfGuardUserPermissionPeer::PERMISSION_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SfGuardUserPermissionPeer::USER_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SfGuardUserPermissionPeer::PERMISSION_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterBySfGuardUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(SfGuardUserPermissionPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(SfGuardUserPermissionPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPermissionPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the permission_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPermissionId(1234); // WHERE permission_id = 1234
     * $query->filterByPermissionId(array(12, 34)); // WHERE permission_id IN (12, 34)
     * $query->filterByPermissionId(array('min' => 12)); // WHERE permission_id >= 12
     * $query->filterByPermissionId(array('max' => 12)); // WHERE permission_id <= 12
     * </code>
     *
     * @see       filterBySfGuardPermission()
     *
     * @param     mixed $permissionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function filterByPermissionId($permissionId = null, $comparison = null)
    {
        if (is_array($permissionId)) {
            $useMinMax = false;
            if (isset($permissionId['min'])) {
                $this->addUsingAlias(SfGuardUserPermissionPeer::PERMISSION_ID, $permissionId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($permissionId['max'])) {
                $this->addUsingAlias(SfGuardUserPermissionPeer::PERMISSION_ID, $permissionId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPermissionPeer::PERMISSION_ID, $permissionId, $comparison);
    }

    /**
     * Filter the query by a related SfGuardUser object
     *
     * @param   SfGuardUser|PropelObjectCollection $sfGuardUser The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SfGuardUserPermissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySfGuardUser($sfGuardUser, $comparison = null)
    {
        if ($sfGuardUser instanceof SfGuardUser) {
            return $this
                ->addUsingAlias(SfGuardUserPermissionPeer::USER_ID, $sfGuardUser->getId(), $comparison);
        } elseif ($sfGuardUser instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SfGuardUserPermissionPeer::USER_ID, $sfGuardUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBySfGuardUser() only accepts arguments of type SfGuardUser or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SfGuardUser relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function joinSfGuardUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SfGuardUser');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SfGuardUser');
        }

        return $this;
    }

    /**
     * Use the SfGuardUser relation SfGuardUser object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SfGuardUserQuery A secondary query class using the current class as primary query
     */
    public function useSfGuardUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSfGuardUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SfGuardUser', 'SfGuardUserQuery');
    }

    /**
     * Filter the query by a related SfGuardPermission object
     *
     * @param   SfGuardPermission|PropelObjectCollection $sfGuardPermission The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SfGuardUserPermissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySfGuardPermission($sfGuardPermission, $comparison = null)
    {
        if ($sfGuardPermission instanceof SfGuardPermission) {
            return $this
                ->addUsingAlias(SfGuardUserPermissionPeer::PERMISSION_ID, $sfGuardPermission->getId(), $comparison);
        } elseif ($sfGuardPermission instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SfGuardUserPermissionPeer::PERMISSION_ID, $sfGuardPermission->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterBySfGuardPermission() only accepts arguments of type SfGuardPermission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SfGuardPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function joinSfGuardPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SfGuardPermission');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SfGuardPermission');
        }

        return $this;
    }

    /**
     * Use the SfGuardPermission relation SfGuardPermission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SfGuardPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSfGuardPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSfGuardPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SfGuardPermission', 'SfGuardPermissionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SfGuardUserPermission $sfGuardUserPermission Object to remove from the list of results
     *
     * @return SfGuardUserPermissionQuery The current query, for fluid interface
     */
    public function prune($sfGuardUserPermission = null)
    {
        if ($sfGuardUserPermission) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SfGuardUserPermissionPeer::USER_ID), $sfGuardUserPermission->getUserId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SfGuardUserPermissionPeer::PERMISSION_ID), $sfGuardUserPermission->getPermissionId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
