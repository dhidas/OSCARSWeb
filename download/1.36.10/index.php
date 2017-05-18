<?php include("../../includes/header.html"); ?>


<h3>Download OSCARS 1.36.10</h3>

<h4>Installation - Basic</h4>
The easiest way to install or upgrade to the latest version of OSCARS is:
<pre>
pip install oscars -U
</pre>
That is all you need to do. It is recommended that you also install jupyter, but it is not necessary.




<h4>Simple Installation from Source</h4>

<p>
The simplest way to install OSCARS from source is using conda.  This guarantees that you have all of the correct compilers and libraries.  If you don't want to bother with conda, you can try the non-conda directions that follow
</p>

<hr>

<h5>Installing with conda</h5>
First <a href="http://conda.pydata.org/miniconda.html">install conda</a>.  Then
<pre>
# Install git in your root conda environment (if you don't already have it).
conda install -n root git

# Fix for temporary conda bug for some distributions
conda install -n root pyyaml

# Download the materials.
git clone https://github.com/dhidas/OSCARS -b 1.34.00

# Create a new "conda environment" and install the required Python packages.
cd OSCARS
conda env create -f environment.yml

# Activate the oscars conda environment
source activate oscars

# Build and install OSCARS
python setup.py install
</pre>

<hr>

<h5>Installing into your Native Environment</h5>
<p>
This is certainly possible.  Here are the simple instructions:
</p>
<pre>
# Download the materials.
git clone https://github.com/dhidas/OSCARS -b 1.34.00

# Change to the OSCARS directory
cd OSCARS

# Build and install OSCARS
python setup.py install
</pre>


<hr>
<hr>



<h4>Binary Distributions</h4>
<p>
Binary distributions which include GPU capability are coming soon.  If you would like to request a platform please send an email to <a href="mailto:oscars@bnl.gov">oscars@bnl.gov</a>
</p>
<!--
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
    <td>oscars_v1.34.00.macosx64-10.11-clang73.tar.gz</td>
    <td>1 MB</td>
  </tr>
  <tr>
    <td>Linux CentOS Cern 7 gcc4.7</td>
    <td>oscars_v1.34.00.Linux-centos7-x86_64-gcc4.7.tar.gz</td>
    <td>1 MB</td>
  </tr>
  <tr>
    <td>Windows 64-bit</td>
    <td>oscars_v1.34.00.win64.zip</td>
    <td>1 MB</td>
  </tr>
</table>
-->




<?php include("../../includes/footer.html"); ?>
