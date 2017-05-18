<?php include("../../includes/header.html"); ?>


<h3>Download OSCARS 1.36.12</h3>

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
git clone https://github.com/dhidas/OSCARS -b 1.36.12

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
git clone https://github.com/dhidas/OSCARS -b 1.36.12

# Change to the OSCARS directory
cd OSCARS

# Build and install OSCARS
python setup.py install
</pre>


<hr>
<hr>



<h4>Installation with GPU</h4>
<p>
First you need to install nvcc from: <a href="https://developer.nvidia.com/cuda-downloads">https://developer.nvidia.com/cuda-downloads</a>.
</p>

<p>
Once you have the nvcc compiler installed you can
</p>

<pre>
# Download OSCARS
git clone https://github.com/dhidas/OSCARS -b 1.36.12

# Compile and install
make
python setup_gpu.py install
</pre>

<p>
The make uses nvcc to compile the library which uses CUDA.  Then setup_gpu.py uses the python setuptools to compile, link the cuda library, and install.  Of course it is advised to do this in a conda envirnment as above, but not required
</p>



<h4>Binary Distributions</h4>
<p>
Binary distributions which include GPU capability are coming soon.  If you would like to request a platform please send an email to <a href="mailto:oscars@bnl.gov">oscars@bnl.gov</a>
</p>




<?php include("../../includes/footer.html"); ?>
