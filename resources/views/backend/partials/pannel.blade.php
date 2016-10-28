<div class="col-sm-6 col-md-6 col-lg-3">
	<div class="widget-bg-color-icon card-box">
    <a href="{{ $pannel->url }}">
		<div class="bg-icon {{ $pannel->iconColor }} pull-left">
			<i class="{{ $pannel->icon }} {{ $pannel->textColor }}"></i>
		</div>
    </a>
		<div class="text-right">
			<h3 class="text-dark"><b data-plugin="counterup">{{ $pannel->nbr->new }}</b></h3>
			<span class="text-muted">{{ $pannel->name }}</span><br />
			<span>{{ $pannel->nbr->total . ' ' . $pannel->total }}</span>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
