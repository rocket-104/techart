<div class="<?php echo e($block); ?>">
	<div class="<?php echo e($block->elem('pic')); ?>" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/<?php echo e($url); ?>);">
		<div class="<?php echo e($block->elem('date')); ?>"><?php echo e($date); ?></div>
	</div>
	<div class="<?php echo e($block->elem('text-block')); ?>">
		<h2 class="<?php echo e($block->elem('h2')); ?>"><a href="#"><?php echo e($header); ?></a></h2>
		<p class="<?php echo e($block->elem('p')); ?>"><?php echo e($text); ?></p>
	</div>
</div><?php /**PATH /var/www/workspace/test2/www/local/templates/techart/frontend/src/block/common/one-insite/one-insite.blade.php ENDPATH**/ ?>