
<!-- 4. $MAIN_MENU =================================================================================

		Main menu
		
		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
		-->
<div id="main-menu" role="navigation">
    <div id="main-menu-inner">
        <div class="menu-content top" id="menu-content-demo">
            <!-- Menu custom content demo
                 CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
                 Javascript: html/assets/demo/demo.js
                -->
            <div>
                <div class="text-bg"><span class="text-slim">Bem vindo,</span> <span class="text-semibold">Ale</span></div>

                <?php echo $this->Html->image('no_avatar.jpg'); ?>
                <div class="btn-group">
                    <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></button></a>
                    <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></button></a>
                    <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></button></a>
                    <a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></button></a>
                </div>
                <a href="#" class="close">&times;</a>
            </div>
        </div>
        <ul class="navigation">
            <li>
                <a href="/"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
            </li>
            <li>
                <?= $this->Html->link('<i class="menu-icon fa fa-map-marker"></i><span class="mm-text">Situação dos veículos</span>', ['action'=>'index', 'controller'=>'Trackings'],
                ['escape'=>false]); ?>
            </li>
            <li class="mm-dropdown">
                <?= $this->Html->link("<i class='menu-icon fa fa-location-arrow'></i><span class='mm-text'>Dispositivos</span>", '#', ['escape'=>false]); ?>
                <ul>
                    <li>
                        <?= $this->Html->link("<i class='menu-icon fa fa-location-arrow'></i><span class='mm-text'>Cadastro</span>",
                            ['controller'=>'devices', 'action'=>'add'], ['escape'=>false, 'tabindex'=>'-1']); ?>
                    </li>
                    <li>
                        <?= $this->Html->link("<i class='menu-icon fa fa-location-arrow'></i><span class='mm-text'>Listagem</span>",
                            ['controller'=>'devices', 'action'=>'index'], ['escape'=>false, 'tabindex'=>'-1']); ?>
                    </li>
                </ul>
            </li>
            <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-cogs"></i><span class="mm-text">Configurações</span></a>
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="menu-icon fa fa-users"></i><span class="mm-text">Usuários</span>', array('controller'=>'Users', 'action'=>'index'),
                            array('tabindex'=>'-1', 'escape'=>false)); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="menu-icon fa fa-building-o"></i><span class="mm-text">Organizações</span>', array('controller'=>'Organizations', 'action'=>'index'),
                            array('tabindex'=>'-1', 'escape'=>false)); ?>
                    </li>
                </ul>
            </li>
        </ul> <!-- / .navigation --><!--
					<div class="menu-content">
						<a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</button></a>
					</div> -->
    </div> <!-- / #main-menu-inner -->
</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->