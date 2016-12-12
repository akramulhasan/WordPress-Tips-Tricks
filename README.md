<h1>Error while uploading a media from wp-admin ?</h1>
<p>If you face something like this:
Unable to create directory uploads/2016/11. Is its parent directory writable by the server?

Generally we think this could be a permission issue,but not like that.
just go in your admin, go to Settings/Media and change the upload path to that of the new server. (Keep it default)
</p>

<h1>Error while uploading Mysql database ? #1273 - Unknown collation: 'utf8mb4_unicode_ci' ?</h1>
<p>Just follow this simple way while exporting database:</p>

<li> 1) Click the "Export" tab for the database</li>

<li> 2) Click the "Custom" radio button</li>

<li> 3) Go the section titled "Format-specific options" and change the dropdown for "Database system or older MySQL server to maximize output compatibility with:" from NONE to MYSQL40.</li>

<li> 4) Scroll to the bottom and click "GO".</li>


<p>Now try again to uplaod this Database.</p>


<h1>Captcha Problem in Contact Form 7 ?</h1>
<p>Sometimes it may happen that your default reCaptcha is not working in Contact Form 7.Then you can simply install this plugin and configure according this plugin.</p>

<li> 1) Plugin Link: https://wordpress.org/plugins/contact-form-7-simple-recaptcha/</li>


<h1>Let's see how to handle if you get MYSQL error code: 1064</h1>
<p>This is basically a syntax error.This errors not have any specific solution.You have to first understand what syntax are causing your problem.Like see this error line: 
<b>'#1064 - you have an error in your sql syntax check the manual that corresponds to your mysql server version for the right syntax to use near 'type=MyISAM at line 19</b>

<p>From this line first of all we can understand the problem is at line 19,and secondly we can see the syntax issue can be this : type=MyISAM.</p>

<p>Then you have to identify what version of MySQL you are using and what version of new MySQL where you are now trying to upload this DB.And do some googling to find what syntax have depricated within these version gap.</p>

<p>In the case of this error line that I have just showed there 'TYPE' syntax was culprit:
The older TYPE option was synonymous with ENGINE. TYPE was deprecated in MySQL 4.0 and removed in MySQL 5.5. When upgrading to MySQL 5.5 or later, you must convert existing applications that rely on TYPE to use ENGINE instead.</p>

<p>So go to your DB.find that old syntex and replace with new one.You are done !!!</p>
</p>

