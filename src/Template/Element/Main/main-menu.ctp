
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
                <div class="text-bg"><span class="text-slim"><?= __('Welcome, ') ?></span><span class="text-semibold">User</span></div>

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
                <a href="/"><i class="menu-icon fa fa-home"></i><span class="mm-text">Home</span></a>
            </li>
            <li class="mm-dropdown">
                <?= $this->Html->link("<i class='menu-icon fa fa-users'></i><span class='mm-text'>". __('Members') ."</span>", '#', ['escape'=>false]); ?>
                <ul>
                    <li>
                        <?= $this->Html->link("<i class='menu-icon fa fa-plus-square-o'></i><span class='mm-text'>". __('Register') ."</span>",
                            ['controller'=>'Members', 'action'=>'add'], ['escape'=>false, 'tabindex'=>'-1']); ?>
                    </li>
                    <li>
                        <?= $this->Html->link("<i class='menu-icon fa fa-list'></i><span class='mm-text'>". __('List') ."</span>",
                            ['controller'=>'Members', 'action'=>'index'], ['escape'=>false, 'tabindex'=>'-1']); ?>
                    </li>
                </ul>
            </li>
            <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-cogs"></i><span class="mm-text"><?= __('Settings'); ?></span></a>
                <ul>
                    <li>
                        <?= $this->Html->link('<i class="menu-icon fa fa-users"></i><span class="mm-text">'. __('Users') .'</span>', array('controller'=>'Users', 'action'=>'index'),
                            array('tabindex'=>'-1', 'escape'=>false)); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="menu-icon fa fa-building-o"></i><span class="mm-text">'. __('Payment types') .'</span>', array('controller'=>'PaymentTypes', 'action'=>'index'),
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