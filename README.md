Email virus
=============

This is a very interesting email virus that I want to share and explain how it works. Please don't open file.htm in your browser.
All others .txt files are pretty safe. 
I received this email in my inbox and gmail warned me that this can be phishing scam so I didn't open the file but I just 
wanted to check in what way it tries to work. 
![The email](images/look.png?raw=true)
Also I wrote a small php code (converter.php to decode the file). So when 
the user downloads the file and opens it in his browser, it executes the content of 
```javascript
document.write(unescape('encoded stuff'));
```
This encoded stuff you can check in this file [file.txt](files/file.txt) (txt version of dangerous file) and it created the meta refresh content 
```html
<meta http-equiv="refresh" content="0; url=data:text/html;base64,long base64 encoded string" />
```
that you can check here:
[parenteses.txt](files/parenteses.txt) this will execute base64 encoded part in the user browser and will create this form page 
[decoded.txt](files/decoded.txt). So if user is stupid enough these smart guys can log a lot of information about him. How to test decoder script? You will need php interpetter. After this you must go to 
/scripts directory and execute php converter.php. The script will recreate [parenteses.txt](files/parenteses.txt) and
 [decoded.txt](files/decoded.txt).
 
 

