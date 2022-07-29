# biolink
BioLink is a simple one page BioLink layout that works well on desktops and mobile devices using only PHP, CSS and HTML. No database needed.

There are link blocks for the current social networks:
Facebook, Twitter, MeWe, Tribel, Gettr, Strava, Instagram, Pintrest, LinkedIn, Mastodon, Rumble, Telegram, Rokfin, Whatsapp, Gab, Gettr, Parler

There is also an email link block. A link to a form can be used or a mailto: link with your email address.

The config.php file has PHP variables that can be easily updated with links to the users social media accounts by replacing 'username' in the URL.

If you know CSS and PHP you can make adjustments to the code fairly easy to adjust colors. Adding variables in config.php for colors is a likely addition in the future.

If you need some level of link tracking, this tool can't do that. However, you could use a selfhosted setup like https://yourls.org/ to create trackable links and plug those links into the link variable for each social media account in config.php.

A demo of the latest version of this code can be viewed here: https://simplebiolink-demo.bristow.one/
