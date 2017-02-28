<!doctype html>

<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>FragFit</title>
</head>
<body>
	<div id="container">
		<?php
	include("navi.html");
	?>	
	
		<div id="content" class="content">
			<h1>FragFit</h1>
			<div id="teaser" align="center">
				<img src="pictures/resultpicture.png" width="40%" height="40%" alt="logo">
			</div>    
			<div class="middleblock">
							<h2>Motivation</h2>
				<h3>An interactive tool for prediction, visualization and selection of missing segments in protein cryo-EM density maps.</h3>
			  
				   FragFit is an interactive web service for guided modeling
			   of missing segments such as loops or hige regions into cryo-Electron Microscopy (cryo-EM) density maps.
			   Segments of up to 3-35 residues length can be effectively modeled into maps of different resolution. Fragments
			   are taken from a pre-calculated and frequently updated database containing >900 million
			   entries extracted from structural coordinates deposited in the RSCB PDB <a target="_self" href="references.php">[4]</a>.
			   A fast hierarchical search algorithm (FragSearch <a target="_self" href="references.php">[11]</a>) selects up to 100 suitable
			   fragments by using sequence similarity and geometrical fitting as evaluation criteria. The found fragments are then
			   re-ranked by their cross-correlation to the user provided cryo-EM density map. To minimize calculation time and to reduce false
			   positive predictions, the provided map is preprocessed.
			   
				<h3>Visualization</h3>
				   Integration of the NGL viewer <a target="_self" href="references.php">[8]</a>, a molecular viewer based on WebGL,
			   allows visualization and interactive selection of a loop from a
			   list of 100 suitable candidates. A color code is provided to
			   indicate clashes or  other relevant criteria to promote an
			   individual choice of the most suitable loop.
			   By inspection of the best 5 fitted fragments, prediction quality is enhanced <a target="_self" href="references.php">[12]</a>.
			   
				 <h3>Results</h3>
				   The fragments are provided for visual inspection and can be selected from the sortable result table. A selected loop inserted into
			   the user provided protein can be downloaded. In addition, all 100 loop candidates can be downloaded
			   for further analyses. 
			
			</div>
		</div>
	</div>
	   	<?php
	include('footer.html');
	?>
</body>
</html>
