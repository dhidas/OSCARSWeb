<?php include("includes/header.html"); ?>


<h3>Docker</h3>


<p>
A <a href="https://www.docker.com">docker</a> image is available for OSCARS.  This image includes jupyter so one can simply run the container and point their browser to the correct address, or run OSCARS in the cloud.
</p>

<p>
You can find the latest version at <a href="https://hub.docker.com/r/dhidas/oscars/">https://hub.docker.com/r/dhidas/oscars/</a>.
</p>

<p>
You can run it using the following command, where the first 8888 you can change if you want to change the port on your localhost.  For convenience a data/ directory is created which is shared, but it is not necessary.
</p>
<pre>
mkdir data
docker run -d -v `pwd`/data:/oscars/data -p 8888:8888 dhidas/oscars
</pre>


<p>
If you want to run it interactively you can run.  For convenience a data/ directory is created which is shared, but it is not necessary.
</p>
<pre>
mkdir data
docker run -it -v `pwd`/data:/oscars/data dhidas/oscars /bin/bash
</pre>


<?php include("includes/footer.html"); ?>
