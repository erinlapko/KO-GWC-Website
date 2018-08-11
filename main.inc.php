<div class="content">
<p>
Welcome to Klein Oak Girls Who Code!
&nbsp;&nbsp;&nbsp;&nbsp;
my site I build runs an initialization script before the page is written. That script includes the definition of the include location. Porting the site to another server requires only editing this one file. How tough is that?

(I just did this when moving a site from development to a remote hosting facility. It took me at most two minutes to set the right file paths.)

Also, you seem to be suggesting that included files be stored in directories that are visible over the Internet. I consider that a very insecure practice. All my included code resides in directories outside of the DocumentRoot of the site. I also use a different extension besides .php for included files, and have a Files directive in the Apache configuration that prohibits the direct download of files with this extension as an added security measure.

For most of my sites, index.php consists of nothing more than a couple of directory pointers and some require() statements. All the stuff that matters is stored elsewhere.

I also never use the include_path in /etc/php.ini since I'm hosting multiple virtual sites. Each site has it's own includes, so having a global include path is useless for me. I could use an ini_set() command to change the include path for each site, but that's really no different in practice from the method I describe above.
Last edited by SeijiSensei; November 10th, 2011 at 04:43 PM.
my site I build runs an initialization script before the page is written. That script includes the definition of the include location. Porting the site to another server requires only editing this one file. How tough is that?

(I just did this when moving a site from development to a remote hosting facility. It took me at most two minutes to set the right file paths.)

Also, you seem to be suggesting that included files be stored in directories that are visible over the Internet. I consider that a very insecure practice. All my included code resides in directories outside of the DocumentRoot of the site. I also use a different extension besides .php for included files, and have a Files directive in the Apache configuration that prohibits the direct download of files with this extension as an added security measure.

For most of my sites, index.php consists of nothing more than a couple of directory pointers and some require() statements. All the stuff that matters is stored elsewhere.

I also never use the include_path in /etc/php.ini since I'm hosting multiple virtual sites. Each site has it's own includes, so having a global include path is useless for me. I could use an ini_set() command to change the include path for each site, but that's really no different in practice from the method I describe above.
Last edited by SeijiSensei; November 10th, 2011 at 04:43 PM.
my site I build runs an initialization script before the page is written. That script includes the definition of the include location. Porting the site to another server requires only editing this one file. How tough is that?

(I just did this when moving a site from development to a remote hosting facility. It took me at most two minutes to set the right file paths.)

Also, you seem to be suggesting that included files be stored in directories that are visible over the Internet. I consider that a very insecure practice. All my included code resides in directories outside of the DocumentRoot of the site. I also use a different extension besides .php for included files, and have a Files directive in the Apache configuration that prohibits the direct download of files with this extension as an added security measure.

For most of my sites, index.php consists of nothing more than a couple of directory pointers and some require() statements. All the stuff that matters is stored elsewhere.

I also never use the include_path in /etc/php.ini since I'm hosting multiple virtual sites. Each site has it's own includes, so having a global include path is useless for me. I could use an ini_set() command to change the include path for each site, but that's really no different in practice from the method I describe above.
Last edited by SeijiSensei; November 10th, 2011 at 04:43 PM.
my site I build runs an initialization script before the page is written. That script includes the definition of the include location. Porting the site to another server requires only editing this one file. How tough is that?

(I just did this when moving a site from development to a remote hosting facility. It took me at most two minutes to set the right file paths.)

Also, you seem to be suggesting that included files be stored in directories that are visible over the Internet. I consider that a very insecure practice. All my included code resides in directories outside of the DocumentRoot of the site. I also use a different extension besides .php for included files, and have a Files directive in the Apache configuration that prohibits the direct download of files with this extension as an added security measure.

For most of my sites, index.php consists of nothing more than a couple of directory pointers and some require() statements. All the stuff that matters is stored elsewhere.

I also never use the include_path in /etc/php.ini since I'm hosting multiple virtual sites. Each site has it's own includes, so having a global include path is useless for me. I could use an ini_set() command to change the include path for each site, but that's really no different in practice from the method I describe above.
Last edited by SeijiSensei; November 10th, 2011 at 04:43 PM.
</p>
</div>
