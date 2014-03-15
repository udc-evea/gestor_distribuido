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
    return null === $this->estaActualizadoReplicacionBd() ||
           null === $this->estaActualizadoMoodledata() ||
           null === $this->estaActualizadoCodigo();
  }
  
  public function tieneAlgunError()
  {
    return false === $this->estaActualizadoReplicacionBd() ||
           false === $this->estaActualizadoMoodledata() ||
           false === $this->estaActualizadoCodigo();
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
    
    return $this;
  }
  
  public function actualizarEstadoReplicacionBd()
  {
    $reporte = $this->getUltimoReporteContenido();
    
    if($this->estaPerdido())
    {
      $this->setEstadoReplicacionBd(null);
      return;
    }
    
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
    
    $this->setEstadoReplicacionBd(true);
    
  }
  
  public function actualizarEstadoMoodledata()
  {
    $reporte = $this->getUltimoReporteContenido();
        
    if($this->estaPerdido())
    {
      $this->setEstadoMoodledata(null);
      return;
    }
    
    if(false === strpos($reporte, "EXITO: sincronizacion moodledata completa"))
    {
      $this->setEstadoMoodledata(false);
      return;
    }

    $this->setEstadoMoodledata(true);
  }
  
  public function actualizarEstadoCodigo()
  {
    $reporte = $this->getUltimoReporteContenido();
    
    if($this->estaPerdido())
    {
      $this->setEstadoCodigo(null);
      return;
    }
    
    if(false === strpos($reporte, "EXITO: sincronizacion de codigo completa"))
    {
      $this->setEstadoCodigo(false);
      return;
    }

    $this->setEstadoCodigo(true);
  }
  
  public function estaActualizadoReplicacionBd()
  {
    if(!$this->getChequearReplicacionBd()) return true;
    
    return true === $this->getEstadoReplicacionBd();
  }
  
  public function estaActualizadoMoodledata()
  {
    if(!$this->getChequearMoodledata()) return true;
    
    return true === $this->getEstadoMoodledata();
  }
  
  public function estaActualizadoCodigo()
  {
    if(!$this->getChequearCodigo()) return true;
    
    return true === $this->getEstadoCodigo();
  }
  
  public function getCssClassServer()
  {
    if($this->estaPerdido())
      return "danger";
    
    else if($this->estaDesactualizado())
      return "warning";
    
    else return "success";
  }
  
  public function getCssClassServicio($valor)
  {
    if(null === $valor)
      return "warning";
    
    else if(false === $valor)
      return "danger";
    
    else return "success";
  }
  
} // Server
