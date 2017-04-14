# photo-gallery-layout
A simple bootstrap photo gallery layout class, used for quickly creating a responsive photo gallery.

To use
------
1 - Create an instance of Gallery class passing a common name for your pictures in the constructor:

$gallery = new Gallery('gallery');

(where 'gallery is the name you want to group them by when using a lightbox')

2 - Add images using the addImage() method:

$gallery->addImage('PATH TO IMAGE', 'TITLE OR DESCRIPTION', { MARGIN FOR TOP}, { 'IMAGE WIDTH OR HEIGHT (DEFAULTS TO WIDTH)'});

- The path must be a URL available to the page either local or on another site.
- The title will be the title in the link and the alt tag in the image element
- The margin is the margin on the top of the image and may be used to push down (horizontally center) your image (images are automatically vertically aligned). The default is 40px
- The width or height parameter becomes the size setting for the image, which is set to 250px. Always use the longest side so if the image is taller than wider use 'height'. If the image is wider this parameter may be omitted as it defaults to 'width'

3 - Call the render() method to echo gallery inline:

$gallery->render();

To return the gallery as a string pass true in the render() method and capture the response:

echo(htmlentities($gallery->render(true)));

4 - Optionally include a javascript lightbox. I used Lightbox: http://lokeshdhakar.com/projects/lightbox2/ which if added to this project will work without having to change anything I have suggested above.
