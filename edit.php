<?php
require_once('db_connection.php');
$sql ="SELECT * FROM news WHERE id=".$_GET['id'];

$res = mysql_query($sql);
$rowData = mysql_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title> Manage</title> 
 
<!-- CSS --> 
<link href="css/transdmin.css" rel="stylesheet" type="text/css" media="screen" /> 
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="css/ie6.css" /><![endif]--> 
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie7.css" /><![endif]--> 

</head> 
<body> 
	<div id="wrapper"> 
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page --> 
    	<h1><a href="#"><span>verecom</span></a></h1> 
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet --> 
        <ul id="mainNav"> 
        	<li><a href="#">Home</a></li> <!-- Use the "active" class for the active menu item  --> 
        	<li><a class="active" href="">News</a></li> 
        	<li><a href="">Sports</a></li> 
        	<li><a href="" >Finance</a></li> 
        	<li><a href="">IT</a></li> 
        	<li class="logout"><a href="logout.php">LOGOUT</a></li> 
        </ul> 
        <!-- // #end mainNav --> 
        
        <div id="containerHolder"> 
			<div id="container"> 
        		
                
                <!-- h2 stays for breadcrumbs --> 
                <h2><a href="index.php">Home</a> &raquo;<a href="#">News</a>&raquo;<a href="#" class="active">Edit</a></h2> 
                
                <div id="main"> 
					<h3>Edit news</h3> 
                    <table cellpadding="0" cellspacing="0"> 
                        <tr>
                        	<td width="114">Title</td>
                        	<td width="584"><input type="text" value="<?php echo $rowData['title']?>"/></td>
                         </tr> 
                          <tr>
                        	<td width="114">Author</td>
                        	<td width="584"><input type="text" value="<?php echo $rowData['author']?>"/></td>
                         </tr> 
                          <tr>
                        	<td width="114">Category</td>
                        	<td width="584" value="<?php echo $rowData['category']?>"><select>
                          <option>World</option>
                          <option>US</option>
                          <option>Asian</option>
                          </select></td>
                         </tr> 
                         <tr>
                        	<td width="114">Status</td>
                        	<td width="584" value="<?php echo $rowData['status']?>"><select>
                          <option>Publish</option>
                          <option>Pending</option>
                          <option>...</option>
                          </select></td>
                         </tr> 
                          <tr>
                        	<td width="114">Content</td>
                        	<td width="584"><textarea cols="60" rows="10" <?php echo $rowData['description']?> ></textarea></td>
                         </tr>  
                         <tr>
                        	<td width="114">&nbsp;</td>
                        	<td width="584"><input type="submit" name="Submit" value="Submit" /></td>
                         </tr>                   
                    </table> 
                    <br /><br /> 
                </div> 
                <!-- // #main --> 
                
                <div class="clear"></div> 
            </div> 
            <!-- // #container --> 
        </div>	
        <!-- // #containerHolder --> 
        
        <p id="footer">CopyRight &copy; <a href="http://www.verecom.com">Verecom.com</a></p>    </div> 
    <!-- // #wrapper --> 
</body> 
</html> 
