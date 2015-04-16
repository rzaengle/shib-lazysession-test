# shib-lazysession-test

This requires a directory NOT forced behind shibboleth.

Application using lazy session must be configured to accept either:
* the returned shib variable ($_SERVER['REMOTE_USER'] in this case)
* whatever session or authentication technique the local database uses to identify its user ($_SESSION['LOCALAUTHNAME'] in this case)

