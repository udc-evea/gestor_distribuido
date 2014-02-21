<?php


/**
 * Base class that represents a query for the 'repo_provincia' table.
 *
 *
 *
 * @method RepoProvinciaQuery orderByProvincia($order = Criteria::ASC) Order by the provincia column
 * @method RepoProvinciaQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method RepoProvinciaQuery groupByProvincia() Group by the provincia column
 * @method RepoProvinciaQuery groupById() Group by the id column
 *
 * @method RepoProvinciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RepoProvinciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RepoProvinciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RepoProvinciaQuery leftJoinRepoLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the RepoLocalidad relation
 * @method RepoProvinciaQuery rightJoinRepoLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RepoLocalidad relation
 * @method RepoProvinciaQuery innerJoinRepoLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the RepoLocalidad relation
 *
 * @method RepoProvincia findOne(PropelPDO $con = null) Return the first RepoProvincia matching the query
 * @method RepoProvincia findOneOrCreate(PropelPDO $con = null) Return the first RepoProvincia matching the query, or a new RepoProvincia object populated from the query conditions when no match is found
 *
 * @method RepoProvincia findOneByProvincia(string $provincia) Return the first RepoProvincia filtered by the provincia column
 *
 * @method array findByProvincia(string $provincia) Return RepoProvincia objects filtered by the provincia column
 * @method array findById(string $id) Return RepoProvincia objects filtered by the id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRepoProvinciaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRepoProvinciaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'RepoProvincia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RepoProvinciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RepoProvinciaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RepoProvinciaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RepoProvinciaQuery) {
            return $criteria;
        }
        $query = new RepoProvinciaQuery();
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
     * @return   RepoProvincia|RepoProvincia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RepoProvinciaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RepoProvinciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RepoProvincia A model object, or null if the key is not found
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
     * @return                 RepoProvincia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `provincia`, `id` FROM `repo_provincia` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new RepoProvincia();
            $obj->hydrate($row);
            RepoProvinciaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RepoProvincia|RepoProvincia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RepoProvincia[]|mixed the list of results, formatted by the current formatter
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
     * @return RepoProvinciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RepoProvinciaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RepoProvinciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RepoProvinciaPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the provincia column
     *
     * Example usage:
     * <code>
     * $query->filterByProvincia('fooValue');   // WHERE provincia = 'fooValue'
     * $query->filterByProvincia('%fooValue%'); // WHERE provincia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $provincia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoProvinciaQuery The current query, for fluid interface
     */
    public function filterByProvincia($provincia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($provincia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $provincia)) {
                $provincia = str_replace('*', '%', $provincia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoProvinciaPeer::PROVINCIA, $provincia, $comparison);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoProvinciaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoProvinciaPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query by a related RepoLocalidad object
     *
     * @param   RepoLocalidad|PropelObjectCollection $repoLocalidad  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RepoProvinciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRepoLocalidad($repoLocalidad, $comparison = null)
    {
        if ($repoLocalidad instanceof RepoLocalidad) {
            return $this
                ->addUsingAlias(RepoProvinciaPeer::ID, $repoLocalidad->getCodigoProvincia(), $comparison);
        } elseif ($repoLocalidad instanceof PropelObjectCollection) {
            return $this
                ->useRepoLocalidadQuery()
                ->filterByPrimaryKeys($repoLocalidad->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByRepoLocalidad() only accepts arguments of type RepoLocalidad or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RepoLocalidad relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RepoProvinciaQuery The current query, for fluid interface
     */
    public function joinRepoLocalidad($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RepoLocalidad');

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
            $this->addJoinObject($join, 'RepoLocalidad');
        }

        return $this;
    }

    /**
     * Use the RepoLocalidad relation RepoLocalidad object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RepoLocalidadQuery A secondary query class using the current class as primary query
     */
    public function useRepoLocalidadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRepoLocalidad($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RepoLocalidad', 'RepoLocalidadQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RepoProvincia $repoProvincia Object to remove from the list of results
     *
     * @return RepoProvinciaQuery The current query, for fluid interface
     */
    public function prune($repoProvincia = null)
    {
        if ($repoProvincia) {
            $this->addUsingAlias(RepoProvinciaPeer::ID, $repoProvincia->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
