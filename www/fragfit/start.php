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
        <h2>Motivation</h2>
        <div class="middleblock">
	  <p>
	    
	  </p><h3>An interactive tool for prediction, visualization and selection of missing segments in proteins with usage of Cryo-EM maps</h3>
	  
           FragFit is an interactive web service for the insertion
	   of missing segments such as loops in proteins guided by cryo-EM data. Loop candidates
	   are selected from a pre-calculated database containing ~900 million
	   protein fragments with of 3-35 residues length. The fragments are
	   extracted from structural coordinates deposited in the RSCB PDB <a target="_self" href="references.php">[4]</a>. The found fragment are then
	   ranked by their cross-correlation to a user provided cryo-Em map.
	   
           <h3>Visualization</h3>
           Integration of the NGL viewer <a target="_self" href="references.php">[8]</a>, a molecular viewer based on WebGL,
	   allows visualization and interactive selection of a loop from a
	   list of 50 suitable candidates. A color code is provided to
	   indicate clashes or  other relevant criteria to promote an
	   individual choice of the most suitable loop.
	   
           <h3>Results</h3>
           A selected loop can be downloaded inserted into
	   the user provided protein. In addition, all 50 loop candidates can be downloaded
	   for further analyses. 

        </div>
    </div>
   </div>
   	<?php
	include('footer.html');
	?>
    </div>
</body>
</html>
