<?php


/**
 * Base class that represents a query for the 'repo_localidad' table.
 *
 *
 *
 * @method RepoLocalidadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method RepoLocalidadQuery orderByCodigoProvincia($order = Criteria::ASC) Order by the codigo_provincia column
 * @method RepoLocalidadQuery orderByLocalidad($order = Criteria::ASC) Order by the localidad column
 * @method RepoLocalidadQuery orderByCodigopostal($order = Criteria::ASC) Order by the codigoPostal column
 * @method RepoLocalidadQuery orderByCodigotelarea($order = Criteria::ASC) Order by the codigoTelArea column
 * @method RepoLocalidadQuery orderByLatitud($order = Criteria::ASC) Order by the latitud column
 * @method RepoLocalidadQuery orderByLongitud($order = Criteria::ASC) Order by the longitud column
 *
 * @method RepoLocalidadQuery groupById() Group by the id column
 * @method RepoLocalidadQuery groupByCodigoProvincia() Group by the codigo_provincia column
 * @method RepoLocalidadQuery groupByLocalidad() Group by the localidad column
 * @method RepoLocalidadQuery groupByCodigopostal() Group by the codigoPostal column
 * @method RepoLocalidadQuery groupByCodigotelarea() Group by the codigoTelArea column
 * @method RepoLocalidadQuery groupByLatitud() Group by the latitud column
 * @method RepoLocalidadQuery groupByLongitud() Group by the longitud column
 *
 * @method RepoLocalidadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RepoLocalidadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RepoLocalidadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RepoLocalidadQuery leftJoinRepoProvincia($relationAlias = null) Adds a LEFT JOIN clause to the query using the RepoProvincia relation
 * @method RepoLocalidadQuery rightJoinRepoProvincia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RepoProvincia relation
 * @method RepoLocalidadQuery innerJoinRepoProvincia($relationAlias = null) Adds a INNER JOIN clause to the query using the RepoProvincia relation
 *
 * @method RepoLocalidadQuery leftJoinServer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Server relation
 * @method RepoLocalidadQuery rightJoinServer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Server relation
 * @method RepoLocalidadQuery innerJoinServer($relationAlias = null) Adds a INNER JOIN clause to the query using the Server relation
 *
 * @method RepoLocalidad findOne(PropelPDO $con = null) Return the first RepoLocalidad matching the query
 * @method RepoLocalidad findOneOrCreate(PropelPDO $con = null) Return the first RepoLocalidad matching the query, or a new RepoLocalidad object populated from the query conditions when no match is found
 *
 * @method RepoLocalidad findOneByCodigoProvincia(string $codigo_provincia) Return the first RepoLocalidad filtered by the codigo_provincia column
 * @method RepoLocalidad findOneByLocalidad(string $localidad) Return the first RepoLocalidad filtered by the localidad column
 * @method RepoLocalidad findOneByCodigopostal(string $codigoPostal) Return the first RepoLocalidad filtered by the codigoPostal column
 * @method RepoLocalidad findOneByCodigotelarea(string $codigoTelArea) Return the first RepoLocalidad filtered by the codigoTelArea column
 * @method RepoLocalidad findOneByLatitud(string $latitud) Return the first RepoLocalidad filtered by the latitud column
 * @method RepoLocalidad findOneByLongitud(string $longitud) Return the first RepoLocalidad filtered by the longitud column
 *
 * @method array findById(int $id) Return RepoLocalidad objects filtered by the id column
 * @method array findByCodigoProvincia(string $codigo_provincia) Return RepoLocalidad objects filtered by the codigo_provincia column
 * @method array findByLocalidad(string $localidad) Return RepoLocalidad objects filtered by the localidad column
 * @method array findByCodigopostal(string $codigoPostal) Return RepoLocalidad objects filtered by the codigoPostal column
 * @method array findByCodigotelarea(string $codigoTelArea) Return RepoLocalidad objects filtered by the codigoTelArea column
 * @method array findByLatitud(string $latitud) Return RepoLocalidad objects filtered by the latitud column
 * @method array findByLongitud(string $longitud) Return RepoLocalidad objects filtered by the longitud column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRepoLocalidadQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRepoLocalidadQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'RepoLocalidad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RepoLocalidadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RepoLocalidadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RepoLocalidadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RepoLocalidadQuery) {
            return $criteria;
        }
        $query = new RepoLocalidadQuery();
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
     * @return   RepoLocalidad|RepoLocalidad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RepoLocalidadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RepoLocalidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RepoLocalidad A model object, or null if the key is not found
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
     * @return                 RepoLocalidad A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `codigo_provincia`, `localidad`, `codigoPostal`, `codigoTelArea`, `latitud`, `longitud` FROM `repo_localidad` WHERE `id` = :p0';
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
            $obj = new RepoLocalidad();
            $obj->hydrate($row);
            RepoLocalidadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RepoLocalidad|RepoLocalidad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RepoLocalidad[]|mixed the list of results, formatted by the current formatter
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
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RepoLocalidadPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RepoLocalidadPeer::ID, $keys, Criteria::IN);
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
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(RepoLocalidadPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(RepoLocalidadPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the codigo_provincia column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigoProvincia('fooValue');   // WHERE codigo_provincia = 'fooValue'
     * $query->filterByCodigoProvincia('%fooValue%'); // WHERE codigo_provincia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigoProvincia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByCodigoProvincia($codigoProvincia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigoProvincia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigoProvincia)) {
                $codigoProvincia = str_replace('*', '%', $codigoProvincia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::CODIGO_PROVINCIA, $codigoProvincia, $comparison);
    }

    /**
     * Filter the query on the localidad column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalidad('fooValue');   // WHERE localidad = 'fooValue'
     * $query->filterByLocalidad('%fooValue%'); // WHERE localidad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localidad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByLocalidad($localidad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localidad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localidad)) {
                $localidad = str_replace('*', '%', $localidad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::LOCALIDAD, $localidad, $comparison);
    }

    /**
     * Filter the query on the codigoPostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigopostal('fooValue');   // WHERE codigoPostal = 'fooValue'
     * $query->filterByCodigopostal('%fooValue%'); // WHERE codigoPostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByCodigopostal($codigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigopostal)) {
                $codigopostal = str_replace('*', '%', $codigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::CODIGOPOSTAL, $codigopostal, $comparison);
    }

    /**
     * Filter the query on the codigoTelArea column
     *
     * Example usage:
     * <code>
     * $query->filterByCodigotelarea('fooValue');   // WHERE codigoTelArea = 'fooValue'
     * $query->filterByCodigotelarea('%fooValue%'); // WHERE codigoTelArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codigotelarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByCodigotelarea($codigotelarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codigotelarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codigotelarea)) {
                $codigotelarea = str_replace('*', '%', $codigotelarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::CODIGOTELAREA, $codigotelarea, $comparison);
    }

    /**
     * Filter the query on the latitud column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitud(1234); // WHERE latitud = 1234
     * $query->filterByLatitud(array(12, 34)); // WHERE latitud IN (12, 34)
     * $query->filterByLatitud(array('min' => 12)); // WHERE latitud >= 12
     * $query->filterByLatitud(array('max' => 12)); // WHERE latitud <= 12
     * </code>
     *
     * @param     mixed $latitud The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByLatitud($latitud = null, $comparison = null)
    {
        if (is_array($latitud)) {
            $useMinMax = false;
            if (isset($latitud['min'])) {
                $this->addUsingAlias(RepoLocalidadPeer::LATITUD, $latitud['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitud['max'])) {
                $this->addUsingAlias(RepoLocalidadPeer::LATITUD, $latitud['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::LATITUD, $latitud, $comparison);
    }

    /**
     * Filter the query on the longitud column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitud(1234); // WHERE longitud = 1234
     * $query->filterByLongitud(array(12, 34)); // WHERE longitud IN (12, 34)
     * $query->filterByLongitud(array('min' => 12)); // WHERE longitud >= 12
     * $query->filterByLongitud(array('max' => 12)); // WHERE longitud <= 12
     * </code>
     *
     * @param     mixed $longitud The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function filterByLongitud($longitud = null, $comparison = null)
    {
        if (is_array($longitud)) {
            $useMinMax = false;
            if (isset($longitud['min'])) {
                $this->addUsingAlias(RepoLocalidadPeer::LONGITUD, $longitud['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitud['max'])) {
                $this->addUsingAlias(RepoLocalidadPeer::LONGITUD, $longitud['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RepoLocalidadPeer::LONGITUD, $longitud, $comparison);
    }

    /**
     * Filter the query by a related RepoProvincia object
     *
     * @param   RepoProvincia|PropelObjectCollection $repoProvincia The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RepoLocalidadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRepoProvincia($repoProvincia, $comparison = null)
    {
        if ($repoProvincia instanceof RepoProvincia) {
            return $this
                ->addUsingAlias(RepoLocalidadPeer::CODIGO_PROVINCIA, $repoProvincia->getId(), $comparison);
        } elseif ($repoProvincia instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(RepoLocalidadPeer::CODIGO_PROVINCIA, $repoProvincia->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByRepoProvincia() only accepts arguments of type RepoProvincia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the RepoProvincia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function joinRepoProvincia($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('RepoProvincia');

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
            $this->addJoinObject($join, 'RepoProvincia');
        }

        return $this;
    }

    /**
     * Use the RepoProvincia relation RepoProvincia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RepoProvinciaQuery A secondary query class using the current class as primary query
     */
    public function useRepoProvinciaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinRepoProvincia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'RepoProvincia', 'RepoProvinciaQuery');
    }

    /**
     * Filter the query by a related Server object
     *
     * @param   Server|PropelObjectCollection $server  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 RepoLocalidadQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByServer($server, $comparison = null)
    {
        if ($server instanceof Server) {
            return $this
                ->addUsingAlias(RepoLocalidadPeer::ID, $server->getRepoLocalidadId(), $comparison);
        } elseif ($server instanceof PropelObjectCollection) {
            return $this
                ->useServerQuery()
                ->filterByPrimaryKeys($server->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByServer() only accepts arguments of type Server or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Server relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function joinServer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Server');

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
            $this->addJoinObject($join, 'Server');
        }

        return $this;
    }

    /**
     * Use the Server relation Server object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ServerQuery A secondary query class using the current class as primary query
     */
    public function useServerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinServer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Server', 'ServerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   RepoLocalidad $repoLocalidad Object to remove from the list of results
     *
     * @return RepoLocalidadQuery The current query, for fluid interface
     */
    public function prune($repoLocalidad = null)
    {
        if ($repoLocalidad) {
            $this->addUsingAlias(RepoLocalidadPeer::ID, $repoLocalidad->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
