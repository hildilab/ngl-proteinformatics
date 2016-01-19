<!doctype html>

<html lang="en">
<head>
    <title>Methods</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
   <div id="container">
        <?php
	include('navi.html');
	?>
    </div>
    <div id="content" class="content">
        <h1>Methods</h1>
        <h2>Database</h2>
        <p>To construct the database all overlapping fragments with a length
	of 3 to 35 were extracted from a collection of more than 100.000 protein
	structures currently deposited in the PDB. For each fragment the following
	information is stored in the database: Sequence, PDB identifier, location
	in the protein and a geometrical fingerprint (see below). The total number
	of fragments sum up to over 700 million. The number of available fragments
	is decreasing with increasing number of residues. This is caused by the fact
	that a smaller number of long fragments can be extracted from a structure, e.g.
	for the fragment length of 3 amino acids 23 million fragments are available,
	while for a fragment length of 35 this number declines to approximately 18 million.</p>
        <div align=center>
        <img src="pictures/database_both.png" width="40%" height="40%" alt="logo">
         </div>
	
	A second database holds fragments from helical membrane proteins. The number of helical
	transmembrane proteins in the PDB rose from 805 to 2.298. The number of loops in the database
	increased from 180.000 to 390.000.
	
        <h2>Geometric fingerprint</h2>
        <p> The geometrical fingerprint matching is used to evaluate the sterical fit
	of the stem atoms of the N- and C-termini of each database fragment to the C-
	and N-terminal stem atoms of a gap in a protein structure. Both geometrical
	fingerprints are composed by the distance between the N- and C-terminal stem
	atoms and three angles defining the relative orientation of the stem atoms. The geometrical
	fingerprint is characterized by the distance d between the N-terminal C atom and the
	C-terminal N atom and the following three angles:
         &alpha; defined by the line between C&alpha;<sup>(N)</sup>  and C<sup>(N)</sup>
         and d, &beta; is spanned by the line between N<sup>(C)</sup>  and C&alpha;<sup>(C)</sup>
         and d,  &gamma; defines the angle between the two planes A (defined by C&alpha;<sup>(N)</sup>,
         C<sup>(N)</sup>) and N<sup>(C)</sup>) and B (C&alpha;<sup>(C)</sup>, C<sup>(N)</sup>
         and N<sup>(C)</sup>).</i> This fingerprint
        is a slight alteration of the fingerprint used in our previous publication.
        Instead of combining two distances and two angles we now use one distance
	and three angles. Analysis of the previous fingerprint revealed that the score
	was slightly biased towards the residue where angle was measured. By
	using angles on both stem residues, the resulting score does not favor
	the fit of the candidate fragment to one stem residue over the other any
	more.</p>
	
        <div align=center>
        <img src="pictures/fingerprint.png" width="40%" height="40%" alt="logo">
        </div>    
       
</p>   <h2>Score</h2>
    The 500 best loop candidates are ranked according to a score that is composed
    by a measure for the sequence identity  and the fit of the stem atoms of loop
    and gap.<br>
    <br>
     <b>score = M - 0.1 * RMSD_stem<sup>2</sup></b><br>
     <br>
	
	The sequence score M is calculated using an environment-specific amino
	acid substitution matrix for accessible residues. The stem score RMSD
	is the root mean square deviation of the stem atoms C&alpha; and C of
	the N-terminal stem residue and N and C&alpha; of the C-terminal stem residues.
	
	
        <h2>Fragment Search</h2>
	
        <p>To minimize the calculation time of the fragment search a stepwise
	approach is used. In a first step, all fragments with the defined sequence
	length and which stem atoms matching the stem atoms of the gap with  at least
	0.75 &Aring RMSD are selected. In the second step, the 500 top candidates are chosen
	based on a quick estimation of the steric fit of the fragment to the rest of
	the protein e.g. excluding clashes. Subsequently, these 500 fragment are ranked
	by a score calculated from the sequence similarity and matching of the geometrical
	fingerprints of the (template) fragment and the target segment. To maximize the
	conformational space, fragments with an identical sequence or a backbone RMSD
	smaller than 1 &Aring are removed from the results list.</p>
        <div id="teaser" align="center">
        <img src="pictures/workflow.png" width="40%" height="40%" alt="logo" align=middle>
        </div>
   </div>
   	<?php
	include('footer.html');
	?>
    </div>
</body>
</html>
