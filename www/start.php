<!doctype html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>SuperLooper2</title>
</head>
<body>
    <div id="container">
		<?php
	include('navi.html');
	?>	

    <div id="content" class="content">
        <h1>Superlooper 2 </h1>
        <div id="teaser" align="center">
        <img src="pictures/random.png" width="40%" height="40%" alt="logo">
        </div>    
        <h2>Motivation</h2>
        <div class="middleblock">
	  <p>
	    
	  </p><h3>A web server for the interactive placement of loops in proteins</h3>
    
           Superlooper2 is a interactive web server for the search and placement of loops
           in proteins. Loop candidate are selected from a database containing about 700
           million fragments with a length up to 35 residues. The fragments were extracted
           from known structures deposited in the PDB.
           <h3>Visualisation</h3>
           The visualization via the NGL viewer allows a interactive choice of the most
           suitable loop. Up to 50 candidate loops can be chosen interactively. Coloring
           by criteria like clashes or sequence identity provide the user additional
           information to allow the choice of the most suitable loop.
           <h3>Results</h3>
           The chosen loop can be downloaded separately or included in the protein.
           Furthermore all loop candidates can be downloaded for further analysis.
        </div>
    </div>
   </div>
   	<?php
	include('footer.html');
	?>
    </div>
</body>
</html>
