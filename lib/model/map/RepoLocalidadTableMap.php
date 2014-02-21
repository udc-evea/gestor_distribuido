<?php



/**
 * This class defines the structure of the 'repo_localidad' table.
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
class RepoLocalidadTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.RepoLocalidadTableMap';

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
        $this->setName('repo_localidad');
        $this->setPhpName('RepoLocalidad');
        $this->setClassname('RepoLocalidad');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addForeignKey('codigo_provincia', 'CodigoProvincia', 'CHAR', 'repo_provincia', 'id', true, null, '');
        $this->addColumn('localidad', 'Localidad', 'VARCHAR', true, 100, null);
        $this->addColumn('codigoPostal', 'Codigopostal', 'VARCHAR', true, 10, null);
        $this->addColumn('codigoTelArea', 'Codigotelarea', 'VARCHAR', true, 5, null);
        $this->addColumn('latitud', 'Latitud', 'DECIMAL', true, 17, null);
        $this->addColumn('longitud', 'Longitud', 'DECIMAL', true, 17, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('RepoProvincia', 'RepoProvincia', RelationMap::MANY_TO_ONE, array('codigo_provincia' => 'id', ), null, null);
        $this->addRelation('Server', 'Server', RelationMap::ONE_TO_MANY, array('id' => 'repo_localidad_id', ), 'CASCADE', 'CASCADE', 'Servers');
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

} // RepoLocalidadTableMap
