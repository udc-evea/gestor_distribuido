<?php


/**
 * Base class that represents a query for the 'sf_guard_group' table.
 *
 *
 *
 * @method SfGuardGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SfGuardGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method SfGuardGroupQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method SfGuardGroupQuery groupById() Group by the id column
 * @method SfGuardGroupQuery groupByName() Group by the name column
 * @method SfGuardGroupQuery groupByDescription() Group by the description column
 *
 * @method SfGuardGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SfGuardGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SfGuardGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SfGuardGroupQuery leftJoinSfGuardGroupPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfGuardGroupPermission relation
 * @method SfGuardGroupQuery rightJoinSfGuardGroupPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfGuardGroupPermission relation
 * @method SfGuardGroupQuery innerJoinSfGuardGroupPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SfGuardGroupPermission relation
 *
 * @method SfGuardGroupQuery leftJoinSfGuardUserGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfGuardUserGroup relation
 * @method SfGuardGroupQuery rightJoinSfGuardUserGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfGuardUserGroup relation
 * @method SfGuardGroupQuery innerJoinSfGuardUserGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SfGuardUserGroup relation
 *
 * @method SfGuardGroup findOne(PropelPDO $con = null) Return the first SfGuardGroup matching the query
 * @method SfGuardGroup findOneOrCreate(PropelPDO $con = null) Return the first SfGuardGroup matching the query, or a new SfGuardGroup object populated from the query conditions when no match is found
 *
 * @method SfGuardGroup findOneByName(string $name) Return the first SfGuardGroup filtered by the name column
 * @method SfGuardGroup findOneByDescription(string $description) Return the first SfGuardGroup filtered by the description column
 *
 * @method array findById(int $id) Return SfGuardGroup objects filtered by the id column
 * @method array findByName(string $name) Return SfGuardGroup objects filtered by the name column
 * @method array findByDescription(string $description) Return SfGuardGroup objects filtered by the description column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSfGuardGroupQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSfGuardGroupQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'SfGuardGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SfGuardGroupQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SfGuardGroupQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SfGuardGroupQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SfGuardGroupQuery) {
            return $criteria;
        }
        $query = new SfGuardGroupQuery();
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
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SfGuardGroup|SfGuardGroup[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SfGuardGroupPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SfGuardGroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SfGuardGroup A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SfGuardGroup A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `description` FROM `sf_guard_group` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SfGuardGroup();
            $obj->hydrate($row);
            SfGuardGroupPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SfGuardGroup|SfGuardGroup[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SfGuardGroup[]|mixed the list of results, formatted by the current formatter
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
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SfGuardGroupPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SfGuardGroupPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SfGuardGroupPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SfGuardGroupPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardGroupPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfGuardGroupPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfGuardGroupPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query by a related SfGuardGroupPermission object
     *
     * @param   SfGuardGroupPermission|PropelObjectCollection $sfGuardGroupPermission  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SfGuardGroupQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySfGuardGroupPermission($sfGuardGroupPermission, $comparison = null)
    {
        if ($sfGuardGroupPermission instanceof SfGuardGroupPermission) {
            return $this
                ->addUsingAlias(SfGuardGroupPeer::ID, $sfGuardGroupPermission->getGroupId(), $comparison);
        } elseif ($sfGuardGroupPermission instanceof PropelObjectCollection) {
            return $this
                ->useSfGuardGroupPermissionQuery()
                ->filterByPrimaryKeys($sfGuardGroupPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySfGuardGroupPermission() only accepts arguments of type SfGuardGroupPermission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SfGuardGroupPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function joinSfGuardGroupPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SfGuardGroupPermission');

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
            $this->addJoinObject($join, 'SfGuardGroupPermission');
        }

        return $this;
    }

    /**
     * Use the SfGuardGroupPermission relation SfGuardGroupPermission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SfGuardGroupPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSfGuardGroupPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSfGuardGroupPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SfGuardGroupPermission', 'SfGuardGroupPermissionQuery');
    }

    /**
     * Filter the query by a related SfGuardUserGroup object
     *
     * @param   SfGuardUserGroup|PropelObjectCollection $sfGuardUserGroup  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SfGuardGroupQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySfGuardUserGroup($sfGuardUserGroup, $comparison = null)
    {
        if ($sfGuardUserGroup instanceof SfGuardUserGroup) {
            return $this
                ->addUsingAlias(SfGuardGroupPeer::ID, $sfGuardUserGroup->getGroupId(), $comparison);
        } elseif ($sfGuardUserGroup instanceof PropelObjectCollection) {
            return $this
                ->useSfGuardUserGroupQuery()
                ->filterByPrimaryKeys($sfGuardUserGroup->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySfGuardUserGroup() only accepts arguments of type SfGuardUserGroup or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SfGuardUserGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function joinSfGuardUserGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SfGuardUserGroup');

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
            $this->addJoinObject($join, 'SfGuardUserGroup');
        }

        return $this;
    }

    /**
     * Use the SfGuardUserGroup relation SfGuardUserGroup object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SfGuardUserGroupQuery A secondary query class using the current class as primary query
     */
    public function useSfGuardUserGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSfGuardUserGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SfGuardUserGroup', 'SfGuardUserGroupQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SfGuardGroup $sfGuardGroup Object to remove from the list of results
     *
     * @return SfGuardGroupQuery The current query, for fluid interface
     */
    public function prune($sfGuardGroup = null)
    {
        if ($sfGuardGroup) {
            $this->addUsingAlias(SfGuardGroupPeer::ID, $sfGuardGroup->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
