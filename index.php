<?
// Use HTTP Strict Transport Security to force client to use secure connections only
$use_sts = true;

// iis sets HTTPS to 'off' for non-SSL requests
if ($use_sts && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    header('Strict-Transport-Security: max-age=31536000');
} elseif ($use_sts) {
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], true, 301);
    // we are in cleartext at the moment, prevent further execution and output
    die();
}
?>
<?php include 'config.php';?>

<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" media="screen and (max-width: 850px)" href="mobile-bio.css">
        <link rel="stylesheet" media="screen and (min-width: 851px)" href="bio.css">
         <title><? echo "$tagline"; ?></title>
    </head>
    
    <body>
        
         <div class="content">
             
        <div class="avatar">
            <img src="<? echo "$photo"; ?>" alt="Photo">
        </div>
        
        <div class="name">
            <h1><? echo "$name"; ?></h1>
            <h3><? echo "$tagline"; ?></h3>
        </div>
       
           
            
            <div class"links>
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$mewelink"; ?>"><img class="icon" src="<? echo "$meweicon"; ?>" alt="<? echo "$mewetagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$mewetagline"; ?></h3>
                       <a href="<? echo "$mewelink"; ?>"><? echo "$mewedescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            
            <br />
            
           <div class"links>
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$mindslink"; ?>"><img class="icon" src="<? echo "$mindsicon"; ?>" alt="<? echo "$mindstagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$mindstagline"; ?></h3>
                       <a href="<? echo "$mindslink"; ?>"><? echo "$mindsdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            
            <br />
            
            <div class"links>
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$truthlink"; ?>"><img class="icon" src="<? echo "$truthicon"; ?>" alt="<? echo "$truthtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$truthtagline"; ?></h3>
                       <a href="<? echo "$truthlink"; ?>"><? echo "$truthdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            
            <br />
        
                
            <div class"links>
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$gettrlink"; ?>"><img class="icon" src="<? echo "$gettricon"; ?>" alt="<? echo "$gettrtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$gettrtagline"; ?></h3>
                       <a href="<? echo "$gettrlink"; ?>"><? echo "$gettrdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            
            <br />
            
            <div class"links>
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$parlerlink"; ?>"><img class="icon" src="<? echo "$parlericon"; ?>" alt="<? echo "$parlertagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$parlertagline"; ?></h3>
                       <a href="<? echo "$parlerlink"; ?>"><? echo "$parlerdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            
            <br />
             
            <div class"links>
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$usalink"; ?>"><img class="icon" src="<? echo "$usaicon"; ?>" alt="<? echo "$usatagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$usatagline"; ?></h3>
                       <a href="<? echo "$usalink"; ?>"><? echo "$usadescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            
            <br />
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$gablink"; ?>"><img class="icon" src="<? echo "$gabicon"; ?>" alt="<? echo "$gabtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$gabtagline"; ?></h3>
                       <a href="<? echo "$gablink"; ?>"><? echo "$gabdescription"; ?></a>
                    </div>
                
                    
                </div>
            
            
            <div class="footer">
                <p>&copy; <?php 
                    $year = date("Y"); 
                    
  
                    // Display the year
                        echo $year; 
  
?> <? echo "$name"; ?> - Hand coded with &#10084;
</P>
                
            </div>
            
        </div>
    </body>
</html>