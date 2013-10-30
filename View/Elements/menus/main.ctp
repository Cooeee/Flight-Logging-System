<ul class="header main-menu">
<?
	$menus = $this->requestAction('/menus/index');
	if (is_array($menus)) {
		foreach($menus as $menu) : 
	    		echo "<li><a href='".DS.$menu['Menu']['controller'].DS.$menu['Menu']['action']."'>".$menu['Menu']['name']."</a></li>";
		endforeach;
	}
?>
</ul>
