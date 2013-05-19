<?php
// @TODO: perms
if(!empty($me)) { ?>
<div class="navbar-wrapper">

    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><?php echo $this->Html->link('home', '/');?></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            General
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php echo $this->Html->link(__('Organisations', true) . ' <i class="icon-arrow-right"></i>', array('controller' => 'organisations', 'action' => 'index', 'plugin' => false), array('escape' => false)); ?>
                                <ul class="dropdown-menu sub-menu">
                                    <li><?php echo $this->Html->link(__('Organisation Types', true), array('controller' => 'organisation_types', 'action' => 'index', 'plugin' => false)); ?></li>
                                    <li><?php echo $this->Html->link(__('Organisation Categories', true), array('controller' => 'organisation_categories', 'action' => 'index', 'plugin' => false)); ?></li>
                                    <!--<li><?php echo $this->Html->link(__('Organisation PGP Keys', true), array('controller' => 'OrganisationPGPKeys', 'action' => 'index', 'plugin' => false)); ?></li>-->

                                </ul>
                            </li>
                            <li><?php echo $this->Html->link(__('Sharing Groups', true), array('controller' => 'sharing_groups', 'action' => 'index', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('TLP', true), array('controller' => 'TLPs', 'action' => 'index', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Sensitivities', true), array('controller' => 'Sensitivities', 'action' => 'index', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('CIMBL', true), array('controller' => 'CIMBLs', 'action' => 'index', 'plugin' => false)); ?> </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Incident properties
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">

                            <li><?php echo $this->Html->link(__('Domains', true), array('controller' => 'domains', 'action' => 'index', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Reporting Channel', true), array('controller' => 'reporting_channels', 'action' => 'index', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Detect Methods', true), array('controller' => 'detect_methods', 'action' => 'index', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Threat Levels', true), array('controller' => 'threat_levels', 'action' => 'index', 'plugin' => false)); ?> </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Global Actions
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link(__('News', true), array('controller' => 'users', 'action' => 'news', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('My Profile', true), array('controller' => 'users', 'action' => 'view', 'me', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Members List', true), array('controller' => 'users', 'action' => 'memberslist', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('User Guide', true), array('controller' => 'pages', 'action' => 'display', 'documentation', 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Terms & Conditions', true), array('controller' => 'users', 'action' => 'terms', 'plugin' => false)); ?> </li>
                            <li class="divider"></li>
                            <li><?php echo $this->Html->link(__('Settings', true), array('controller' => 'settings', 'action' => 'index', 'plugin' => 'settings')); ?> </li>
                            <li class="divider"></li>
                            <li><?php echo $this->Html->link(__('Log out', true), array('controller' => 'users', 'action' => 'logout', 'plugin' => false)); ?> </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Sync Actions
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link(__('List Servers'), array('controller' => 'servers', 'action' => 'index', 'plugin' => false));?></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Administration
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add', 'admin' => true, 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index', 'admin' => true, 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add', 'admin' => true, 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index', 'admin' => true, 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Contact users', true), array('controller' => 'users', 'action' => 'email', 'admin' => true, 'plugin' => false)); ?> </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Audit
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link(__('List Logs', true), array('controller' => 'logs', 'action' => 'index', 'admin' => true, 'plugin' => false)); ?> </li>
                            <li><?php echo $this->Html->link(__('Search Logs', true), array('controller' => 'logs', 'action' => 'admin_search', 'admin' => true, 'plugin' => false)); ?> </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php } ?>