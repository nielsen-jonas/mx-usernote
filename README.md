# Portable request router

## ABOUT
The system is designed with portability in mind, and the
website can reside in any subdirectory (hence the symbolic
links in the root bridging the public directory).
I recommended configuring the host so the document root is
set to the public directory, this is a good security
practice.

The system routes requests to scripts based on the
[request => script] mapping done in route.php

### PRELOADED CONSTANTS
- DIR (.protected directory root)
- WEBSITE_URL (URL to the website)
- WEBSITE_REQUEST (URL path trailing the website URL)

### SUPERGLOBAL CONTAINING DATA PASSED IN DYNAMIC REQUESTS
- $_REQUEST

### SCRIPT FUNCTIONS
- scr_is() (returns true if passed script is the requested script)
- scr_url() (returns url of passed script as mapped in route.php)