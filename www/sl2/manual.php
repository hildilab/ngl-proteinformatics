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
		The SL2 start display has two different panels. In the upper left
		corner you find the general controls for the NGL viewer, located
		in dropdown menus. The right panel contains the SL2 controls: a
		button to start new jobs or to load an example. <br>  </a></td>
        	<td ><img src="pictures/website_overview.png" alt="logo"></td>
    </tr>
    </tbody></table>
    <table><tbody>
    <h3>SL2 job</h3>
    <tr>    
       <td>
	<b> Start search</b><a>
       <br>
	   To start a new SL2 job you have to provide a coordinate file of a protein structure in PDB format.
	   The two stem residues flanking a missing segment or a segment that should be remodeled have to be
	   typed in a form, or selected from the NGL visualization by mouse selection. To clear the stem residues
	   from the form, use the 'Clear input fields' button, afterwards, they can be filled by mouse selection again.
	   Finally, the amino acids sequence of the missing segment has to be provided. To search for loops only
	   originating from membrane proteins check the MembraneDB check-box, otherwise the full database will be
	   searched. Additionally, the membrane can be calculated by applying informations from
	   TMDET <a target="_self" href="references.php">[3]</a> and some further processing.
	   Depending on fragment length, a fragment search may take up to 30 seconds. When the job is
	   finished, the results are displayed automatically. To stop a running job press the 'Stop' button.<br>
	   Please be aware that the protein structure that should be used for the loop search has to be uploaded via the
	   file upload dialog of the SL2 job formular (not by drag and drop). To visualize additional molecules that are not used to search loops
	   drag the file into the viewer. If additional molecules are loaded, be aware of selecting only stem residues
	   of the molecule loaded by the 'SL2 job formular'.
	   
	   </a>
       <br>
      <b> Modify search</b>
	  <br>
       <a>If no suitable loop was found, one possible solution is to extend the loop search in N- or C- terminal direction by pushing the "Decrease N-terminal stem" or "Increase C-terminal stem" button. The stem residue will be changed by one into the chosen direction
       and the search sequence will be updated automatically. To modify the search parameters manually change the form and press
       submit. The result table will be updated after the search is completed. To start a completely new job, please reload the web-site. Old results will be lost. </a>
       </td>
               <td><img src="pictures/job.png" alt="logo"></td>

    </tr>
    </tbody></table>
    <table><tbody>
    <h3>Results</h3> 
    <tr>
        <td><a>
		The top candidate loop is automatically displayed in the NGL viewer together with the uploaded protein (model).
		Other loops can be selected from the list of 100 candidates by visualization or by using the information
		provided in the table at the right panel for guidance. This table includes the following information for
		each candidate loop: an ID, a score, a clash score, the PDB ID and the position of the fragment in the
		template protein and a comparison of the user-defined input sequence with the template sequence (sequence similarity).
		Sequences that are underlined contain prolines or glycines.
		<br>
		 By selecting a result, the loop is displayed together with the uploaded protein. The complete list of loop candidates can be displayed
		simultaneously to visualize the conformational space of the loop. To get back to a single loop click a loop in the result table or use the "Show first" button to view the top hit again.
		The loop can be colored according to its score, sequence identity or
		clash score by selecting the corresponding color scheme from the dropdown menu. Additionally, the representation of the structure and
		the loop (collapsed underneath the result table) can be changed as explained separatly in the documentation of the NGL viewer. 
		The resulting structure (initial model plus selected loop) can be downloaded by clicking the download symbol. Alternatively, the complete
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
