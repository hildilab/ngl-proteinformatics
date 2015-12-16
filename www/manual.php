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
	<td ><img src="pictures/website_overview_inlay.png"  alt="logo"></td>
        <td > <h3>Start</h3><br><a>
		The SuperLooper2 start display has two different panels. In the upper left corner are the general
		controls for the NGL viewer located in dropdown menus. The right panel contains the SuperLooper2
		controls, including the opportunity to start new jobs, to display an example or to visualize
		previously calculated and downloaded results. <br>  </a></td>
        
    </tr>   
    <tr>    
        <td><img src="pictures/new_job.png"  alt="logo"></td>
       <td><h3>New job</h3> <a>
	   Input requirements for a SuperLooper2 job are a protein structure with missing segments,
	   two stem residues defining the position of the loop and the amino acids sequence of the missing
	   segment. A fragment search has a runtime of up to 30 seconds and displays afterwards 
	   the results automatically.</a></td>
    </tr>
    <tr>
        <td><img src="pictures/result_table.png" alt="logo"></td>
        <td><h3>Results</h3> <a>
		Subsequent to finishing the search, the results are displayed in the NGL viewer and the loops with 
		additional informations are provided in a table at the right panel.<br>
        For each loop its ID, score, clash score and further informations about the template like its PDB ID,
        sequence, the sequence identity of the template compaired to the user-defined input sequence and
		the position of the loop in the template structure are listed. 
		Each structure including the resulting loop
		can be downloaded individually by clicking the download symbol at each result.
		In addition, all found loops are downloadable for a further external analysis.<br>
		By selecting a result, the loop inserted into the protein is displayed. 
		The found loops can all be displayed at the same time to analyze the conformational space
		that is covered by all found loops.<br>
        The loop can be colored according to its score, sequence identity or clash
		score by selecting the corresponding color scheme
        from the dropdown menu. Additionally, the representation of the structure and
		the loop (collapsed underneath the result table) can be changed as explained in the documentation of the NGL viewer.<br>        
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
