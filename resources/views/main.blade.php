@if(isset($config[config('app.env')]))
    <span id="filament-oops-sign" style="background: {{ $config[config('app.env')]['color'] }}"></span>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logo = document.querySelector('.fi-logo');
            const filamentOopsSign = document.querySelector('#filament-oops-sign');
            const productionSign = filamentOopsSign.cloneNode(true);

            productionSign.innerHTML = productionSign.innerHTML + ' ' + '{{ $config[config('app.env')]['label'] }}';
            logo.innerHTML = logo.innerHTML + productionSign.outerHTML;

            // make the logo flex items center (style)
            logo.style.alignItems = 'center';
            logo.style.justifyContent = 'center';
        });
    </script>

@endif
