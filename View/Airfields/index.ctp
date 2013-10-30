
<table>
<?php foreach ($airfields as $airfield): ?>
  <tr>
   <td><?=$this->Html->link($airfield['Airfield']['name'], array('controller' => 'Airfields', 'action' => 'view', $airfield['Airfield']['name']));?></td>
   <td><?=($airfield['Airfield']['active']?'Active':'Inactive');?></td>
  </tr>
<? endforeach; ?>

</table>