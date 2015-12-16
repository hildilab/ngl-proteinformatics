<!doctype html>

<html lang="en">
<head>
       <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>FAQ</title>
</head>
<body>
    <div id="container">
	<?php
	include('navi.html');
	?>	
    </div>
    <div id="content" class="content">
        <h1>Frequently asked questions</h1>
        
       <h4> Is a registration needed?</h4>

No, SuperLooper2 is free for all users and no login is required.

<h4>For what purpose can it be used?</h4>

SuperLooper2 can be used to search protein segments of a length of 3 to 35 residues from a database of known structures and inserts them in the loaded protein structure.

<h4> What information is needed to search for a protein fragment?</h4>

The user has to specify two stem residues that represent the endpoints of the fragment and the sequence of the queried segment.

<h4>What sequence will the found fragment have?</h4>

The primary sequence of the found fragment will be automatically mutated to the sequence that the user has provided in the search criteria.
<h4>Are the sidechains included?</h4>
The sidechains of the found fragment are not included. We recommend to add the sidechains, using a standard tool to add the sidechains and to perform energy minimization afterwards.

<h4>Do I have to install a plugin to use the NGL viewer?</h4>
No, the NGL viewer is based solely on browser technologies that are provided by every modern web-browser. Additional installations are not needed. 
<h4>How do I use the NGL viewer?</h4>
A complete documentation of the NGL viewer can be found  <a target="_blank" href="http://proteinformatics.charite.de/ngl-tools/ngl/doc/index.html#User_manual/Introduction/Welcome">here</a>.
        </div>

         </div>
   	<?php
	include('footer.html');
	?>
    </div>

    <!-- Insert your content here -->
</body>
</html>
