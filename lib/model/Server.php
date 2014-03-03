<?php



/**
 * Skeleton subclass for representing a row from the 'server' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Server extends BaseServer
{
  public function getCompleto()
  {
    return sprintf("%s - %s", $this->getLocalidad(), $this->getDescripcion());
  }
  
  public function getLocalidad()
  {
    return $this->getRepoLocalidad();
  }
  
  public function getUltimaNovedad()
  {
    return $this->getUltimoReporte() != null ? $this->getUltimoReporte("d/m/Y H:i") : 'nunca';
  }
  
  public function getUltimaNovedadHuman()
  {
    if (!$this->getUltimoReporte()) {
      return "nunca";
    }

    $fh = DateTime::createFromFormat("Y-m-d", $this->getUltimoReporte("Y-m-d"));

    if (!$fh) {
      return "fecha inválida";
    }

    $hora = $this->getUltimoReporte("H:i");

    $fa = new DateTime();

    $duracion  = $fa->diff($fh, true)->days;

    switch($duracion)
    {
      case 0: return "hoy a las $hora";
      case 1: return "ayer a las $hora";
      case 2: return "anteayer a las $hora";
      default: return "hace $duracion días";
    }

  }

  
  public function getUltimoReporteContenido() {
    return htmlentities(parent::getUltimoReporteContenido(), null, 'UTF-8');
  }
  
  public function estaPerdido()
  {
    $ultimo = $this->getUltimoReporte(null);
    return  $ultimo == null || $ultimo < $this->getLimiteDeTiempo();
  }
  
  public function estaDesactualizado()
  {
    return !$this->estaActualizadoReplicacionBd() ||
            !$this->estaActualizadoMoodledata() ||
            !$this->estaActualizadoCodigo();
  }
  
  public function getLimiteDeTiempo()
  {
    return ServerQuery::getLimiteDeTiempo();
  }
  
  public function preInsert(\PropelPDO $con = null) {
    $this->setHash(md5(rand().$this->getPrimaryKey()));
    
    return true;
  }
  
  public function actualizarEstadoServicios()
  {
    if($this->getChequearReplicacionBd())
      $this->actualizarEstadoReplicacionBd();
    
    if($this->getChequearMoodledata())
      $this->actualizarEstadoMoodledata();
    
    if($this->getChequearCodigo())
      $this->actualizarEstadoCodigo();
  }
  
  public function actualizarEstadoReplicacionBd()
  {
    $reporte = $this->getUltimoReporteContenido();
    
    if(false === strpos($reporte, "Slave_IO_State: Waiting for master to send event"))
    {
      $this->setEstadoReplicacionBd(false);
      return;
    }
    
    if(false === strpos($reporte, "Slave_IO_Running: Yes"))
    {
      $this->setEstadoReplicacionBd(false);
      return;
    }
    
    if(false === strpos($reporte, "Slave_SQL_Running: Yes"))
    {
      $this->setEstadoReplicacionBd(false);
      return;
    }
    
    if(false === strpos($reporte, "Seconds_Behind_Master: 0"))
    {
      $this->setEstadoReplicacionBd(false);
      return;
    }
    
    //TODO: comparar las posiciones de los logs en master y slave
    
    $this->setEstadoReplicacionBd(true);
    
  }
  
  public function actualizarEstadoMoodledata()
  {
    $reporte = $this->getUltimoReporteContenido();
    
    if(false === strpos($reporte, "EXITO: sincronizacion moodledata completa"))
    {
      $this->setEstadoMoodledata(false);
      return;
    }
    
    //TODO: comparar bien las fechas
    $this->setEstadoMoodledata(true);
    
  }
  
  public function actualizarEstadoCodigo()
  {
    $reporte = $this->getUltimoReporteContenido();
    
    if(false === strpos($reporte, "EXITO: sincronizacion de código completa"))
    {
      $this->setEstadoCodigo(false);
      return;
    }
    
    //TODO: comparar bien las fechas
    $this->setEstadoCodigo(true);
  }
  
  public function estaActualizadoReplicacionBd()
  {
    if(!$this->getChequearReplicacionBd()) return true;
    
    return $this->getEstadoReplicacionBd();
  }
  
  public function estaActualizadoMoodledata()
  {
    if(!$this->getChequearMoodledata()) return true;
    
    return $this->getEstadoMoodledata();
  }
  
  public function estaActualizadoCodigo()
  {
    if(!$this->getChequearCodigo()) return true;
    
    return $this->getEstadoCodigo();
  }
  
  public function getCssClass()
  {
    if($this->estaPerdido())
      return "danger";
    
    else if($this->estaDesactualizado())
      return "warning";
    
    else return "success";
  }
  
} // Server
