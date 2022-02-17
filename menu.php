<?php
include_once "dadosMenu.php";
?>
<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu">
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler hidden-phone">
				</div>
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			</li>
			<li class="sidebar-search-wrapper">
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<form class="sidebar-search" action="extra_search.html" method="POST">
					<div class="form-container">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div>
					</div>
				</form>
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>

			<?php
			function echoList($array)
			{
				foreach ($array as $item) {

					if (isset($item['apName'])) {
						echo '<li class="" id="ativar-' . $item['apName'] . '"><a href="javascript:;"><span class="selected"></span>';
					} else {
						echo '<li class="" id=""><a href="' . $item['link'] . '"><span class="selected"></span>';
					}

					if (isset($item['iconMenu'])) {

						echo '<i class="' . $item['iconMenu'] . '"></i>';
					} else {
						echo '<i class=""></i>';
					}

					if (isset($item['apName'])) {
						echo '<span class="title" id="' . $item['apName'] . '">' . $item['name'] . '</span>';
					} else {
						echo '<span class="title" id="">' . $item['name'] . '</span>';
					}



					if (isset($item['iconSetaArrow'])) {
						echo '<span class="' . $item['iconSetaArrow'] . '"></span>';
					}

					echo '</a>';

					if (isset($item['child']) && !empty($item['child'])) {
						echo '<ul class="sub-menu">
						
						<li>
						
					';
						echoList($item['child']);
						echo "</ul></li>";
					}

					echo '</li>';
				}
			}

			echoList($organized);



			?>

		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>