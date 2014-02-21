<?php


/**
 * Base class that represents a query for the 'server' table.
 *
 *
 *
 * @method ServerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ServerQuery orderByRepoLocalidadId($order = Criteria::ASC) Order by the repo_localidad_id column
 * @method ServerQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method ServerQuery orderByUltimoReporte($order = Criteria::ASC) Order by the ultimo_reporte column
 * @method ServerQuery orderByUltimoReporteContenido($order = Criteria::ASC) Order by the ultimo_reporte_contenido column
 * @method ServerQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method ServerQuery orderByChequearReplicacionBd($order = Criteria::ASC) Order by the chequear_replicacion_bd column
 * @method ServerQuery orderByChequearMoodledata($order = Criteria::ASC) Order by the chequear_moodledata column
 * @method ServerQuery orderByChequearCodigo($order = Criteria::ASC) Order by the chequear_codigo column
 * @method ServerQuery orderByEstadoReplicacionBd($order = Criteria::ASC) Order by the estado_replicacion_bd column
 * @method ServerQuery orderByEstadoMoodledata($order = Criteria::ASC) Order by the estado_moodledata column
 * @method ServerQuery orderByEstadoCodigo($order = Criteria::ASC) Order by the estado_codigo column
 *
 * @method ServerQuery groupById() Group by the id column
 * @method ServerQuery groupByRepoLocalidadId() Group by the repo_localidad_id column
 * @method ServerQuery groupByDescripcion() Group by the descripcion column
 * @method ServerQuery groupByUltimoReporte() Group by the ultimo_reporte column
 * @method ServerQuery groupByUltimoReporteContenido() Group by the ultimo_reporte_contenido column
 * @method ServerQuery groupByHash() Group by the hash column
 * @method ServerQuery groupByChequearReplicacionBd() Group by the chequear_replicacion_bd column
 * @method ServerQuery groupByChequearMoodledata() Group by the chequear_moodledata column
 * @method ServerQuery groupByChequearCodigo() Group by the chequear_codigo column
 * @method ServerQuery groupByEstadoReplicacionBd() Group by the estado_replicacion_bd column
 * @method ServerQuery groupByEstadoMoodledata() Group by the estado_moodledata column
 * @method ServerQuery groupByEstadoCodigo() Group by the estado_codigo column
 *
 * @method ServerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ServerQuery leftJoinRepoLocalidad($relationAlias = null) Adds a LEFT JOIN clause to the query using the RepoLocalidad relation
 * @method ServerQuery rightJoinRepoLocalidad($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RepoLocalidad relation
 * @method ServerQuery innerJoinRepoLocalidad($relationAlias = null) Adds a INNER JOIN clause to the query using the RepoLocalidad relation
 *
 * @method Server findOne(PropelPDO $con = null) Return the first Server matching the query
 * @method Server findOneOrCreate(PropelPDO $con = null) Return the first Server matching the query, or a new Server object populated from the query conditions when no match is found
 *
 * @method Server findOneByRepoLocalidadId(int $repo_localidad_id) Return the first Server filtered by the repo_localidad_id column
 * @method Server findOneByDescripcion(string $descripcion) Return the first Server filtered by the descripcion column
 * @method Server findOneByUltimoReporte(string $ultimo_reporte) Return the first Server filtered by the ultimo_reporte column
 * @method Server findOneByUltimoReporteContenido(string $ultimo_reporte_contenido) Return the first Server filtered by the ultimo_reporte_contenido column
 * @method Server findOneByHash(string $hash) Return the first Server filtered by the hash column
 * @method Server findOneByChequearReplicacionBd(boolean $chequear_replicacion_bd) Return the first Server filtered by the chequear_replicacion_bd column
 * @method Server findOneByChequearMoodledata(boolean $chequear_moodledata) Return the first Server filtered by the chequear_moodledata column
 * @method Server findOneByChequearCodigo(boolean $chequear_codigo) Return the first Server filtered by the chequear_codigo column
 * @method Server findOneByEstadoReplicacionBd(boolean $estado_replicacion_bd) Return the first Server filtered by the estado_replicacion_bd column
 * @method Server findOneByEstadoMoodledata(boolean $estado_moodledata) Return the first Server filtered by the estado_moodledata column
 * @method Server findOneByEstadoCodigo(boolean $estado_codigo) Return the first Server filtered by the estado_codigo column
 *
 * @method array findById(int $id) Return Server objects filtered by the id column
 * @method array findByRepoLocalidadId(int $repo_localidad_id) Return Server objects filtered by the repo_localidad_id column
 * @method array findByDescripcion(string $descripcion) Return Server objects filtered by the descripcion column
 * @method array findByUltimoReporte(string $ultimo_reporte) Return Server objects filtered by the ultimo_reporte column
 * @method array findByUltimoReporteContenido(string $ultimo_reporte_contenido) Return Server objects filtered by the ultimo_reporte_contenido column
 * @method array findByHash(string $hash) Return Server objects filtered by the hash column
 * @method array findByChequearReplicacionBd(boolean $chequear_replicacion_bd) Return Server objects filtered by the chequear_replicacion_bd column
 * @method array findByChequearMoodledata(boolean $chequear_moodledata) Return Server objects filtered by the chequear_moodledata column
 * @method array findByChequearCodigo(boolean $chequear_codigo) Return Server objects filtered by the chequear_codigo column
 * @method array findByEstadoReplicacionBd(boolean $estado_replicacion_bd) Return Server objects filtered by the estado_replicacion_bd column
 * @method array findByEstadoMoodledata(boolean $estado_moodledata) Return Server objects filtered by the estado_moodledata column
 * @method array findByEstadoCodigo(boolean $estado_codigo) Return Server objects filtered by the estado_codigo column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseServerQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServerQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Server', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServerQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServerQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServerQuery) {
            return $criteria;
        }
        $query = new ServerQuery();
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
     * @return   Server|Server[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServerPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Server A model object, or null if the key is not found
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
     * @return                 Server A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `repo_localidad_id`, `descripcion`, `ultimo_reporte`, `ultimo_reporte_contenido`, `hash`, `chequear_replicacion_bd`, `chequear_moodledata`, `chequear_codigo`, `estado_replicacion_bd`, `estado_moodledata`, `estado_codigo` FROM `server` WHERE `id` = :p0';
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
            $obj = new Server();
            $obj->hydrate($row);
            ServerPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Server|Server[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Server[]|mixed the list of results, formatted by the current formatter
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
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServerPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServerPeer::ID, $keys, Criteria::IN);
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
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ServerPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ServerPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServerPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the repo_localidad_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRepoLocalidadId(1234); // WHERE repo_localidad_id = 1234
     * $query->filterByRepoLocalidadId(array(12, 34)); // WHERE repo_localidad_id IN (12, 34)
     * $query->filterByRepoLocalidadId(array('min' => 12)); // WHERE repo_localidad_id >= 12
     * $query->filterByRepoLocalidadId(array('max' => 12)); // WHERE repo_localidad_id <= 12
     * </code>
     *
     * @see       filterByRepoLocalidad()
     *
     * @param     mixed $repoLocalidadId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByRepoLocalidadId($repoLocalidadId = null, $comparison = null)
    {
        if (is_array($repoLocalidadId)) {
            $useMinMax = false;
            if (isset($repoLocalidadId['min'])) {
                $this->addUsingAlias(ServerPeer::REPO_LOCALIDAD_ID, $repoLocalidadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($repoLocalidadId['max'])) {
                $this->addUsingAlias(ServerPeer::REPO_LOCALIDAD_ID, $repoLocalidadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServerPeer::REPO_LOCALIDAD_ID, $repoLocalidadId, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServerPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the ultimo_reporte column
     *
     * Example usage:
     * <code>
     * $query->filterByUltimoReporte('2011-03-14'); // WHERE ultimo_reporte = '2011-03-14'
     * $query->filterByUltimoReporte('now'); // WHERE ultimo_reporte = '2011-03-14'
     * $query->filterByUltimoReporte(array('max' => 'yesterday')); // WHERE ultimo_reporte > '2011-03-13'
     * </code>
     *
     * @param     mixed $ultimoReporte The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByUltimoReporte($ultimoReporte = null, $comparison = null)
    {
        if (is_array($ultimoReporte)) {
            $useMinMax = false;
            if (isset($ultimoReporte['min'])) {
                $this->addUsingAlias(ServerPeer::ULTIMO_REPORTE, $ultimoReporte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ultimoReporte['max'])) {
                $this->addUsingAlias(ServerPeer::ULTIMO_REPORTE, $ultimoReporte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServerPeer::ULTIMO_REPORTE, $ultimoReporte, $comparison);
    }

    /**
     * Filter the query on the ultimo_reporte_contenido column
     *
     * Example usage:
     * <code>
     * $query->filterByUltimoReporteContenido('fooValue');   // WHERE ultimo_reporte_contenido = 'fooValue'
     * $query->filterByUltimoReporteContenido('%fooValue%'); // WHERE ultimo_reporte_contenido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ultimoReporteContenido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByUltimoReporteContenido($ultimoReporteContenido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ultimoReporteContenido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ultimoReporteContenido)) {
                $ultimoReporteContenido = str_replace('*', '%', $ultimoReporteContenido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServerPeer::ULTIMO_REPORTE_CONTENIDO, $ultimoReporteContenido, $comparison);
    }

    /**
     * Filter the query on the hash column
     *
     * Example usage:
     * <code>
     * $query->filterByHash('fooValue');   // WHERE hash = 'fooValue'
     * $query->filterByHash('%fooValue%'); // WHERE hash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByHash($hash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hash)) {
                $hash = str_replace('*', '%', $hash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServerPeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the chequear_replicacion_bd column
     *
     * Example usage:
     * <code>
     * $query->filterByChequearReplicacionBd(true); // WHERE chequear_replicacion_bd = true
     * $query->filterByChequearReplicacionBd('yes'); // WHERE chequear_replicacion_bd = true
     * </code>
     *
     * @param     boolean|string $chequearReplicacionBd The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByChequearReplicacionBd($chequearReplicacionBd = null, $comparison = null)
    {
        if (is_string($chequearReplicacionBd)) {
            $chequearReplicacionBd = in_array(strtolower($chequearReplicacionBd), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServerPeer::CHEQUEAR_REPLICACION_BD, $chequearReplicacionBd, $comparison);
    }

    /**
     * Filter the query on the chequear_moodledata column
     *
     * Example usage:
     * <code>
     * $query->filterByChequearMoodledata(true); // WHERE chequear_moodledata = true
     * $query->filterByChequearMoodledata('yes'); // WHERE chequear_moodledata = true
     * </code>
     *
     * @param     boolean|string $chequearMoodledata The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByChequearMoodledata($chequearMoodledata = null, $comparison = null)
    {
        if (is_string($chequearMoodledata)) {
            $chequearMoodledata = in_array(strtolower($chequearMoodledata), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServerPeer::CHEQUEAR_MOODLEDATA, $chequearMoodledata, $comparison);
    }

    /**
     * Filter the query on the chequear_codigo column
     *
     * Example usage:
     * <code>
     * $query->filterByChequearCodigo(true); // WHERE chequear_codigo = true
     * $query->filterByChequearCodigo('yes'); // WHERE chequear_codigo = true
     * </code>
     *
     * @param     boolean|string $chequearCodigo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByChequearCodigo($chequearCodigo = null, $comparison = null)
    {
        if (is_string($chequearCodigo)) {
            $chequearCodigo = in_array(strtolower($chequearCodigo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServerPeer::CHEQUEAR_CODIGO, $chequearCodigo, $comparison);
    }

    /**
     * Filter the query on the estado_replicacion_bd column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadoReplicacionBd(true); // WHERE estado_replicacion_bd = true
     * $query->filterByEstadoReplicacionBd('yes'); // WHERE estado_replicacion_bd = true
     * </code>
     *
     * @param     boolean|string $estadoReplicacionBd The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByEstadoReplicacionBd($estadoReplicacionBd = null, $comparison = null)
    {
        if (is_string($estadoReplicacionBd)) {
            $estadoReplicacionBd = in_array(strtolower($estadoReplicacionBd), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServerPeer::ESTADO_REPLICACION_BD, $estadoReplicacionBd, $comparison);
    }

    /**
     * Filter the query on the estado_moodledata column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadoMoodledata(true); // WHERE estado_moodledata = true
     * $query->filterByEstadoMoodledata('yes'); // WHERE estado_moodledata = true
     * </code>
     *
     * @param     boolean|string $estadoMoodledata The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByEstadoMoodledata($estadoMoodledata = null, $comparison = null)
    {
        if (is_string($estadoMoodledata)) {
            $estadoMoodledata = in_array(strtolower($estadoMoodledata), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServerPeer::ESTADO_MOODLEDATA, $estadoMoodledata, $comparison);
    }

    /**
     * Filter the query on the estado_codigo column
     *
     * Example usage:
     * <code>
     * $query->filterByEstadoCodigo(true); // WHERE estado_codigo = true
     * $query->filterByEstadoCodigo('yes'); // WHERE estado_codigo = true
     * </code>
     *
     * @param     boolean|string $estadoCodigo The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function filterByEstadoCodigo($estadoCodigo = null, $comparison = null)
    {
        if (is_string($estadoCodigo)) {
            $estadoCodigo = in_array(strtolower($estadoCodigo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ServerPeer::ESTADO_CODIGO, $estadoCodigo, $comparison);
    }

    /**
     * Filter the query by a related RepoLocalidad object
     *
     * @param   RepoLocalidad|PropelObjectCollection $repoLocalidad The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ServerQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRepoLocalidad($repoLocalidad, $comparison = null)
    {
        if ($repoLocalidad instanceof RepoLocalidad) {
            return $this
                ->addUsingAlias(ServerPeer::REPO_LOCALIDAD_ID, $repoLocalidad->getId(), $comparison);
        } elseif ($repoLocalidad instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ServerPeer::REPO_LOCALIDAD_ID, $repoLocalidad->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return ServerQuery The current query, for fluid interface
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
     * @param   Server $server Object to remove from the list of results
     *
     * @return ServerQuery The current query, for fluid interface
     */
    public function prune($server = null)
    {
        if ($server) {
            $this->addUsingAlias(ServerPeer::ID, $server->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
