# Bill's Simple Web Framework

### Overview 

The idea for this framework is to be extremely simple. At it's base, each page
of the site is in a separate directory so the URLs look something like 
www.example.com/about/. The "about" directory contains an index.php file and 
at least one other file called "content.xxx" or 'directory name.xxx' where .xxx is .php, .html or .md 
(markdown). The markdown file is converted to html for display. Markdown is used
to make it easier for average users to maintain the site pages.

The role of the index file is to call `/templates/base.php` which will construct 
the page and provide the html scaffold. 

The body section of the html scaffold contains 4 divs with ids: "head", "nav", 
"content" and "foot". base.php attempts to fill each div using the contents
of files with names similar to the div id names. The process for each div is as 
follows:

1.	Look in the directory of the calling `index.php` file for a file named
	`head.php`. If the file is found, the contents are inserted into the
	html scaffold and base moves on to the next div id (`nav` in this case)

2.	If `head.php` is not found base looks for `head.html`, then `head.md` 
	in the local `index` directory. Once a file is found, base moves on the
	the next div id.
	
3.	If no `head.xxx` file is found, `base.php` repeats the search in the
	`/templates/` directory. This allows you to place site wide files for
	the header and footer in the `/templates/` directory so they are used
	on all pages. If no file is found for a particular id, the div is left
	empty.
	
### Adding Extra Header Elements

You can add extra header elements such as css and javascript by setting the 
values of the `$extraCSS`, `$extraJS` & `$extraHeaders` variables
in the `index.php` file of a page directory to the HTML you would like inserted
into the header of the page.

If you want to add a site wide header, just add it in `/templates/base.php`.

##Credits
My framework uses the php markdown interpreter created by by Michel Fortin  <https://michelf.ca/>

Based on Markdown by John Gruber  <http://daringfireball.net/>
