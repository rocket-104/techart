<div class="<?php echo e($block); ?>">
	<div class="<?php echo e($block->elem('subblock')); ?>">
		<a class="<?php echo e($block->elem('subblock')->mod('link')); ?>" href="#"><?php echo e($headerBlock); ?></a>
		<div class="<?php echo e($block->elem('line')); ?>">

			<?php for($i = 0; $i < 2; $i++): ?>
			<div class="<?php echo e($block->elem('block')); ?>">
				<div class="<?php echo e($block->elem('pic')); ?>" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/<?php echo e($url_block[$i]); ?>);">
					<div class="<?php echo e($block->elem('date')); ?>"><?php echo e($date[$i]); ?></div>
				</div>
				<div class="<?php echo e($block->elem('sometext')); ?>">
					<h2 class="<?php echo e($block->elem('block')->mod('h2')); ?>"><a href="#"><?php echo e($headerH2[$i]); ?></a></h2>
					<p class="<?php echo e($block->elem('block')->mod('p')); ?>"><?php echo e($text[$i]); ?></p>
				</div>
			</div>
			<?php endfor; ?>

		</div>
	</div>
	<div class="<?php echo e($block->elem('subblock')); ?>">
		<a href="#"><?php echo e($headerPublic); ?></a>
		<div class="<?php echo e($block->elem('line')); ?>">

			<?php for($i = 0; $i < 4; $i++): ?>
			<div class="<?php echo e($block->elem('subline')); ?>">
				<div class="<?php echo e($block->elem('label')); ?>"" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/<?php echo e($url_label[$i]); ?>);"></div>
				<div class="<?php echo e($block->elem('pub')); ?>">
					<h3 class="<?php echo e($block->elem('pub')->mod('h3')); ?>"><a href="#"><?php echo e($h3_label[$i]); ?></a></h3>
					<h4 class="<?php echo e($block->elem('pub')->mod('h4')); ?>"><?php echo e($h4_label[$i]); ?></h4>
					<p class="<?php echo e($block->elem('pub')->mod('p')); ?>"><?php echo e($p_label[$i]); ?></p>
				</div>
			</div>
			<?php endfor; ?>

		</div>
	</div>
</div><?php /**PATH /var/www/workspace/test2/www/local/templates/techart/frontend/src/block/common/double/double.blade.php ENDPATH**/ ?>