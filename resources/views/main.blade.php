@if(isset($config[config('app.env')]))

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const logo = document.querySelector('.fi-logo');
            const productionSign = document.createElement('span');
            productionSign.style.background = '{{ $config[config('app.env')]['color'] }}';
            productionSign.id = 'filament-oops-sign';

            productionSign.innerHTML = productionSign.innerHTML + ' ' + '{{ $config[config('app.env')]['label'] }}';
            logo.innerHTML = logo.innerHTML + productionSign.outerHTML;

            // make the logo flex items center (style)
            logo.style.alignItems = 'center';
            logo.style.justifyContent = 'center';
        });
    </script>

@endif
