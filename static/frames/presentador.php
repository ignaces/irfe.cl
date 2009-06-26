<script>$(window).load(function(){var timeOut = null;$('#presentador .arrow').click(function(e,simulated){if(!simulated){clearTimeout(timeOut);}});(function autoAdvance(){$('#presentador .next').trigger('click',[true]);timeOut = setTimeout(autoAdvance,5000);})();});</script> 
    <div id="presentador"> 
        <ul class="slides"> 
            <li>
            <img src="dinamic/bienvenido1.png" />
            </li>
            <li><img src="dinamic/1.jpg" />
            </li>
        </ul> 
        <span class="arrow previous"></span> 
        <span class="arrow next"></span> 
    </div>