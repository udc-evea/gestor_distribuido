<?php


/**
 * Base class that represents a query for the 'repo_nivel_estudios' table.
 *
 *
 *
 * @method RepoNivelEstudiosQuery orderByNivelEstudios($order = Criteria::ASC) Order by the nivel_estudios column
 * @method RepoNivelEstudiosQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method RepoNivelEstudiosQuery groupByNivelEstudios() Group by the nivel_estudios column
 * @method RepoNivelEstudiosQuery groupById() Group by the id column
 *
 * @method RepoNivelEstudiosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RepoNivelEstudiosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RepoNivelEstudiosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RepoNivelEstudios findOne(PropelPDO $con = null) Return the first RepoNivelEstudios matching the query
 * @method RepoNivelEstudios findOneOrCreate(PropelPDO $con = null) Return the first RepoNivelEstudios matching the query, or a new RepoNivelEstudios object populated from the query conditions when no match is found
 *
 * @method RepoNivelEstudios findOneByNivelEstudios(string $nivel_estudios) Return the first RepoNivelEstudios filtered by the nivel_estudios column
 *
 * @method array findByNivelEstudios(string $nivel_estudios) Return RepoNivelEstudios objects filtered by the nivel_estudios column
 * @method array findById(int $id) Return RepoNivelEstudios objects filtered by the id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRepoNivelEstudiosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRepoNivelEstudiosQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'RepoNivelEstudios', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RepoNivelEstudiosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RepoNivelEstudiosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RepoNivelEstudiosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RepoNivelEstudiosQuery) {
            return $criteria;
        }
        $query = new RepoNivelEstudiosQuery();
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
     * @return   RepoNivelEstudios|RepoNivelEstudios[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RepoNivelEstudiosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RepoNivelEstudiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RepoNivelEstudios A model object, or null if the key is not found
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
     * @return                 RepoNivelEstudios A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `nivel_estudios`, `id` FROM `repo_nivel_estudios` WHERE `id` = :p0';
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
            $obj = new RepoNivelEstudios();
            $obj->hydrate($row);
            RepoNivelEstudiosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RepoNivelEstudios|RepoNivelEstudios[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RepoNivelEstudios[]|mixed the list of results, formatted by the current formatter
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
     * @return RepoNivelEstudiosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RepoNivelEstudiosPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RepoNivelEstudiosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RepoNivelEstudiosPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the nivel_estudios column
     *
     * Example usage:
     * <code>
     * $query->filterByNivelEstudios('fooValue');   // WHERE nivel_estudios = 'fooValue'
     * $query->filterByNivelEstudios('%fooValue%'); // WHERE nivel_estudios LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nivelEstudios The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoNivelEstudiosQuery The current query, for fluid interface
     */
    public function filterByNivelEstudios($nivelEstudios = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nivelEstudios)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nivelEstudios)) {
                $nivelEstudios = str_replace('*', '%', $nivelEstudios);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoNivelEstudiosPeer::NIVEL_ESTUDIOS, $nivelEstudios, $comparison);
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
     * @return RepoNivelEstudiosQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(RepoNivelEstudiosPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(RepoNivelEstudiosPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepoNivelEstudiosPeer::ID, $id, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RepoNivelEstudios $repoNivelEstudios Object to remove from the list of results
     *
     * @return RepoNivelEstudiosQuery The current query, for fluid interface
     */
    public function prune($repoNivelEstudios = null)
    {
        if ($repoNivelEstudios) {
            $this->addUsingAlias(RepoNivelEstudiosPeer::ID, $repoNivelEstudios->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
