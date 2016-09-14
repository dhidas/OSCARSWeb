<?php include("includes/header.html"); ?>


<h3>Install</h3>

<p>
<a href="#linux">Linux/Unix/OS X</a><br />
<a href="#windows">Windows</a><br />
</p>


<hr>
<h4>Linux/Unix/OS X Installation</h4>

<h4>Source Distributions</h4>
<p>
Firstly, download the desired source distribution from: <a href="download.php">here</a>.
</p>

<p>
There are several ways to build the executable code from source.  If you are only planning to use the python implementation, using python distutils is probably easiest.
</p>
<pre>
python python/setup.py build
</pre>

<p>
If you are compiling and want to include the Mathematica API or Cuda GPU methods:
</p>

<pre>
./configure --with-mathematica --with-cuda
make
</pre>

<p>
If you successfully compiled or downloaded the OSCARS library (OSCARS.so) and want to link it to other code, you will likely need to do something like this:
</p>

<p>
In your OtherCode.cc you will need to include the header file:
</p>
<pre>
#include "SRS.h"
</pre>

<p>
Then point to the correct include directory and library file
</p>
<pre>
g++ -Iinclude -c OtherCode.cc -o OtherCode.o
g++ -l:lib/OSCARS.so OtherCode.o -o OtherCode




<?php include("includes/footer.html"); ?>
