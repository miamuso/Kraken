<!-- 
### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
 -->
 
 # Kraken
 A fictional cold brew website.
 
 ## Languages
 I used HTML, CSS, JavaScript, and PHP for this project.
 
 ## Overview
 This site is the homepage of a fictional coffee company. It includes the header, with a drop down, CSS/JavaScript nav, hoverable buttons, and responsive styling.
 
 My process with this project was multistep. First, I protyped all the HTML, CSS and JavaScript. You can see the live site from that here: https://kraken.superhi.com.
 
 Then, I downloaded the blank starter Wordpress theme 'Underscores' and created my own theme with my custom HTML, CSS and Javascript on top of that.
 
 ## Basic Structure/Process
 
 For the Header section, I took the HTML that I had written, and added it to the Header.php section. I added a CSS gradient and the logo and hamburger nav img.
 
 Then the hero section, or the whole intro section, I hardcoded that html into the index.php section.
 
 For the two sections with the coffee images and text paragraphs, I added them as custom HTML blocks in the editor, and then styled them with my custom CSS file.
 
 I also added the last large section with the coffee shop image background that is rotated in the design brief. I added that as a post as well, and rotated it/styled it with my custom CSS.
 
 Last, I added the footer HTML that I had written, in the footer.php section.
 
 I styled all the sections with my custom.css file, including position, background colors/gradients etc. Then I added that JavaScript that I had written into the file.
 
 
 ## Additional Features
 The additional features outside the design brief that I added were:
  ### 1.) Stamps
   I added a JavaScript function that loops through an array of svg images and when the user clicks, it adds the svg image like a stamp to the page. When the user scrolls, the 'stamp' disappears.
   
   ### 2.) Animation
   I added an animation that I created of bubbles floating on the middle sections.
