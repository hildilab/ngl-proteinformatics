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
<br>
No, SL2 is free for all users and no login is required.


<h4>Which web-browsers are supported?</h4><br>
Every modern web-browser that supports WebGl. To check the compatibility of your browser and further information see the <a target="_blank" href=https://github.com/arose/ngl#browser>NGL documentation</a>.

<h4>WHAT is the PURPOSE of sl2?</h4>
<br>
SL2 can be used to interactively insert protein segments, such as loops of 3 to 35 residues length, into gaps of protein structures.

<h4>What has to be provided to start a search?</h4>
<br>
The user has to upload a protein and specify the sequence of the destined
segment and the two stem residues of the gap where the segment has to be inserted.

<h4>I get no results, what might be the problem?</h4><br>
In some rare cases no suitable loops can be found. Try to extend the loop search by one amino acid in C- or N-terminal direction. 

<h4>can the completed structure be downloaded from the server?</h4>
<br>
As soon as a suitable fragment is found and selected by the user,
the structure can be downloaded with the inserted fragment, which
sequence is automatically mutated to the destined sequence provided
by the user.

<h4>Are the sidechains of the loop included?</h4>
<br>
We add sidechains in a standard configuration.
This might lead to clashes. Please have in mind
that an energy minimization might be necessary
before further usage of the model.

<h4>What is included in the different download files?</h4>
<br>
All found loops can be downloaded in a single PDB-file where the individual loops are separated by a model tag.<br>
A single loop can be downloaded renumbered and inserted at the correct position in the user-provided structure file.

<h4>Do I have to install a plugin to use the NGL viewer?</h4>
<br>
No, the NGL viewer is based solely on browser technologies
that are provided by every modern web-browser. Additional
installations are not needed. Please make sure that you have updated your browser
to the latest version.

<h4>How do I use the NGL viewer?</h4>
<br>
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
