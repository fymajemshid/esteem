<div class="copyrights_agile">
    
</div>	
<!--copy rights end here-->
</div>
</div>
<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

<script type="text/javascript" src="{{asset('app-assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('app-assetsjs/modernizr.custom.js')}}"></script>

<script src="{{asset('app-assetsjs/classie.js')}}"></script>
<script src="{{asset('app-assetsjs/gnmenu.js')}}"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>

<!-- //js -->

<script src="js/screenfull.js"></script>
<script>
$(function () {
$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

if (!screenfull.enabled) {
return false;
}



$('#toggle').click(function () {
screenfull.toggle($('#container')[0]);
});	
});
</script>
<script src="{{asset('app-assetsjs/jquery.nicescroll.js')}}"></script>
<script src="{{asset('app-assetsjs/scripts.js')}}"></script>
<script src="{{asset('app-assetsjs/snow.js')}}"></script>
<script type="{{asset('app-assetstext/javascript')}}">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<script type="text/javascript" src="{{asset('app-assetsjs/bootstrap-3.1.1.min.js')}}"></script>


</body>
</html>