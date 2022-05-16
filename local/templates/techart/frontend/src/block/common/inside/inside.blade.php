<div class="{{ $block }}">
	<div class="{{ $block->elem('pic') }}" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/{{ $url }});">
		<div class="{{ $block->elem('date') }}">{{ $date }}</div>
	</div>
	<div class="{{ $block->elem('text-block') }}">
		<h2 class="{{ $block->elem('h2') }}"><a href="#">{{ $header }}</a></h2>
		<p class="{{ $block->elem('p') }}">{{ $text }}</p>
	</div>
</div>