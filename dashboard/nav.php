<?php
		require('./../app/lib/methods.php');
		if (is_authenticate()) {
		} else {
			header('location: ./../login.php');
		}
?>

<header class="main-header">
	<div class="d-flex align-items-center ml-5">		
		<a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block" data-toggle="push-menu" role="button">
			<i class="nav-link-icon mdi mdi-menu text-white"></i>
		</a>
		<!-- Logo -->
		<a href="./../index.php" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <!-- <span class="light-logo"><img src="./images/logo-light-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="./images/logo-dark-text.png" alt="logo"></span> -->
			  <h3 style="color:white">Sharify</h3>
		  </div>
		</a>
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link rounded" data-toggle="push-menu" role="button">
					<i class="nav-link-icon mdi mdi-menu text-white"></i>
			    </a>
			</li>
			<li class="btn-group nav-item">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded" title="Full Screen">
					<i class="nav-link-icon mdi mdi-crop-free text-white"></i>
			    </a>
			</li>
	
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			
		
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		
		
		<li class="treeview">
          <a href="#">
            <i class="mdi mdi-account"></i>
            <span>Mon compte</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="mdi mdi-settings"></i> Dashboard</a></li>
			<li><a href="profile.php"><i class="mdi mdi-account"></i> Mon profil</a></li>
			<li><a href="pricing.php"><i class="mdi mdi-cash"></i> Mon abonnement</a></li>
			<li><a href="annonces.php"><i class="mdi mdi-home"></i>Mes annonces</a></li>
			<li><a href="../add-properties.php"><i class="ti-more"></i> Ajouter une annonce</a></li>
			<li><a href="factures.php"><i class="mdi mdi-heart"></i> Mes favoris</a></li>
			<li><a href="sharelist.php"><i class="ti-more"></i> Recherches sauvegardés</a></li>
			<li><a href="sharelist.php"><i class="mdi mdi-file"></i> Mes factures</a></li>
			<li><a href="add_agent.php"><i class="ti-more"></i> Ajouter un Agent</a></li>
			<li><a href="agents.php"><i class="mdi mdi-file"></i> Liste des agents</a></li>
			<li><a href="sharelist.php"><i class="mdi mdi-message"></i> Inbox</a></li>
			<li><a href="sharelist.php"><i class="ti-more"></i> CRM</a></li>
			<li><a href="./../app/lib/process.php?process=logout"><i class="ti-out"></i> Se deconnecter</a></li>
          </ul>
        </li>    

        
      </ul>
    </section>
  </aside>