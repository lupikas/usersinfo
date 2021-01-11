Install
========

Clone the git repository on your computer

<b>$ git clone https://github.com/lupikas/usersinfo.git</b>

You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

<b>$ cd usersinfo<br>
$ composer install</b>

Test
========

Use "POSTMAN" or similar to see how app works!<br>

Run application<br>
<b>$ php artisan serve</b><br>

In POSTMAN write:<br>
<b>127.0.0.1:8000/api/getusersdata?apikey=qwerty789</b><br>
Test api key is qwerty789.<br>
Example data(paste in <b>"raw"</b> field):<br>
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
