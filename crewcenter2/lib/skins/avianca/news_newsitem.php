<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
       <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#collapse_3_1"><?php echo $subject;?></a>
    </h4>
  </div>
  <div id="collapse_3_1" class="panel-collapse in">
    <div class="panel-body" style="height:200px; overflow-y:auto;">
      <?php echo html_entity_decode($body);?>
    </div>
  </div>
</div>