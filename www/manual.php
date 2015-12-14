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
        <td > <h3>Start</h3><br><a>The SuperLooper2 start display has to different panel. In the upper left corner the general controls for the NGL-viewer are located 
On the right panel are the SuperLooper2 controls. Here new jobs can be started, a example can be displayed or existing results can be visualized. <br>  </a></td>
        
    </tr>   
    <tr>    
        <td><img src="pictures/new_job.png"  alt="logo"></td>
       <td><h3>New job</h3> <a>To start a SuperLooper2 job the proteinstructure has to be uploaded and the two stem residues as well as the sequence of the missing segment has to be specified. A fragment search takes 20-30 seconds. Afterwards the results
       are displayed.</a></td>
    </tr>
    <tr>
        <td><img src="pictures/result_table.png" alt="logo"></td>
        <td><h3>Results</h3> <a>After the search has finished the results are displayed in th NGL-Viewer and additional information for
        each loop is provided in a table at the right panel.<br>
        For each loop the ID, the score, the PDB ID of the Template, a clash score,
        the sequence of the loop the sequence identity to the user provided sequence
        and the location of the loop in the template structure are listed.
        Each looop can be downloaded inserted in the user provided protein by clicking the download symbol
        at each loop.<br>
        The loop can be colored according to their score, sequence idetity or or clash score by selecting the corresponding color scheme
        from the dropdown menue.<br>
        The found loops can be displayed at once to analyze the conformational space that is covered by the found loops.<br>
        All found loops can be downloaded for a further external analysis.
        
        
        
        
        
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
