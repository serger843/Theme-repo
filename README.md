# This is a simple WordPress Theme :slightly_smiling_face:

To complete this test you need to modify the file 'class-theme-utils.php' so that it produces the output (header & footer content only!) as seen in this image -> 
![output screenshot](./output.jpg)


## IMPORTANT RULES BEFORE COMPLETING THIS TEST
* You can only modify the file **'class-theme-utils.php'**
* No hard coded strings EXCEPT for the text inside the header to complete "Hey {your name}"
* You CANNOT use JavaScript or CSS for this test

# WHAT TO DO : 
* Complete the function **get_text()** inside 'class-theme-utils.php' file
    * It has to return same text '**This is Kapp Theme**' inside the class 'Theme_Core'
    * No hard coded strings allowed. i.e you CANNOT do return 'This is Kapp Theme';
    * *NOTE : If someone changes the text inside the class 'Theme_Core' in the method 'text()' it must also reflect in the footer and header of the website.*
* Add your name inside the HEADER right after the text '**Hey**' e.g 'Hey Chris'
* Inside the FOOTER : add the version of the theme right next to 'This is Kapp Theme' Text. (to produce a text like 'This is Kapp Theme Version 1.0.0' )
    * You must use the text returned by the method **get_theme_version()** inside the file 'class-theme-utils.php' in order to get the current theme version

### Have fun :sunglasses: