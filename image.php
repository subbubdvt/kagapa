<?php  
$theid = $_REQUEST['imgid'];  
  
switch($theid) {  
    case 1:  
        $heading = "Wunderkit";  
        $origin  = "http://dribbble.com/shots/297593-Wunderkit-tasks";  
        $source  = "./images/1.jpg";  
        break;  
    case 2:  
        $heading = "College";  
        $origin  = "http://dribbble.com/shots/298643-Colleeeeeeeeeeeeege";  
        $source  = "./images/2.jpg";   
        break;  
    case 3:  
        $heading = "Forum app";  
        $origin  = "http://dribbble.com/shots/298649-Forum-app-for-Facebook";  
        $source  = "./images/3.jpg";  
        break;  
    case 4:  
        $heading = "Twitter";  
        $origin  = "http://dribbble.com/shots/298069-Twitter";  
        $source  = "./images/4.jpg"; 
        break;  
    default:  
        $heading = "Abandoned lighthouse";  
        $origin  = "http://dribbble.com/shots/298615-Abandoned-lighthouse";  
        $source  = "./images/5.jpg"; 
}  
?>  

<div data-role="page" id="images" data-add-back-btn="true">  
    <header data-role="header">  
        <h1><?php echo $heading; ?></h1>  
    </header>  
      
    <div data-role="content">  
        <p><strong><a href="<?php echo $origin; ?>" data-rel="external">View the Original</a></strong></p>  
        <p><a href="<?php echo $origin; ?>" data-rel="external"><img src="<?php echo $source; ?>" /></a></p>  
    </div>  
      
    <footer data-role="footer"><h3>www.dribbble.com</h3></footer>  
</div>  