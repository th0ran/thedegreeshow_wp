# The Degree Show 2014 wordpress theme
__For the ravensbourne 2014 show - http://www.ravensbourne.ac.uk/__

Soon to be made up of all sorts of cool stuff.

* Uses Bootstrap 3.0, see docs - http://getbootstrap.com/
* Based on Bones - http://themble.com/bones
* Uses LESS, see docs - http://lesscss.org/ . It's not scary, I promise. It is meant to make things easier!

## Set up notes
* Have your own wordpress set up and install this repositry as a theme.
* Make sure you have a LESS compiler. I reccommend http://incident57.com/less/ or http://wearekiss.com/simpless
* Under Appearance / Menu create a menu called 'main', add menu items and set the theme location to be 'The Main Menu'.


## Introduction to Bones
Bones http://themble.com/bones is a simple wordpress theme designed to be changed by developers. Hopefully it will have already catered for most of our requirements, so be sure to look through the files thoroughly as there are a lot of good functions.

library/bones.php - register stylesheets and scripts are here, functionality to handle thumbnails, register menus, ability to add 'related posts' to a page (organised by post tag), pagination handling.

Bones theme also features custom post setup which can be treated as entirely different to normal posts.