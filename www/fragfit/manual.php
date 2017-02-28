<!doctype html>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Manual</title>
</head>
<body>
    <div id="container">
	<?php
	include('navi.html');
	?>
    </div>
    
 <div id="content" class="content">
     <div>
         <h1>Manual</h1>
    
           
    <table><tbody>
    <h3>Start</h3>
    <tr>
        <td > <br><a>
		The FragFit start display has two different panels. In the upper left
		corner you find the general controls for the NGL viewer, located
		in dropdown menus. The right panel contains the FragFit controls: a
		button to start new jobs or to load an example. <br>  </a></td>
        	<td ><img src="pictures/website_overview_s1.png" width="100%" alt="logo"></td>
    </tr>
    </tbody></table>
    <table><tbody>
    <h3>FragFit job</h3>
    <tr>    
       <td>
	<h5> Start search</h5><a>
       
	   To start a new FragFit job you have to provide a coordinate file of a protein structure in PDB format and an cryo-EM map in MRC or CCP4 (MAP) format.
	
	   To reduce the computation time it can be useful to upload a map containing only the direct vicinity of the missing fragment. 
	   The two stem residues flanking a missing segment or a segment that should be remodeled have to be
	   typed in a form or selected from the NGL visualization by mouse selection. To clear the stem residues
	   from the form use the 'clear stems' button, afterwards, they can be filled by mouse selection again.
	   Finally, the amino acids sequence of the missing segment and the resolution of the cryo-EM density map have to be provided. Additionally,
	   the membrane can be calculated by applying informations from
	   TMDET <a target="_self" href="references.php">[6]</a> and some further processing.
	   Depending on fragment length, a fragment search may take up to 2 minutes. When the job is
	   finished, the results are displayed automatically.</a>
       
      <h5> Modify search</h5>
       <a>If no suitable loop was found a possible solution is to extend the loop search in N- or C-terminal direction.
       To do this push one of the extension buttons. The stem residue will be changed by one into the chosen direction
       and the search sequence will be updated accordingly. To modify the search parameters manually change the form and press
       submit. The result table will be updated after the search is completed. To start a completely new job please
	   reload the web-site. Old results will be lost. </a>
       </td>
               <td><img src="pictures/job.png" alt="logo"></td>

    </tr>
    </tbody></table>
    <table><tbody>
    <h3>Results</h3> 
    <tr>
        <td><a>
		The top candidate loop is automatically displayed in the NGL Viewer together with the uploaded protein (model) and the user provided cryo-EM density map.
		Other loops can be selected from the list of up tp 100 candidates by visualization or by using the information
		provided in the table at the right panel for guidance. This table includes the following information for
		each candidate loop: an ID, a correlation score, a score describing the steric fit of the segment, a clash score, the PDB ID and the position of the fragment in the
		template protein and a comparison of the user-defined input sequence with the template sequence (sequence similarity).
		Sequences that are underlined contain prolines or glycines.
		<br>
		 By selecting a result, the loop is displayed together with the uploaded protein. The complete list of loop candidates can be displayed
		simultaneously to visualize the conformational space of the loop. The loop can be colored accordingly to its score, correlation score, sequence identity or
		clash score by selecting the corresponding color scheme from the dropdown menu. Additionally, the representation of the structure and
		the loop (collapsed underneath the result table) can be changed as explained separatly in the documentation of the NGL Viewer. 
		The completed structure (initial model plus selected loop) can be downloaded by clicking the download symbol. Alternatively, the complete
		list of loops can be downloaded for further analyses.       
			</a></td>
	        <td><img src="pictures/results.png" alt="logo"></td>

     </tr>
    
    </table>
    
    </tbody> </div> </div>
   </div>
   	<?php
	include('footer.html');
	?>
    </div>
</body>
</html>
