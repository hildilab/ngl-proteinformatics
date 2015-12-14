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
        <p>To construct the database all overlapping fragments with a
        length from 3 to 35 where extracted from a collection of about
        90.000 protein structures deposited in the PDB in June 2013.
        For each fragment the following information is stored in the
        database: Sequence, PDB identifier and location in the protein
        and an geometrical fingerprint that characterizes each fragment.
        The total number of fragments summed up to almost 700 million
        fragments. The number of fragments is decreasing with increasing
        number of residues. This is caused by the fact that a smaller
        number of long fragments can be extracted from a structure.
        For the fragment length of 3 amino acids 23 million fagments
        are available. For a fragment length of 35 this number drops
        to about 18 million.</p>
        <div align=center>
        <img src="pictures/database_both.png" width="40%" height="40%" alt="logo">
         </div>   
        <h2>Geometric fingerprint</h2>
        <p>The geometrical fingerprints of both, the termini of each Superlooper2
        fragment and the N- and C-terminal stem atoms of a missing/queried segment,
        is composed by the distance between the N- and C-terminal stem atoms and
        three angles defining their relative orientation (Fig. 2). The fingerprint
        is a slight alteration of the fingerprint used in our older publications.
        There we used a combination of two distances and two angles, here one distance
        and three angles. Analysis of the previous fingerprint revealed that the
        score was slightly biased towards the residue where the angle was measured.
        By using angles on both stem residues, the resulting score does not privilege
        the fit of the candidate fragment to one stem residue over the other any more.</p>
        <div align=center>
        <img src="pictures/fingerprint.png" width="40%" height="40%" alt="logo">
        </div>    
         <p><i><b>Fig 2: Schematic representation of the geometrical fingerprint:</b>
         The geometrical fingerprint is characterized by the distance d between
         the N-terminal C- and the C-terminal N atom and the following three angles:
         &alpha; defined by the line between C&alpha;<sup>(N)</sup>  and C<sup>(N)</sup>
         and d, &beta; is spanned by the line between N<sup>(C)</sup>  and C&alpha;<sup>(C)</sup>
         and d,  &gamma;: the angle between the two planes A (defined by C&alpha;<sup>(N)</sup>,
         C<sup>(N)</sup>) and N<sup>(C)</sup>) and B (C&alpha;<sup>(C)</sup>, C<sup>(N)</sup>
         and N<sup>(C)</sup>).</i></p>   
        <h2>Fragment Search</h2>
        <p>To search for fragments a stepwise approach is used
        to minimize the search time as much as possible. In a
        first step the fragments with the required sequence
        length that fit to the stem atoms with an accuracy of
        at least 0.75Å are selected. As second step the 500 best
        fitting candidates are chosen based on a quick estimation
        of the steric fit of the fragment to the rest of protein.
        These 500 fragment subsequently are ranked with a score that
        takes the sequence similarity between the fragment and the
        target sequence as well as the fit of the geometrical fingerprint
        of the fragment into account. To guarantee that the results reflect
        as much of the conformational space as possible, fragments with an
        identical sequence or a backbone RMSD smaller than one are removed
        from the resulting list.</p>
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
