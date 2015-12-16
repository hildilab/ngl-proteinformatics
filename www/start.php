<!doctype html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>SL2</title>
</head>
<body>
    <div id="container">
		<?php
	include('navi.html');
	?>	

    <div id="content" class="content">
        <h1>SuperLooper2 </h1>
        <div id="teaser" align="center">
        <img src="pictures/random.png" width="40%" height="40%" alt="logo">
        </div>    
        <h2>Motivation</h2>
        <div class="middleblock">
	  <p>
	    
	  </p><h3>An interactive tool for prediction, visualization and selection of missing segments in proteins</h3>
           SuperLooper2 is an interactive web service for the insertion of missing loops
           in proteins. Loop candidates are selected from a pre-calculated database containing ~700
           million fragments with up to a length of 35 residues. The fragments were extracted
           from known(crystal & model?) structures deposited in the RSCB PDB.
           <h3>Visualization</h3>
           The integration of the NGL viewer (ref) for visualization allows an interactive selection of a most
           fitting loop. Up to 50 suitable loop candidates can be interactively and visually inspected. 
           Coloring by criteria like clashes or sequence identity provides the user additional
           informations to allow an individual choice of the most suitable loop.
           <h3>Results</h3>
           The selected loop can be downloaded separately or included into the protein.
           In addition, all 50 loop candidates can be downloaded (in a combined pdb file or separated) for the purpose of further analyses.
        </div>
    </div>
   </div>
   	<?php
	include('footer.html');
	?>
    </div>
</body>
</html>
