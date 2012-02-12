# Foobar Extension
A proof of implementation extension for extension front controllers.

## Setup
1. Copy the foobar/ folder into phpBB/ext/ in your phpBB installation (creating the ext/ directory if needed).
2. Enable the extension (until another way is complete, you will need to manually insert it into the database and purge the cache).

## Usage
Point your browser to "example.com/forum/index.php?ext=front_controller_extension_test_foobar" and the handle() method of the phpbb_ext_front_controller_extension_test_foobar_controller class will be run (ideally to display a "front" page for the extension).
