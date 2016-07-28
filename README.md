# Blank Theme
**A custom WordPress theme based on Bones and Masterpress**

### General Theme Organisation
The theme is a modified version of the Bones theme. Within the theme root directory you’ll find some files of note. 

`style.css` is what WordPress parses to show theme details  
`screenshot.png` is the image WordPress displays on the theme screen  
`functions.php` is where any theme-specific custom code should be written  

Additionally, there are three folders of note.

The `library` folder houses the assets for the theme. This includes images, JavaScript, and SCSS. To compile the SCSS, navigate to the `library/scss/` folder and run
```
bundle exec compass watch
``` 

This will compile the SCSS into the `css` folder which is then included into each page in the `library/bones.php` file.

The SCSS is organised like so. 

`style.scss` is the main file and it imports all other files. It has it’s own media queries and imports specific files based on those queries.

`_mixins.scss` is where all variables and fonts are defined, basic typography is set up, and generally for “base” CSS. Specifically, this is where the **grid system** is defined.

The grid is a styles-based grid instead of HTML-based, which gives a lot of flexibility. By default, the grid is set up with 12 columns, and to make a column half-width for example, you write

```
.example {

@include span(6);
}
```

This will set the float, width, and margins appropriately. See the section in `_mixins.scss` for more information.

The `library/bones.php` file houses some Bones-specific improvements, along with the “enqueue-ment” of styles and JavaScripts. Any custom assets need to be included here and not manually in `header.php`.

The “WordPress” way to build themes is to create page templates. A user is given the option to choose a template for a page in the Admin screen if they so choose. These templates are denoted by a specific PHP comment at the top of the file, and you can find examples in the `templates` directory.
It is best to stick with convention and put all page templates in this directory prefixed by ‘page-’.

Within each page, you may have certain sections that are either repeated across the site or would be more understandable in it’s own file. The `parts` folder exists for this reason. Within this folder you may call your file anything you like. The general way of importing this file is:

```
get_template_part('parts/block', 'example');
```

## Bones
__A Lightweight Wordpress Development Theme__

Bones is designed to make the life of developers easier. It's built
using HTML5 & has a strong semantic foundation. It was updated recently
using some of the HTML5 Boilerplate's recommended markup and setup.
It's constantly growing so be sure to check back often if you are a
frequent user. I'm always open to contribution. :)

Designed by **Eddie Machado**: http://themble.com/bones

Special Thanks to:
* Paul Irish & the HTML5 Boilerplate
* Yoast for some WP functions & optimization ideas
* Andrew Rogers for code optimization
* David Dellanave for speed & code optimization
* and several other developers. :)

Submit Bugs & or Fixes:
https://github.com/eddiemachado/bones/issues


## License
__[WTFPL](http://sam.zoy.org/wtfpl/)__

	Are You Serious? Yes.


## Meta
* [Changelog](../../blob/master/CHANGELOG.md)
