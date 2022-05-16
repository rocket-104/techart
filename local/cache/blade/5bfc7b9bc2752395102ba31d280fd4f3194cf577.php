<div class="<?php echo e($block); ?>">
	<div class="<?php echo e($block->elem('insites')); ?>">
		<a class="<?php echo e($block->elem('linkHeader')); ?>" href="#"><?php echo e($headerInsites); ?></a>
		<div class="<?php echo e($block->elem('blockForContent')); ?>">

			<?php for($i = 0; $i < 2; $i++): ?>
			<div class="<?php echo e($block->elem('oneInsite')); ?>">
				<div class="<?php echo e($block->elem('pic')); ?>" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/<?php echo e($url_oneInsite[$i]); ?>);">
					<div class="<?php echo e($block->elem('date_oneInsite')); ?>"><?php echo e($date_oneInsite[$i]); ?></div>
				</div>
				<div class="<?php echo e($block->elem('text_oneInsite')); ?>">
					<h2 class="<?php echo e($block->elem('oneInsite')->mod('h2')); ?>"><a href="#"><?php echo e($headerH2_oneInsite[$i]); ?></a></h2>
					<p class="<?php echo e($block->elem('oneInsite')->mod('p')); ?>"><?php echo e($text_oneInsite[$i]); ?></p>
				</div>
			</div>
			<?php endfor; ?>

		</div>
	</div>

	<div class="<?php echo e($block->elem('publication')); ?>">
		<a class="<?php echo e($block->elem('linkHeader')); ?>" href="#"><?php echo e($headerPublication); ?></a>
		<div class="<?php echo e($block->elem('blockForContent')); ?>">

			<?php for($i = 0; $i < 4; $i++): ?>
			<div class="<?php echo e($block->elem('onePublic')); ?>">
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
</div><?php /**PATH /var/www/workspace/test2/www/local/templates/techart/frontend/src/block/common/content/content.blade.php ENDPATH**/ ?>