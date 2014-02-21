<?php


/**
 * Base class that represents a query for the 'sf_guard_user' table.
 *
 *
 *
 * @method sfGuardUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method sfGuardUserQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method sfGuardUserQuery orderByAlgorithm($order = Criteria::ASC) Order by the algorithm column
 * @method sfGuardUserQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method sfGuardUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method sfGuardUserQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method sfGuardUserQuery orderByLastLogin($order = Criteria::ASC) Order by the last_login column
 * @method sfGuardUserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method sfGuardUserQuery orderByIsSuperAdmin($order = Criteria::ASC) Order by the is_super_admin column
 *
 * @method sfGuardUserQuery groupById() Group by the id column
 * @method sfGuardUserQuery groupByUsername() Group by the username column
 * @method sfGuardUserQuery groupByAlgorithm() Group by the algorithm column
 * @method sfGuardUserQuery groupBySalt() Group by the salt column
 * @method sfGuardUserQuery groupByPassword() Group by the password column
 * @method sfGuardUserQuery groupByCreatedAt() Group by the created_at column
 * @method sfGuardUserQuery groupByLastLogin() Group by the last_login column
 * @method sfGuardUserQuery groupByIsActive() Group by the is_active column
 * @method sfGuardUserQuery groupByIsSuperAdmin() Group by the is_super_admin column
 *
 * @method sfGuardUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method sfGuardUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method sfGuardUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method sfGuardUserQuery leftJoinsfGuardUserGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserGroup relation
 * @method sfGuardUserQuery rightJoinsfGuardUserGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserGroup relation
 * @method sfGuardUserQuery innerJoinsfGuardUserGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserGroup relation
 *
 * @method sfGuardUserQuery leftJoinsfGuardUserPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUserPermission relation
 * @method sfGuardUserQuery rightJoinsfGuardUserPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUserPermission relation
 * @method sfGuardUserQuery innerJoinsfGuardUserPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUserPermission relation
 *
 * @method sfGuardUserQuery leftJoinsfGuardRememberKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardRememberKey relation
 * @method sfGuardUserQuery rightJoinsfGuardRememberKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardRememberKey relation
 * @method sfGuardUserQuery innerJoinsfGuardRememberKey($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardRememberKey relation
 *
 * @method sfGuardUser findOne(PropelPDO $con = null) Return the first sfGuardUser matching the query
 * @method sfGuardUser findOneOrCreate(PropelPDO $con = null) Return the first sfGuardUser matching the query, or a new sfGuardUser object populated from the query conditions when no match is found
 *
 * @method sfGuardUser findOneByUsername(string $username) Return the first sfGuardUser filtered by the username column
 * @method sfGuardUser findOneByAlgorithm(string $algorithm) Return the first sfGuardUser filtered by the algorithm column
 * @method sfGuardUser findOneBySalt(string $salt) Return the first sfGuardUser filtered by the salt column
 * @method sfGuardUser findOneByPassword(string $password) Return the first sfGuardUser filtered by the password column
 * @method sfGuardUser findOneByCreatedAt(string $created_at) Return the first sfGuardUser filtered by the created_at column
 * @method sfGuardUser findOneByLastLogin(string $last_login) Return the first sfGuardUser filtered by the last_login column
 * @method sfGuardUser findOneByIsActive(boolean $is_active) Return the first sfGuardUser filtered by the is_active column
 * @method sfGuardUser findOneByIsSuperAdmin(boolean $is_super_admin) Return the first sfGuardUser filtered by the is_super_admin column
 *
 * @method array findById(int $id) Return sfGuardUser objects filtered by the id column
 * @method array findByUsername(string $username) Return sfGuardUser objects filtered by the username column
 * @method array findByAlgorithm(string $algorithm) Return sfGuardUser objects filtered by the algorithm column
 * @method array findBySalt(string $salt) Return sfGuardUser objects filtered by the salt column
 * @method array findByPassword(string $password) Return sfGuardUser objects filtered by the password column
 * @method array findByCreatedAt(string $created_at) Return sfGuardUser objects filtered by the created_at column
 * @method array findByLastLogin(string $last_login) Return sfGuardUser objects filtered by the last_login column
 * @method array findByIsActive(boolean $is_active) Return sfGuardUser objects filtered by the is_active column
 * @method array findByIsSuperAdmin(boolean $is_super_admin) Return sfGuardUser objects filtered by the is_super_admin column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasesfGuardUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasesfGuardUserQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'sfGuardUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new sfGuardUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   sfGuardUserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return sfGuardUserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof sfGuardUserQuery) {
            return $criteria;
        }
        $query = new sfGuardUserQuery();
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
     * @return   sfGuardUser|sfGuardUser[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = sfGuardUserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(sfGuardUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 sfGuardUser A model object, or null if the key is not found
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
     * @return                 sfGuardUser A model object, or null if the key is not found
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
            $obj = new sfGuardUser();
            $obj->hydrate($row);
            sfGuardUserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return sfGuardUser|sfGuardUser[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|sfGuardUser[]|mixed the list of results, formatted by the current formatter
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
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(sfGuardUserPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(sfGuardUserPeer::ID, $keys, Criteria::IN);
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
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(sfGuardUserPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(sfGuardUserPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfGuardUserPeer::ID, $id, $comparison);
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
     * @return sfGuardUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfGuardUserPeer::USERNAME, $username, $comparison);
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
     * @return sfGuardUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfGuardUserPeer::ALGORITHM, $algorithm, $comparison);
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
     * @return sfGuardUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfGuardUserPeer::SALT, $salt, $comparison);
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
     * @return sfGuardUserQuery The current query, for fluid interface
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

        return $this->addUsingAlias(sfGuardUserPeer::PASSWORD, $password, $comparison);
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
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfGuardUserPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterByLastLogin($lastLogin = null, $comparison = null)
    {
        if (is_array($lastLogin)) {
            $useMinMax = false;
            if (isset($lastLogin['min'])) {
                $this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastLogin['max'])) {
                $this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(sfGuardUserPeer::LAST_LOGIN, $lastLogin, $comparison);
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(true); // WHERE is_active = true
     * $query->filterByIsActive('yes'); // WHERE is_active = true
     * </code>
     *
     * @param     boolean|string $isActive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_string($isActive)) {
            $isActive = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(sfGuardUserPeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query on the is_super_admin column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSuperAdmin(true); // WHERE is_super_admin = true
     * $query->filterByIsSuperAdmin('yes'); // WHERE is_super_admin = true
     * </code>
     *
     * @param     boolean|string $isSuperAdmin The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function filterByIsSuperAdmin($isSuperAdmin = null, $comparison = null)
    {
        if (is_string($isSuperAdmin)) {
            $isSuperAdmin = in_array(strtolower($isSuperAdmin), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(sfGuardUserPeer::IS_SUPER_ADMIN, $isSuperAdmin, $comparison);
    }

    /**
     * Filter the query by a related sfGuardUserGroup object
     *
     * @param   sfGuardUserGroup|PropelObjectCollection $sfGuardUserGroup  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 sfGuardUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBysfGuardUserGroup($sfGuardUserGroup, $comparison = null)
    {
        if ($sfGuardUserGroup instanceof sfGuardUserGroup) {
            return $this
                ->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserGroup->getUserId(), $comparison);
        } elseif ($sfGuardUserGroup instanceof PropelObjectCollection) {
            return $this
                ->usesfGuardUserGroupQuery()
                ->filterByPrimaryKeys($sfGuardUserGroup->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBysfGuardUserGroup() only accepts arguments of type sfGuardUserGroup or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the sfGuardUserGroup relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function joinsfGuardUserGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('sfGuardUserGroup');

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
            $this->addJoinObject($join, 'sfGuardUserGroup');
        }

        return $this;
    }

    /**
     * Use the sfGuardUserGroup relation sfGuardUserGroup object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   sfGuardUserGroupQuery A secondary query class using the current class as primary query
     */
    public function usesfGuardUserGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinsfGuardUserGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'sfGuardUserGroup', 'sfGuardUserGroupQuery');
    }

    /**
     * Filter the query by a related sfGuardUserPermission object
     *
     * @param   sfGuardUserPermission|PropelObjectCollection $sfGuardUserPermission  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 sfGuardUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBysfGuardUserPermission($sfGuardUserPermission, $comparison = null)
    {
        if ($sfGuardUserPermission instanceof sfGuardUserPermission) {
            return $this
                ->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUserPermission->getUserId(), $comparison);
        } elseif ($sfGuardUserPermission instanceof PropelObjectCollection) {
            return $this
                ->usesfGuardUserPermissionQuery()
                ->filterByPrimaryKeys($sfGuardUserPermission->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBysfGuardUserPermission() only accepts arguments of type sfGuardUserPermission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the sfGuardUserPermission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function joinsfGuardUserPermission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('sfGuardUserPermission');

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
            $this->addJoinObject($join, 'sfGuardUserPermission');
        }

        return $this;
    }

    /**
     * Use the sfGuardUserPermission relation sfGuardUserPermission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   sfGuardUserPermissionQuery A secondary query class using the current class as primary query
     */
    public function usesfGuardUserPermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinsfGuardUserPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'sfGuardUserPermission', 'sfGuardUserPermissionQuery');
    }

    /**
     * Filter the query by a related sfGuardRememberKey object
     *
     * @param   sfGuardRememberKey|PropelObjectCollection $sfGuardRememberKey  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 sfGuardUserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBysfGuardRememberKey($sfGuardRememberKey, $comparison = null)
    {
        if ($sfGuardRememberKey instanceof sfGuardRememberKey) {
            return $this
                ->addUsingAlias(sfGuardUserPeer::ID, $sfGuardRememberKey->getUserId(), $comparison);
        } elseif ($sfGuardRememberKey instanceof PropelObjectCollection) {
            return $this
                ->usesfGuardRememberKeyQuery()
                ->filterByPrimaryKeys($sfGuardRememberKey->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBysfGuardRememberKey() only accepts arguments of type sfGuardRememberKey or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the sfGuardRememberKey relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function joinsfGuardRememberKey($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('sfGuardRememberKey');

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
            $this->addJoinObject($join, 'sfGuardRememberKey');
        }

        return $this;
    }

    /**
     * Use the sfGuardRememberKey relation sfGuardRememberKey object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   sfGuardRememberKeyQuery A secondary query class using the current class as primary query
     */
    public function usesfGuardRememberKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinsfGuardRememberKey($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'sfGuardRememberKey', 'sfGuardRememberKeyQuery');
    }

    /**
     * Filter the query by a related sfGuardGroup object
     * using the sf_guard_user_group table as cross reference
     *
     * @param   sfGuardGroup $sfGuardGroup the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   sfGuardUserQuery The current query, for fluid interface
     */
    public function filterBysfGuardGroup($sfGuardGroup, $comparison = Criteria::EQUAL)
    {
        return $this
            ->usesfGuardUserGroupQuery()
            ->filterBysfGuardGroup($sfGuardGroup, $comparison)
            ->endUse();
    }

    /**
     * Filter the query by a related sfGuardPermission object
     * using the sf_guard_user_permission table as cross reference
     *
     * @param   sfGuardPermission $sfGuardPermission the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   sfGuardUserQuery The current query, for fluid interface
     */
    public function filterBysfGuardPermission($sfGuardPermission, $comparison = Criteria::EQUAL)
    {
        return $this
            ->usesfGuardUserPermissionQuery()
            ->filterBysfGuardPermission($sfGuardPermission, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   sfGuardUser $sfGuardUser Object to remove from the list of results
     *
     * @return sfGuardUserQuery The current query, for fluid interface
     */
    public function prune($sfGuardUser = null)
    {
        if ($sfGuardUser) {
            $this->addUsingAlias(sfGuardUserPeer::ID, $sfGuardUser->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}