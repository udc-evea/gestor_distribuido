<?php



/**
 * This class defines the structure of the 'server' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class ServerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ServerTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('server');
        $this->setPhpName('Server');
        $this->setClassname('Server');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignKey('repo_localidad_id', 'RepoLocalidadId', 'INTEGER', 'repo_localidad', 'id', true, 10, null);
        $this->addColumn('descripcion', 'Descripcion', 'VARCHAR', true, 50, null);
        $this->addColumn('ultimo_reporte', 'UltimoReporte', 'TIMESTAMP', false, null, null);
        $this->addColumn('ultimo_reporte_contenido', 'UltimoReporteContenido', 'LONGVARCHAR', true, null, null);
        $this->addColumn('hash', 'Hash', 'CHAR', true, 32, null);
        $this->addColumn('chequear_replicacion_bd', 'ChequearReplicacionBd', 'BOOLEAN', true, 1, true);
        $this->addColumn('chequear_moodledata', 'ChequearMoodledata', 'BOOLEAN', true, 1, true);
        $this->addColumn('chequear_codigo', 'ChequearCodigo', 'BOOLEAN', true, 1, true);
        $this->addColumn('estado_replicacion_bd', 'EstadoReplicacionBd', 'BOOLEAN', false, 1, null);
        $this->addColumn('estado_moodledata', 'EstadoMoodledata', 'BOOLEAN', false, 1, null);
        $this->addColumn('estado_codigo', 'EstadoCodigo', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RepoLocalidad', 'RepoLocalidad', RelationMap::MANY_TO_ONE, array('repo_localidad_id' => 'id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' =>  array (
  'form' => 'true',
  'filter' => 'true',
),
            'symfony_behaviors' =>  array (
),
        );
    } // getBehaviors()

} // ServerTableMap
