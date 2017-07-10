<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li>
                <a href="<?php echo $this->webroot;?>"><i class="fa fa-home"></i> Home </a>
            </li>
            <li>
                <a><i class="fa fa-edit"></i> Délégués <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>delegues/">Liste des délégues</a></li>
                    <li><a href="<?php echo $this->webroot;?>delegues/add/">Ajouter un nouveau délégué</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-edit"></i> Laboratoires <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>laboratoires/">Liste des laboratoires</a></li>
                    <li><a href="<?php echo $this->webroot;?>laboratoires/add/">Ajouter un nouveau laboratoire</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-edit"></i> Régions <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>regions/">Liste des régions</a></li>
                    <li><a href="<?php echo $this->webroot;?>regions/add/">Ajouter une nouvelle région</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-edit"></i> Villes <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>villes/">Liste des villes</a></li>
                    <li><a href="<?php echo $this->webroot;?>villes/add/">Ajouter une nouvelle ville</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-edit"></i> Zones <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>zones/">Liste des zones</a></li>
                    <li><a href="<?php echo $this->webroot;?>zones/add/">Ajouter une nouvelle zone</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Paramètres</h3>
        <ul class="nav side-menu">
            <li>
                <a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/e_commerce.html">E-commerce</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/projects.html">Projects</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/project_detail.html">Project Detail</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/contacts.html">Contacts</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/profile.html">Profile</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/page_403.html">403 Error</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/page_404.html">404 Error</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/page_500.html">500 Error</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/plain_page.html">Plain Page</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/login.html">Login Page</a></li>
                    <li><a href="<?php echo $this->webroot;?>app/webroot/production/pricing_tables.html">Pricing Tables</a></li>
                </ul>
            </li>
            <li>
                <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="#level1_1">Level One</a>
                    <li>
                        <a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li class="sub_menu"><a href="<?php echo $this->webroot;?>app/webroot/production/level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#level1_2">Level One</a>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
        </ul>
    </div>
</div>
