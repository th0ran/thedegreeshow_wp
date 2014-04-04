# The Degree Show 2014 wordpress theme
__For the ravensbourne 2014 show - http://www.ravensbourne.ac.uk/__

Soon to be made up of all sorts of cool stuff.

* Uses Bootstrap 3.0, see docs - http://getbootstrap.com/
* Based on Bones - http://themble.com/bones
* Uses LESS, see docs - http://lesscss.org/ . It's not scary, I promise. It is meant to make things easier!
* vanilla.html is an overview of all set styles on base html elements

## Set up notes
* Have your own wordpress set up and install this repositry as a theme.
* Make sure you have a LESS compiler if you are making style changes. I reccommend http://incident57.com/less/ or http://wearekiss.com/simpless . Do not change the css file directly.

# Menu
Under Appearance / Menu create a menu called 'main', add menu items and set the theme location to be 'The Main Menu'.

# Homepage: featured posts
Create category 'featured', set some posts with that category.

# Homepage: Twitter feed
This theme is set up with kebo : http://wordpress.org/plugins/kebo-twitter-feed/
Follow their installation instructions up to #5, which is not required : http://wordpress.org/plugins/kebo-twitter-feed/installation/

To get the meta data (date posted) in the right place you have to edit the plugin files. Specifically, kebo-twitter-feed/views/list.php . Move the entire .kmeta div inbetween .ktext and .kfooter to get it inline with the reply/retweet etc buttons.


## Introduction to Bones
Bones http://themble.com/bones is a simple wordpress theme designed to be changed by developers. Hopefully it will have already catered for most of our requirements, so be sure to look through the files thoroughly as there are a lot of good functions.

library/bones.php - register stylesheets and scripts are here, functionality to handle thumbnails, register menus, ability to add 'related posts' to a page (organised by post tag), pagination handling.

Bones theme also features custom post setup which can be treated as entirely different to normal posts.