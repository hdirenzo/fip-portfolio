# fip-portfolio
 FIP Portfolio 
 By Hannah Di Renzo

 URL: hannuccia.ca

 Site made as a portfolio and final integrated project for "Hannuccia" the designer brand made for and by Hannah Di Renzo. 

 Applications used:
  - html, css, sass, php, json, and javasceript

  All photos and images are taken or created by Hannah. 

  Page Descriptions:
  Home/index - the main page containing a navigation bar and video displaying photography works
  Contact Page - Contact page that allows visitors to send email to the hosting service (ionos) with php and javascript functions.
  PHP
    - php headers
    - set variables
    - if(isset) statements to check if empty field
    - filter sanitize and filter email strings
    - if valid - including the mail library - required
    - mail:: factory - create a new mail object (PEAR)
    - put in settings mail server info
    - if successful send mail to support@hannuccia.com with from, to, and subject
    - if "!" not an error, = success respond with "sent successfully...."
    - encode json_encode  = is a php array 
    - if not successful - display a message with encode json_encode or "die".
    - is not a POST request - 404 - unsure of what you're looking for
JAVASCRIPT
    - make const/variables to get mail form element/reference
    - add event listener for the submit event
    - prevent the default function - so we can implement my own functionality
    - fetch ajax equest to php form(server)
    - await - await the coinfirmation/promise before going ahead
    - take the message  from json response and put it in the page
    - json Obj - decode as if qit was json (built in php file)
    - if the response is not okay "!", check response and enter <li> html lines displaying the errors


  Projects Page - Table of Contents for included portfolio works
  Project: Demo Reel - a video displaying a collection of 3D projects created in Cinema 4D
  Project: CECI - a mock makeup advertising project that has a collection of videos, and advertisment banners
  Project: Photography - a collection of shots taken by myself
  Project: Visual History - a past assignment done while I was at Western University. This project while not completely related to the content of the Interactive Media Design Program, I included it as a reference to my communication skills, story-telling, and past successes. 


