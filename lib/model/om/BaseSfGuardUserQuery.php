<?php


/**
 * Base class that represents a query for the 'sf_guard_user' table.
 *
 *
 *
 * @method SfGuardUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method SfGuardUserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method SfGuardUserQuery orderByAlgorithm($order = Criteria::ASC) Order by the algorithm column
 * @method SfGuardUserQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method SfGuardUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method SfGuardUserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method SfGuardUserQuery orderByLastLogin($order = Criteria::ASC) Order by the last_login column
 * @method SfGuardUserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method SfGuardUserQuery orderByIsSuperAdmin($order = Criteria::ASC) Order by the is_super_admin column
 *
 * @method SfGuardUserQuery groupById() Group by the id column
 * @method SfGuardUserQuery groupByUsername() Group by the username column
 * @method SfGuardUserQuery groupByAlgorithm() Group by the algorithm column
 * @method SfGuardUserQuery groupBySalt() Group by the salt column
 * @method SfGuardUserQuery groupByPassword() Group by the password column
 * @method SfGuardUserQuery groupByCreatedAt() Group by the created_at column
 * @method SfGuardUserQuery groupByLastLogin() Group by the last_login column
 * @method SfGuardUserQuery groupByIsActive() Group by the is_active column
 * @method SfGuardUserQuery groupByIsSuperAdmin() Group by the is_super_admin column
 *
 * @method SfGuardUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SfGuardUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SfGuardUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SfGuardUserQuery leftJoinSfGuardUserGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfGuardUserGroup relation
 * @method SfGuardUserQuery rightJoinSfGuardUserGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfGuardUserGroup relation
 * @method SfGuardUserQuery innerJoinSfGuardUserGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SfGuardUserGroup relation
 *
 * @method SfGuardUserQuery leftJoinSfGuardUserPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the SfGuardUserPermission relation
 * @method SfGuardUserQuery rightJoinSfGuardUserPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SfGuardUserPermission relation
 * @method SfGuardUserQuery innerJoinSfGuardUserPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the SfGuardUserPermission relation
 *
 * @method SfGuardUser findOne(PropelPDO $con = null) Return the first SfGuardUser matching the query
 * @method SfGuardUser findOneOrCreate(PropelPDO $con = null) Return the first SfGuardUser matching the query, or a new SfGuardUser object populated from the query conditions when no match is found
 *
 * @method SfGuardUser findOneByUsername(string $username) Return the first SfGuardUser filtered by the username column
 * @method SfGuardUser findOneByAlgorithm(string $algorithm) Return the first SfGuardUser filtered by the algorithm column
 * @method SfGuardUser findOneBySalt(string $salt) Return the first SfGuardUser filtered by the salt column
 * @method SfGuardUser findOneByPassword(string $password) Return the first SfGuardUser filtered by the password column
 * @method SfGuardUser findOneByCreatedAt(string $created_at) Return the first SfGuardUser filtered by the created_at column
 * @method SfGuardUser findOneByLastLogin(string $last_login) Return the first SfGuardUser filtered by the last_login column
 * @method SfGuardUser findOneByIsActive(int $is_active) Return the first SfGuardUser filtered by the is_active column
 * @method SfGuardUser findOneByIsSuperAdmin(int $is_super_admin) Return the first SfGuardUser filtered by the is_super_admin column
 *
 * @method array findById(int $id) Return SfGuardUser objects filtered by the id column
 * @method array findByUsername(string $username) Return SfGuardUser objects filtered by the username column
 * @method array findByAlgorithm(string $algorithm) Return SfGuardUser objects filtered by the algorithm column
 * @method array findBySalt(string $salt) Return SfGuardUser objects filtered by the salt column
 * @method array findByPassword(string $password) Return SfGuardUser objects filtered by the password column
 * @method array findByCreatedAt(string $created_at) Return SfGuardUser objects filtered by the created_at column
 * @method array findByLastLogin(string $last_login) Return SfGuardUser objects filtered by the last_login column
 * @method array findByIsActive(int $is_active) Return SfGuardUser objects filtered by the is_active column
 * @method array findByIsSuperAdmin(int $is_super_admin) Return SfGuardUser objects filtered by the is_super_admin column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseSfGuardUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSfGuardUserQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'SfGuardUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SfGuardUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SfGuardUserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SfGuardUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SfGuardUserQuery) {
            return $criteria;
        }
        $query = new SfGuardUserQuery();
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
     * @return   SfGuardUser|SfGuardUser[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SfGuardUserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SfGuardUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 SfGuardUser A model object, or null if the key is not found
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
     * @return                 SfGuardUser A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `username`, `algorithm`, `salt`, `password`, `created_at`, `last_login`, `is_active`, `is_super_admin` FROM `sf_guard_user` WHERE `id` = :p0';
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
            $obj = new SfGuardUser();
            $obj->hydrate($row);
            SfGuardUserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SfGuardUser|SfGuardUser[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SfGuardUser[]|mixed the list of results, formatted by the current formatter
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
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SfGuardUserPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SfGuardUserPeer::ID, $keys, Criteria::IN);
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
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(SfGuardUserPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(SfGuardUserPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the algorithm column
     *
     * Example usage:
     * <code>
     * $query->filterByAlgorithm('fooValue');   // WHERE algorithm = 'fooValue'
     * $query->filterByAlgorithm('%fooValue%'); // WHERE algorithm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $algorithm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByAlgorithm($algorithm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($algorithm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $algorithm)) {
                $algorithm = str_replace('*', '%', $algorithm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::ALGORITHM, $algorithm, $comparison);
    }

    /**
     * Filter the query on the salt column
     *
     * Example usage:
     * <code>
     * $query->filterBySalt('fooValue');   // WHERE salt = 'fooValue'
     * $query->filterBySalt('%fooValue%'); // WHERE salt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterBySalt($salt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salt)) {
                $salt = str_replace('*', '%', $salt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::SALT, $salt, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SfGuardUserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SfGuardUserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the last_login column
     *
     * Example usage:
     * <code>
     * $query->filterByLastLogin('2011-03-14'); // WHERE last_login = '2011-03-14'
     * $query->filterByLastLogin('now'); // WHERE last_login = '2011-03-14'
     * $query->filterByLastLogin(array('max' => 'yesterday')); // WHERE last_login > '2011-03-13'
     * </code>
     *
     * @param     mixed $lastLogin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByLastLogin($lastLogin = null, $comparison = null)
    {
        if (is_array($lastLogin)) {
            $useMinMax = false;
            if (isset($lastLogin['min'])) {
                $this->addUsingAlias(SfGuardUserPeer::LAST_LOGIN, $lastLogin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastLogin['max'])) {
                $this->addUsingAlias(SfGuardUserPeer::LAST_LOGIN, $lastLogin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::LAST_LOGIN, $lastLogin, $comparison);
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(1234); // WHERE is_active = 1234
     * $query->filterByIsActive(array(12, 34)); // WHERE is_active IN (12, 34)
     * $query->filterByIsActive(array('min' => 12)); // WHERE is_active >= 12
     * $query->filterByIsActive(array('max' => 12)); // WHERE is_active <= 12
     * </code>
     *
     * @param     mixed $isActive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_array($isActive)) {
            $useMinMax = false;
            if (isset($isActive['min'])) {
                $this->addUsingAlias(SfGuardUserPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isActive['max'])) {
                $this->addUsingAlias(SfGuardUserPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query on the is_super_admin column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSuperAdmin(1234); // WHERE is_super_admin = 1234
     * $query->filterByIsSuperAdmin(array(12, 34)); // WHERE is_super_admin IN (12, 34)
     * $query->filterByIsSuperAdmin(array('min' => 12)); // WHERE is_super_admin >= 12
     * $query->filterByIsSuperAdmin(array('max' => 12)); // WHERE is_super_admin <= 12
     * </code>
     *
     * @param     mixed $isSuperAdmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function filterByIsSuperAdmin($isSuperAdmin = null, $comparison = null)
    {
        if (is_array($isSuperAdmin)) {
            $useMinMax = false;
            if (isset($isSuperAdmin['min'])) {
                $this->addUsingAlias(SfGuardUserPeer::IS_SUPER_ADMIN, $isSuperAdmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isSuperAdmin['max'])) {
                $this->addUsingAlias(SfGuardUserPeer::IS_SUPER_ADMIN, $isSuperAdmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SfGuardUserPeer::IS_SUPER_ADMIN, $isSuperAdmin, $comparison);
    }

    /**
     * Filter the query by a related SfGuardUserGroup object
     *
     * @param   SfGuardUserGroup|PropelObjectCollection $sfGuardUserGroup  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SfGuardUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySfGuardUserGroup($sfGuardUserGroup, $comparison = null)
    {
        if ($sfGuardUserGroup instanceof SfGuardUserGroup) {
            return $this
                ->addUsingAlias(SfGuardUserPeer::ID, $sfGuardUserGroup->getUserId(), $comparison);
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
     * @return SfGuardUserQuery The current query, for fluid interface
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
     * Filter the query by a related SfGuardUserPermission object
     *
     * @param   SfGuardUserPermission|PropelObjectCollection $sfGuardUserPermission  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SfGuardUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySfGuardUserPermission($sfGuardUserPermission, $comparison = null)
    {
        if ($sfGuardUserPermission instanceof SfGuardUserPermission) {
            return $this
                ->addUsingAlias(SfGuardUserPeer::ID, $sfGuardUserPermission->getUserId(), $comparison);
        } elseif ($sfGuardUserPermission instanceof PropelObjectCollection) {
            return $this
                ->useSfGuardUserPermissionQuery()
                ->filterByPrimaryKeys($sfGuardUserPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySfGuardUserPermission() only accepts arguments of type SfGuardUserPermission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SfGuardUserPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function joinSfGuardUserPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SfGuardUserPermission');

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
            $this->addJoinObject($join, 'SfGuardUserPermission');
        }

        return $this;
    }

    /**
     * Use the SfGuardUserPermission relation SfGuardUserPermission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SfGuardUserPermissionQuery A secondary query class using the current class as primary query
     */
    public function useSfGuardUserPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSfGuardUserPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SfGuardUserPermission', 'SfGuardUserPermissionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SfGuardUser $sfGuardUser Object to remove from the list of results
     *
     * @return SfGuardUserQuery The current query, for fluid interface
     */
    public function prune($sfGuardUser = null)
    {
        if ($sfGuardUser) {
            $this->addUsingAlias(SfGuardUserPeer::ID, $sfGuardUser->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
