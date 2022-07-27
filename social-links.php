<?php include 'config.php'; ?>


<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$emaillink"; ?>"><img class="icon" src="<? echo "$emailicon"; ?>" alt="<? echo "$emailtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$emailtagline"; ?></h3>
                       <a href="<? echo "$emaillink"; ?>"><? echo "$emaildescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $emaillinkbox = ob_get_clean(); ?>

<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$facebooklink"; ?>"><img class="icon" src="<? echo "$facebookicon"; ?>" alt="<? echo "$facebooktagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$facebooktagline"; ?></h3>
                       <a href="<? echo "$facebooklink"; ?>"><? echo "$facebookdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $facebooklinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$twitterlink"; ?>"><img class="icon" src="<? echo "$twittericon"; ?>" alt="<? echo "$twittertagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$twittertagline"; ?></h3>
                       <a href="<? echo "$twitterlink"; ?>"><? echo "$twitterdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $twitterlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$stravalink"; ?>"><img class="icon" src="<? echo "$stravaicon"; ?>" alt="<? echo "$stravatagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$stravatagline"; ?></h3>
                       <a href="<? echo "$stravalink"; ?>"><? echo "$stravadescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $stravalinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$instagramlink"; ?>"><img class="icon" src="<? echo "$instagramicon"; ?>" alt="<? echo "$instagramtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$instagramtagline"; ?></h3>
                       <a href="<? echo "$instagramlink"; ?>"><? echo "$instagramdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $instagramlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$pintrestlink"; ?>"><img class="icon" src="<? echo "$pintresticon"; ?>" alt="<? echo "$pintresttagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$pintresttagline"; ?></h3>
                       <a href="<? echo "$pintrestlink"; ?>"><? echo "$pintrestdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $pintrestlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$tribellink"; ?>"><img class="icon" src="<? echo "$tribelicon"; ?>" alt="<? echo "$tribeltagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$tribeltagline"; ?></h3>
                       <a href="<? echo "$tribellink"; ?>"><? echo "$tribeldescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $tribellinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$linkedinlink"; ?>"><img class="icon" src="<? echo "$linkedinicon"; ?>" alt="<? echo "$linkedintagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$linkedintagline"; ?></h3>
                       <a href="<? echo "$linkedinlink"; ?>"><? echo "$linkedindescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $linkedinlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$mastodonlink"; ?>"><img class="icon" src="<? echo "$mastodonicon"; ?>" alt="<? echo "$mastodontagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$mastodontagline"; ?></h3>
                       <a href="<? echo "$mastodonlink"; ?>"><? echo "$mastodondescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $mastodonlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$rumblelink"; ?>"><img class="icon" src="<? echo "$rumbleicon"; ?>" alt="<? echo "$rumbletagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$rumbletagline"; ?></h3>
                       <a href="<? echo "$rumblelink"; ?>"><? echo "$rumbledescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $rumblelinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$telegramlink"; ?>"><img class="icon" src="<? echo "$telegramicon"; ?>" alt="<? echo "$telegramtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$telegramtagline"; ?></h3>
                       <a href="<? echo "$telegramlink"; ?>"><? echo "$telegramdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $telegramlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$rokfinlink"; ?>"><img class="icon" src="<? echo "$rokfinicon"; ?>" alt="<? echo "$rokfintagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$rokfintagline"; ?></h3>
                       <a href="<? echo "$rokfinlink"; ?>"><? echo "$rokfindescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $rokfinlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$whatsapplink"; ?>"><img class="icon" src="<? echo "$whatsappicon"; ?>" alt="<? echo "$whatsapptagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$whatsapptagline"; ?></h3>
                       <a href="<? echo "$whatsapplink"; ?>"><? echo "$whatsappdescription"; ?></a>
                    </div>
                
                    
                </div>
                
            </div>
            <br>
<?php $whatsapplinkbox = ob_get_clean(); ?>

<?php ob_start(); ?>

            <div class"links">
            
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
            <br>
<?php $mewelinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
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
            <br>
<?php $mindslinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

          <div class"links">
            
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
            <br>
<?php $truthlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

   <div class"links">
            
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
            <br>
<?php $gettrlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
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
            <br>
<?php $parlerlinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
            
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
            <br>
<?php $usalinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$gablink"; ?>"><img class="icon" src="<? echo "$gabicon"; ?>" alt="<? echo "$gabtagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$gabtagline"; ?></h3>
                       <a href="<? echo "$gablink"; ?>"><? echo "$gabdescription"; ?></a>
                    </div>
                
                    
                </div>
            </div>
            <br>
<?php $gablinkbox = ob_get_clean(); ?>
<?php ob_start(); ?>

            <div class"links">
                <div class="link-box">
                
                    <div class="icons">
                        <a href="<? echo "$youtubelink"; ?>"><img class="icon" src="<? echo "$youtubeicon"; ?>" alt="<? echo "$youtubetagline"; ?>"></a>
                    </div>
                    
                    
                    <div class="description">
                       <h3><? echo "$youtubetagline"; ?></h3>
                       <a href="<? echo "$youtubelink"; ?>"><? echo "$youtubedescription"; ?></a>
                    </div>
                
                    
                </div>
            </div>
            <br>
<?php $youtubelinkbox = ob_get_clean(); ?>

<?php
// Wipe out any items not set to yes in the config.php file
if ( $email != "yes" )
{
$emaillinkbox="";    
}
if ( $facebook != "yes" )
{
$facebooklinkbox="";    
}
if ( $gab != "yes" )
{
$gablinkbox="";    
}
if ( $gettr != "yes" )
{
$gettrlinkbox="";    
}
if ( $instagram != "yes" )
{
$instagramlinkbox="";    
}
if ( $linkedin != "yes" )
{
$linkedinlinkbox="";    
}
if ( $mastodon != "yes" )
{
$mastodonlinkbox="";    
}
if ( $mewe != "yes" )
{
$mewelinkbox="";    
}
if ( $minds != "yes" )
{
$mindslinkbox="";    
}
if ( $parler != "yes" )
{
$parlerlinkbox="";    
}
if ( $pintrest != "yes" )
{
$pintrestlinkbox="";    
}
if ( $rokfin != "yes" )
{
$rokfinlinkbox="";    
}
if ( $rumble != "yes" )
{
$rumblelinkbox="";    
}
if ( $strava != "yes" )
{
$stravalinkbox="";    
}
if ( $telegram != "yes" )
{
$telegramlinkbox="";    
}
if ( $tribel != "yes" )
{
$tribellinkbox="";    
}
if ( $truth != "yes" )
{
$truthlinkbox="";    
}
if ( $twitter != "yes" )
{
$twitterlinkbox="";    
}
if ( $usa != "yes" )
{
$usalinkbox="";    
}
if ( $whatsapp != "yes" )
{
$whatsapplinkbox="";    
}
if ( $youtube != "yes")
{
$youtubelinkbox="";
}
?>
