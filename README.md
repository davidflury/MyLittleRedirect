# MyLittleRedirect
Create custom links from your webdomain to redirect anywhere to the world wide web.

1. Copy all the files to the root of your page on your apache webserver.
2. Optional: Configure the subfolder admin as a password secured area.
3. Visit [yourwebpage.xyz]/admin to configure some redirects, e.g.: Key: google, Value: google.com
4. Checkout the redirection: [yourwebpage.xyz]/google --> https://google.com


Remarks:
- The files have to be located at the root of the webpage, feel free to change the code if you want to place them in subfolders.
- All keys should start with a slash "/", which is automatically prepended if not present.
- All values should start with http:// or https://. If missing, https:// will be prepended automatically.
- It is optional to configure a date until the redirection is valid.
- It is possible to configure multiple entries with the same key. Use case: Configure redirections for different time periods without stopping.
