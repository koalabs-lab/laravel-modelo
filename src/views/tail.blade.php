@section('tail')

{{-- ===== Javascript ===== --}}

{{-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline --}}
@if ( Config::get('modelo::jquery_on') )
  {{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/'.Config::get('modelo::jquery_version').'/jquery.min.js')}}
  <script>window.jQuery || document.write('<script src="\/{{Config::get('modelo.jquery_fallback')}}"><\/script>')</script>
@endif

@foreach ( Config::get('modelo::scripts') as $script )
  {{HTML::script($script)}}
@endforeach

@yield('page_scripts')
{{-- Page-specific javascripts --}}

{{-- Google analytics --}}
@if ( Config::get('modelo::analytics_on') )
  <script>
    var _gaq=[['_setAccount','{{Config::get("modelo.analytics_id")}}'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
@endif

@show