<td>
  <ul class="table-action">
    <?php echo $helper->linkToEdit($Server, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($Server, array(  'params' =>   array(  ),  'confirm' => '¿Realmente desea BORRAR el registro?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <a href="#modal-codigo" data-toggle="modal" class="toggleModalCodigo" data-hash='<?php echo $Server->getHash();?>' data-id='<?php echo $Server->getId();?>'><span class="glyphicon glyphicon-star"></span> Ver config.</a>
  </ul>
</td>
