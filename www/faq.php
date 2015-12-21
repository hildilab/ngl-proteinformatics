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
        
       <h4> Is a registration requiered?</h4>

No, SL2 is free for all users and no login is required.

<h4>WHAT is the PURPOSE of sl2?</h4>

SL2 can be used to interactively insert protein segments, such as loops of 3 to 35 residues length, into gaps of protein structures.

<h4>What has to be provided to start a search?</h4>

The user has to upload a protein and specify the sequence of the destined
segment and the two stem residues of the gap where the segment has to be inserted.

<h4>can the completed structure be downloaded from the server?</h4>

As soon as a suitable fragment is found and selected by the user,
the structure can be downloaded with the inserted fragment, which
sequence is automatically mutated to the destined sequence provided
by the user.

<h4>Are the sidechains of the loop included?</h4>

We add sidechains in a standard configuration.
This might lead to clashes. Please have in mind
that a energy minimization might be necessary
before using the protein in a MD simulation.

<h4>Do I have to install a plugin to use the NGL viewer?</h4>

No, the NGL viewer is based solely on browser technologies
that are provided by every modern web-browser. Additional
installations are not needed. Plaese make sure that you have updated your brwoser
to the latest version.

<h4>How do I use the NGL viewer?</h4>

A complete documentation of the NGL viewer can be found
<a target="_blank" href="http://proteinformatics.charite.de/ngl-tools/ngl/doc/index.html#User_manual/Introduction/Welcome">here</a>.

        </div>

         </div>
   	<?php
	include('footer.html');
	?>
    </div>

    <!-- Insert your content here -->
</body>
</html>
