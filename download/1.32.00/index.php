<?php include("../../includes/header.html"); ?>


<h3>Download OSCARS 1.32.00</h3>


<h4>Binary Distributions</h4>
<p>
Below are a list of available binarys.  Others can be made available by request.
</p>
<table class="left" width="640">
  <tr>
    <td widtd="30%"><b>Platform</b></td>
    <td widtd="50%"><b>Files</b></td>
    <td widtd="20%"><b>Size</b></td>
  </tr>
  <tr>
    <td>os x 10.11 clang73</td>
    <td>oscars_v1.32.00.macosx64-10.11-clang73.tar.gz</td>
    <td>1 MB</td>
  </tr>
  <tr>
    <td>Linux CentOS Cern 7 gcc4.7</td>
    <td>oscars_v1.32.00.Linux-centos7-x86_64-gcc4.7.tar.gz</td>
    <td>1 MB</td>
  </tr>
  <tr>
    <td>Windows 64-bit</td>
    <td>oscars_v1.32.00.win64.zip</td>
    <td>1 MB</td>
  </tr>
</table>


<h4>Source Distributions</h4>
<p>
The source code provided here is a packaged clone from the git repository with the 1.32.00 tag.  You will need the nvcc compiler from nvidia (it's free) if you wish to utilize the existing GPU code.
</p>
<table class="left" width="400">
  <tr>
    <td widtd="50%">tgz</td>
    <td widtd="50%">oscars_v1.32.00.tgz</td>
  </tr>
    <td>zip</td>
    <td>oscars_v1.32.00.zip</td>
  </tr>
</table>


<!--
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
-->







<?php include("../../includes/footer.html"); ?>
