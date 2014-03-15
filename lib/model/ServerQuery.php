<?php



/**
 * Skeleton subclass for performing query and update operations on the 'server' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class ServerQuery extends BaseServerQuery {
  public function porLocalidad()
  {
    $this
      ->useRepoLocalidadQuery()
      ->orderByLocalidad()
    ->endUse();
    
    return $this;
  }
  
  public function inactivos()
  {
    $this
      ->where('Server.UltimoReporte IS NULL')
      ->_or()
      ->where('Server.UltimoReporte < ?', self::getLimiteDeTiempo());
      
    return $this;
  }
  
  public static function getLimiteDeTiempo()
  {
    $ahora  = new DateTime();
    $limite = $ahora->sub(new DateInterval('PT2H'));
    return $limite;
  }
} // ServerQuery
