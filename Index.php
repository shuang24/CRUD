<?php
require_once('db_connection.php');
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
        		
                <!-- // #sidebar --> 
                
                <!-- h2 stays for breadcrumbs --> 
                <h2><a href="index.php">Home</a> &raquo; <a href="#" >News</a>&raquo;<a href="#" class="active">World</a></h2> 
                
                <div id="main"> 
					<h3>world news List</h3> 
                    <table cellpadding="0" cellspacing="0"> 
                        <tr><th width="70">ID</th>
                        <th style="text-align:center;" width="109">Title</th>
                        <th style="text-align:center;" width="99" >Author</th>
                        <th style="text-align:center;" width="86">Status</th>
                        <th style="text-align:center;" width="135">Date</th>
                        <th style="text-align:center;" width="250">Content</th>
                        <th width="199" style="text-align:center;">Action</th>
                        </tr> 
                        <?php
                        $sql ="SELECT * FROM `news`";

                        $res = mysql_query($sql);
                        while ($row = mysql_fetch_assoc($res)):
                            ?>
                         <tr> 
                            <td align="center"><?php echo $row["id"]; ?></td>
                            <td align="center"><?php echo $row["title"]; ?></td>
                            <td align="center"><?php echo $row["author"]; ?></td>
                            <td align="center"><?php echo $row["status"]; ?></td>
                            <td align="center"><?php echo $row["date"]; ?></td>
                            <td align="center"><?php echo $row["content"]; ?></td>
                            <td align="center" class="action"> 
                            <a href="edit.php?id=<?php echo $row['id']?>" class="edit">Edit</a> 
                            <a href="view.php?id=<?php echo $row['id']?>" class="view">View</a> 
                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?php echo $row['id']?>" class="delete">Delete</a>
                            </td> 
                        </tr>   

                        <?php endwhile ?>
                        <br />
                        <br />
                        <tr><td colspan="6">
                        <div id="page" class="pages"> 
                          <ul> 
                            <li>Total:<span>27</span></li> 
                            <li><span>1</span>/<span>2</span></li> 
                            <li>First</li> 
                            <li>Previous</li> 
                            <li class="on">1</li> 
                            <li class="page_a"><a href="?page=2" title="No.2">2</a></li> 
                            <li class="page_a"><a href="?page=2"  title="Next" >Next</a></li> 
                            <li class="page_a"><a href="?page=2"  title="Last" >Last</a></li> 
                          </ul> 
                          <div class="page_clear"></div> 
</div></td></tr>                        
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