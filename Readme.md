## 🏝 **Hello Guys?**
<a href="./Readme - PT-BR.md">README em PT-BR</a><br>
<img src="https://analyticsindiamag.com/wp-content/uploads/2018/12/programming.gif" align="right" width="400">

I had been trying for a while to make a system that dynamically shows what is contained in a directory, so I decided to do it. But who said it would be that easy? 
I had the idea, I think two months ago, and I only got it for now at Christmas.
And well, because I won this fight, I decided to post this script here to give a
idea and even help.

### 📕 **Description**
This script is intended to display the contents of a tab. For example,  
we have the articles tab, so in that directory we will have files referring to it,  
which is what this script does:  
it reads the files from the page and displays a brief <i>preview</i> of it.
***
### 📃 **NOTES**
- **The PHP version used was 7.1.3.**
- **It doesn't use a database or anything like that, it's just php.**
- It only reads `.html` files, but you can change this under conditions.

- You can use the DOM to select more tags if you like, in which case it only selects `<h1>`,  
`<h2>` and the first `<p>`of the files and stores them in variables.
  - They are selected by `IDs`, but you can also use by `ByTagName` among others.  
  - I recommend that you see the [PHP DOM documentation](https://www.php.net/manual/en/book.dom.php "PHP: DOM - Manual")
  in case you don't understand much.

- In the previews it is always noticed that the sample text is not complete, this one does that too,  
  and you can also change the size or even take it off, even if it doesn't look good. It goes by your choice.

- It also has the function of removing any space at the end of the sample and adding the ellipsis sign,  
  to be able to let that sense of something continue.

- Besides the script it also has a brief demo page.

- The code is well documented — *I think its even too much*.

### 📃 **Final Notes**
I decided to publish this code for people who are starting — *like me* — or who have an interest  
in something like that. I Hope can helped.

I don't have a high knowledge of the language or Database yet, so I thought it would be possible  
and it really was, even though last time I thought it would only be possible with Database, but something  
that I don't remember made me return.

PHP's DOM didn't help so much, so I had to do some research to find out what was wrong  
in the code. Actually everything was fine, PHP just doesn't handle whit it very well, but that was fixed.

### 😀 **Coming Up**
- A preview showing it running.
- Some Real Cool Topics in the Demo.
