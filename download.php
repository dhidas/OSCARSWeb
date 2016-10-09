<?php include("includes/header.html"); ?>


<h3>Download</h3>

<p>
We are currently working with the BNL legal office and DOE for public distribution approval, which is expected shortly.
</p>


<h4>For release information</h4>
<p>
If you wish to receive information regarding releases please sign up for the <a href="form.php">mailing list</a>.
</p>

<hr>
<hr>


<h4>Installation Instructions</h4>
<h5>os x - binary</h5>
<pre>
tar zxf oscars-1.32.00-osx10.11.tgz
cd oscars-1.32.00
python python/setup.py install
</pre>

<h5>linux / os x - source</h5>
<pre>
tar zxf oscars-1.32.00-[SYSTEM].tgz
cd oscars-1.32.00
python python/setup.py build
python python/setup.py install
</pre>

Otherwise, if you are python savvy, all you really need is to unpack and make sure OSCARS.so and the other python modules are in your path:
<pre>
import sys
sys.path.append('path/where/so/file/lives')
sys.path.append('path/where/py/file/lives')
</pre>





<!--
<h4>Binary Distributions</h4>
<p>
Binary distributions are available for Windows (64-bit), OS X, and Linux (x86_64).
</p>

<table class="dist">
  <tr>
    <td colspan=2 class="disthead">Binary - v1.00.00</td>
  </tr>
  <tr>
    <td>OS X</td><td><a href="download/v1.00.00/osx/OSCARS.tgz">v1.00.00.tgz</a></td>
  </tr>
  <tr>
    <td>Linux x86_64</td><td><a href="download/v1.00.00/x86_64/OSCARS.tgz">v1.00.00.tgz</a></td>
  </tr>
  <tr>
    <td>Windows 64-bit</td><td><a href="download/v1.00.00/win/OSCARS.zip">v1.00.00.tgz</a></td>
  </tr>
</table>



<h4>Source Distributions</h4>
<p>
Complete source and documentation are available in tgz and zip formats for all distributions.  You can also download the latest development source code from the OSCARS repository directly at <a href="http://github.com/dhidas/OSCARS">http://github.com/dhidas/OSCARS</a>.
</p>

<table class="dist">
  <tr>
    <td colspan=2 class="disthead">Source - v1.00.00</td>
  </tr>
  <tr>
    <td>Source .tgz</td><td><a href="download/v1.00.00/source/OSCARS.tgz">v1.00.00.tgz</a></td>
  </tr>
  <tr>
    <td>Source .zip</td><td><a href="download/v1.00.00/source/OSCARS.zip">v1.00.00.zip</a></td>
  </tr>
</table>




<h4>Development Version</h4>
<p>
You can download the latest stable release from github either using git, or a direct download
</p>
<p>
git clone git@github.com:dhidas/OSCARS.git
</p>
<p>
git clone https://github.com/dhidas/OSCARS
</p>
<p>
<a href="https://github.com/dhidas/OSCARS">https://github.com/dhidas/OSCARS</a>
</p>
-->



<?php include("includes/footer.html"); ?>
