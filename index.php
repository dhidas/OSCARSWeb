<?php include("includes/header.html"); ?>



<h3>Home</h3>


<p>
OSCARS is a modern code for the computation of radiative properties of charged particles in electromagnetic fields.  OSCARS is capable of calculating spectra, flux, and power densities for arbitrary field configurations, multi-particle and mixed-particle beams, with user configurable precision.  Notably, OSCARS is capable of calculating flux and power density distributions on arbitrary shaped surfaces in 3-D.
</p>

<p align="center">
<img src="img/Spectrum.png" height="200" alt="Spectrum from planer undulator for single-particle and multi-partcial" />
<img src="img/Flux.png"  height="200" alt="Flux from undulator on a rectangular surface" />
<img src="img/Spectrum2.png" height="200" alt="Spectrum from planer undulator for single-particle and multi-partcial" />
<img src="img/Torus3D.png"  height="200" alt="Power density from an EPU on a torus in 3D" />
</p>


<h4>Advantages of OSCARS</h4>
<ul>
  <li>Accurate calculation with user defined precision.</li>
  <li><b>Multi-threaded</b> and <b>GPU</b> enabled for <em>extremely</em> fast calculation.</li>
  <li>Designed with very large scale computing in mind.</li>
  <li>Simple and very powerful python API (application program interface).</li>
  <li>100% Open Source.</li>
  <li>We welcome feedback and contributions.</li>
</ul>
<p>
The core of OSCARS is written in modern c++ for speed with a simple python user interface.  No additional packages are required to run the core of OSCARS.  One can easily run OSCARS on their desktop or laptop computer.  It also comes with utilities to use MPI for your local machine and cluster usage.  Significant gains are achieved through the use of graphical processing units (GPUs) and OSCARS makes this very easy for compatible nvidia GPUs.  OSCARS was also designed with very large scale computing in mind and easily runs on "the cloud" and such facilities as the <a href="http://opensciencegrid.org">Open Science Grid</a>.
</p>

<p>
OSCARS is also intended to be an open source and community based project with contributions from anyone willing and able regardless of institution or position.  We also encourage user feedback in order to continually improve the ease of use and calculations within.  If you are interested in contributing or giving us feedback, please email us at <a href="mailto:dhidas@bnl.gov">dhidas@bnl.gov</a> or visit the <a href="forum.php">fourm</a>.
</p>






<?php include("includes/footer.html"); ?>
