<div class ="alert alert-danger">
	<ul>

		<?php

			if(!empty($_REQUEST['erreurs'])) {

				foreach($_REQUEST['erreurs'] as $erreur) {
      				echo "<li>$erreur</li>";
				}
			}

		?>
		
	</ul>
</div>
