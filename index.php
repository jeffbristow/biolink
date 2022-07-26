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
<?php include 'social-links.php';?>

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
       
           
            
<?php 


// Link Boxes dynamically placed in ascending sort order based on sort assigned in config.php
if ( $sorttype == "asc" )
{
$linkboxes = array($whatsapplinkbox => $whatsappsort, $rokfinlinkbox => $rokfinsort, $telegramlinkbox => $telegramsort, $rumblelinkbox => $rumblesort, $mastodonlinkbox => $mastodonsort, $linkedinlinkbox => $linkedinsort, $tribellinkbox => $tribelsort, $pintrestlinkbox => $pintrestsort, $emaillinkbox => $emailsort, $facebooklinkbox => $facebooksort, $twitterlinkbox => $twittersort, $stravalinkbox => $stravasort, $instagramlinkbox => $instagramsort, $mewelinkbox => $mewesort, $mindslinkbox  => $mindssort, $truthlinkbox  => $truthsort, $gettrlinkbox  => $gettrsort, $parlerlinkbox  => $parlersort, $usalinkbox  => $usasort, $gablinkbox  => $gabsort, $youtubelinkbox => $youtubesort);
asort($linkboxes); 

// Loop through link boxes
foreach($linkboxes as $sortedlinkboxes => $val){
    echo "$sortedlinkboxes";
}
}
// Link Boxes dynamically placed in descending sort order based on sort assigned in config.php
if ( $sorttype == "desc" )
{
$linkboxes = array($whatsapplinkbox => $whatsappsort, $rokfinlinkbox => $rokfinsort, $telegramlinkbox => $telegramsort, $rumblelinkbox => $rumblesort, $mastodonlinkbox => $mastodonsort, $linkedinlinkbox => $linkedinsort, $tribellinkbox => $tribelsort, $pintrestlinkbox => $pintrestsort, $emaillinkbox => $emailsort, $facebooklinkbox => $facebooksort, $twitterlinkbox => $twittersort, $stravalinkbox => $stravasort, $instagramlinkbox => $instagramsort, $mewelinkbox => $mewesort, $mindslinkbox  => $mindssort, $truthlinkbox  => $truthsort, $gettrlinkbox  => $gettrsort, $parlerlinkbox  => $parlersort, $usalinkbox  => $usasort, $gablinkbox  => $gabsort, $youtubelinkbox => $youtubesort);
arsort($linkboxes); 

// Loop through link boxes
foreach($linkboxes as $sortedlinkboxes => $val){
    echo "$sortedlinkboxes";
}
}
// Link Boxes dynamically placed in descending sort order based on sort assigned in config.php
if ( $sorttype == "random" )
{
$linkboxes = array($whatsapplinkbox, $rokfinlinkbox, $telegramlinkbox, $rumblelinkbox, $mastodonlinkbox, $linkedinlinkbox, $tribellinkbox, $pintrestlinkbox, $emaillinkbox, $facebooklinkbox, $twitterlinkbox, $stravalinkbox, $instagramlinkbox, $mewelinkbox, $mindslinkbox, $truthlinkbox, $gettrlinkbox, $parlerlinkbox, $usalinkbox, $gablinkbox, $youtubelinkbox);

// Loop through link boxes
foreach($linkboxes as $sortedlinkboxes){
    echo "$sortedlinkboxes";
}
}
?>
            
            
                       <div class="footer">
                <p>&copy; <?php 
                    $year = date("Y"); 
                    
  
                    // Display the year
                        echo $year; 
  
?> <? echo "$name"; ?> - Hand coded with &#10084;<br />
<a href="https://github.com/jeffbristow/biolink/archive/refs/heads/main.zip">Download v.01 source code</a> or <a href="https://github.com/jeffbristow/biolink">join me on git</a> to improve the project
</P>
                
            </div>
            
        </div>
    </body>
</html>
