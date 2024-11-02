<span class="border border-red-500 text-red-500 p-1 text-sm" style="
        border: 1px solid #f56565;
        background: #f56565;
        color: white;
        padding: 0.15rem 0.3rem;
        font-weight: bold;
        font-size: 0.7rem;
        /*line-height: 1.25rem;*/
        border-radius: 0.25rem;
        display: inline-block;
        margin: 0 0.5rem;
    " id="filament-oops-sign">

</span>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        const logo = document.querySelector('.fi-logo');
        // copy the filament-oops-sign element and add the word "Production" to it and append it to the logo
        const filamentOopsSign = document.querySelector('#filament-oops-sign');
        const productionSign = filamentOopsSign.cloneNode(true);
        productionSign.innerHTML = productionSign.innerHTML + ' Production';
        logo.innerHTML = logo.innerHTML + productionSign.outerHTML;

        // make the logo flex items center (style)
        logo.style.alignItems = 'center';
        logo.style.justifyContent = 'center';
    });
</script>
