<div class="{{ $block }}">
	<div class="{{ $block->elem('insites') }}">
		<a class="{{ $block->elem('linkHeader') }}" href="#">{{ $headerInsites }}</a>
		<div class="{{ $block->elem('blockForContent') }}">

			@for ($i = 0; $i < 2; $i++)
			<div class="{{ $block->elem('oneInsite') }}">
				<div class="{{ $block->elem('pic') }}" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/{{$url_oneInsite[$i]}});">
					<div class="{{ $block->elem('date_oneInsite') }}">{{ $date_oneInsite[$i] }}</div>
				</div>
				<div class="{{ $block->elem('text_oneInsite') }}">
					<h2 class="{{ $block->elem('oneInsite')->mod('h2') }}"><a href="#">{{ $headerH2_oneInsite[$i] }}</a></h2>
					<p class="{{ $block->elem('oneInsite')->mod('p') }}">{{ $text_oneInsite[$i] }}</p>
				</div>
			</div>
			@endfor

		</div>
	</div>

	<div class="{{ $block->elem('publication') }}">
		<a class="{{ $block->elem('linkHeader') }}" href="#">{{ $headerPublication }}</a>
		<div class="{{ $block->elem('blockForContent') }}">

			@for ($i = 0; $i < 4; $i++)
			<div class="{{ $block->elem('onePublic') }}">
				<div class="{{ $block->elem('label') }}"" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/{{$url_label[$i]}});"></div>
				<div class="{{ $block->elem('pub') }}">
					<h3 class="{{ $block->elem('pub')->mod('h3') }}"><a href="#">{{ $h3_label[$i] }}</a></h3>
					<h4 class="{{ $block->elem('pub')->mod('h4') }}">{{ $h4_label[$i] }}</h4>
					<p class="{{ $block->elem('pub')->mod('p') }}">{{ $p_label[$i] }}</p>
				</div>
			</div>
			@endfor

		</div>
	</div>
</div>