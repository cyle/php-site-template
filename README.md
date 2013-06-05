# oh goddamnit, it's just a simple PHP site template

no but really, that's all. it's a [CyleSoft](http://cylesoft.com/)-brand site template. this represents some of my (probably poor) development habits, but hey, it's better than that Ruby on Rails mess of a framework.

## OKAY BUT HOW DO I USE THIS

clone it, remove the git remote "origin", and start developing your PHP site. here, i'll explain some more...

## what goes where

it's pretty straightforward.

point your damn domain's document root (web root, whatever) to the "www" directory.

put all your functionality and shit in the "www-includes" directory.

do your view-esque work in the "www" directory.

make your configuration changes (domain/app-specific) in the "config" directory.

i put an example lighttpd config file in there, for how to do routing. link to this in your lighttpd.conf, or make a symlink to it, whatever. if you're using apache, i can't help you.

mongo and mysql database connection stuff is in there.
