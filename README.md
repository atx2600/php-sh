# php-shell
A favorite exploit for the ATX2600 CTFs seems to be uploading PHP code to 
vulnerable webservers and thus establishing a remote shell via php's
`shell_exec()` function. Writing a working inject page is trivial, but this
is not mere working page. This aims to be a cute one.

php-shell aims to add a working directory (so that the CD command works),
arrow key accessible history and maybe even VT100 colors / tab completion.

## Current State
As of right now, a trivial page is active as 0-0-3.php. A better jquery based
page is in the works as 0-0-4.php, which attempts to remove the "reload on 
command" behavior of the naive page.
