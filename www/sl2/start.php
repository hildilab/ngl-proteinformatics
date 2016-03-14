<!doctype html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>SL2</title>
</head>
<body>
    <div id="container">
		<?php
	include("navi.html");
	?>	

    <div id="content" class="content">
        <h1>SuperLooper2 </h1>
        <div id="teaser" align="center">
        <img src="pictures/random2.png" width="40%" height="40%" alt="logo">
        </div>    
        <h2>Motivation</h2>
        <div class="middleblock">
	  <p>
	    
	  </p><h3>An interactive tool for prediction, visualization and selection of missing segments in proteins</h3>
	  
           SuperLooper2 is an interactive web service for the insertion
	   of missing segments such as loops in proteins. Loop candidates
	   are selected from a pre-calculated database containing ~700 million
	   protein fragments with a residue length of 3-35. The fragments are
	   extracted from structural coordinates deposited in the RSCB PDB <a target="_self" href="references.php">[1]</a>.
	   
           <h3>Visualization</h3>
           Integration of the NGL viewer <a target="_self" href="references.php">[2]</a>, a molecular viewer based on WebGL,
	   allows visualization and interactive selection of a loop from a
	   list of 100 suitable candidates. A color code is provided to
	   indicate clashes or  other relevant criteria to promote an
	   individual choice of the most suitable loop.
	   
           <h3>Results</h3>
           A selected loop can be downloaded inserted into
	   the user provided protein. In addition, all 100 loop candidates can be downloaded
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
