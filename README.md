Install
========

Clone the git repository on your computer

<b>$ git clone https://github.com/lupikas/usersinfo.git</b>

You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

<b>$ cd usersinfo
$ composer install</b>

Test
========

Use "POSTMAN" or similar to see how app works!

<b>Run application
$ php artisan serve</b>

In POSTMAN write:
<b>127.0.0.1:8000/api/getusersdata?apikey=qwerty789</b>
Test api key is qwerty789.
Example data:
<b>
    {
	"users": [
		{
			"first_name": "Tom",
			"last_name": "Tucker"
		},
		{
			"first_name": "Tom",
			"last_name": "Tucker"
		}
	]
}
</b>
Paste in <b>"raw"</b> field.
