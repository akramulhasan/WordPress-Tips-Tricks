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
