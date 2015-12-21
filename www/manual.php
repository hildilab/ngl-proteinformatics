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
    <tr>
	<td ><img src="pictures/website_overview.png"  width="80%" height="80%" alt="logo"></td>
        <td > <h3>Start</h3><br><a>
		The SL2 start display has two different panels. In the upper left
		corner you find the general controls for the NGL viewer, located
		in dropdown menus. The right panel contains the SL2 controls: a
		button to start new jobsor to load an example. <br>  </a></td>
        
    </tr>   
    <tr>    
        <td><img src="pictures/new_jobh.png" alt="logo"></td>
       <td><h3>New job</h3> <a>
	   To start a new SL2 job you have to provide  a coordinate file of a protein structure
	   in PDB format. The two stem residues flanking a missing segment or a segment that
	   should be remodelled have to be typed in a formular or selected from the NGL
	   visualization by mouse selection. Finally, the amino acids sequence of the missing
	   segment has to be provided. Depening on fragment length, a fragment search may take
	   up to 30 seconds. When the job is finished, the results are displayed automatically.</a></td>
    </tr>
    <tr>
        <td><img src="pictures/result_table_h.png" alt="logo"></td>
        <td><h3>Results</h3> <a>
		The top candidate loop is automatically displayed in the NGL viewer together with the uploaded protein (model).
		Other loops can be selected from the list of 50 candidates by visualization or by using the information
		provided in the table at the right panel for guidance. This table includes the following information for
		each candidate loop: an ID , a score , a clash score, the PDB ID and the position of the fragment in the
		template protein, and a comparison of the user-defined input sequence with the template sequence (sequence similarity).
		Sequences that are underlined contain prolynes or glycins.
		<br>
By selecting a result, the loop is displayed together with the uploaded protein. The complete list of loop candidates can be displayed
simultaneously to visualize the conformational space of the loop. The loop can be colored according to its score, sequence identity or
clash score by selecting the corresponding color scheme from the dropdown menu. Additionally, the representation of the structure and
the loop (collapsed underneath the result table) can be changed as explained in the separate documentation of the NGL viewer. 
The completed structure (initial model plus selected loop) can be downloaded by clicking the download symbol. Alternatively, the complete
list of loops can be downloaded for a further analysis.       
        </a></td>
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
