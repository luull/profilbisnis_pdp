<?PHP 
if (empty($judul))
$judul=env('APP_NAME');
?>
<header class="site-header sticky-header main-bar-wraper navbar-expand-lg bg-dark" style="height:50px !important">
		<div class="text-white text-center">
            <h4 class="title pt-2 text-center text-white">{{strtoupper($judul)}}</h4>
       </div>
	
</header>
