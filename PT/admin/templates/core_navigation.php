<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<?php

if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_NEWS)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PAGES)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_DOWNLOADS)
|| PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS)
|| PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_REGISTRATIONS)
)
{
?>
<li style="padding: 0; margin: 0;"><a class="menu" href="#">
	<img src="<?php echo fileurl('/admin/lib/layout/images/site_icon.png');?>" />Notícias & Páginas
	</a>
	<ul style="padding: 0; margin: 0;">
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_NEWS))
		{
		?>
		<li><a href="<?php echo adminurl('/sitecms/viewnews'); ?>">Notícias</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PAGES))
		{
		?>
		<li><a href="<?php echo adminurl('/sitecms/viewpages');?>">Páginas</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_DOWNLOADS))
		{
		?>
		<li><a href="<?php echo adminurl('/downloads/overview'); ?>">Downloads</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS))
		{
		?>
		<li><a href="<?php echo adminurl('/massmailer');?>">Enviar E-mail pra todos os pilotos</a></li>
		<?php
		}
		?>
		<li></li>
	</ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AIRLINES)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_FLEET)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_SCHEDULES)
|| PilotGroups::group_has_perm(Auth::$usergroups, IMPORT_SCHEDULES)
)
{
	?>
<li style="padding: 0; margin: 0;"><a class="menu" href="?admin=airlines">
	<img src="<?php echo  SITE_URL?>/admin/lib/layout/images/operations_icon.png" />Operações Aéreas
	</a>
	<ul style="padding: 0; margin: 0;">
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AIRLINES))
		{
		?>
		<li><a href="<?php echo adminurl('/operations/airlines');?>">Adicione & Edite as companhias aéreas</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_FLEET))
		{
		?>
			<li><a href="<?php echo adminurl('/operations/aircraft');?>">Adicionar e Editar a frota</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_SCHEDULES))
		{
		?>
		<li><a href="<?php echo adminurl('/operations/airports');?>">Adicionar & Editar Aeroportos</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_SCHEDULES))
		{
		?>
		<li><a href="<?php echo adminurl('/operations/schedules');?>">Rotas</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, IMPORT_SCHEDULES))
		{
		?>
			<li><a href="<?php echo adminurl('/import');?>">Importar Rotas</a></li>
			<li><a href="<?php echo adminurl('/import/export');?>">Exportar Rotas</a></li>
		<?php
		}
		?>
	</ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_REGISTRATIONS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PILOTS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_GROUPS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_RANKS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AWARDS)
)
{
	?>
<li style="padding: 0; margin: 0;"><a class="menu" href="#">
	<img src="<?php echo  SITE_URL?>/admin/lib/layout/images/pilots_icon.png" />Pilotos & Grupos</a>
	<ul style="padding: 0; margin: 0;">
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_REGISTRATIONS))
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/pendingpilots');?>">Registos pendentes</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PILOTS))
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/viewpilots');?>">Ver todos os pilotos</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_GROUPS))
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/pilotgroups');?>">Grupos</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_RANKS))
		{
		?>
		<li><a href="<?php echo adminurl('/pilotranking/pilotranks');?>">Patentes</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS))
		{
		?>
		<li><a href="<?php echo adminurl('/massmailer'); ?>">Enviar E-mail pra todos os pilotos</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AWARDS))
		{
		?>
		<li><a href="<?php echo adminurl('/pilotranking/awards'); ?>">Awards</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN))
		{
		?>
			<li><a href="<?php echo adminurl('/maintenance/changepilotid'); ?>">Mude o ID de um Piloto</a></li>
			<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS))
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/viewbids'); ?>">Ver reservas</a></li>
		<?php
		}
		?>
		<li></li>
	</ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PIREPS_FIELDS)
)
{
?>
<li style="padding: 0; margin: 0;"><a class="menu" href="#">
	<img src="<?php echo  SITE_URL?>/admin/lib/layout/images/pireps_icon.png" />Relatórios de voos (PIREPS)</a>
	<ul style="padding: 0; margin: 0;">
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS))
		{
		?>
		<li><a href="<?php echo adminurl('/pirepadmin/viewpending'); ?>">Vista pendente</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS))
		{
		?>
		<li><a href="<?php echo adminurl('/pirepadmin/viewrecent'); ?>">Ver Relatórios Recentes</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS))
		{
		?>
		<li><a href="<?php echo adminurl('/pirepadmin/viewall'); ?>">Ver todos os relatórios</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PIREPS_FIELDS))
		{
		?>
		<li><a href="<?php echo adminurl('/PirepAutoAccept'); ?>">Aprovaçao Automática</a></li>
        <?php 
        }
        if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PIREPS_FIELDS)) 
        {
        ?>
		<li><a href="<?php echo adminurl('/settings/pirepfields'); ?>">Campos</a></li>
		<?php
		}
		?>
		<li></li>
	</ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, VIEW_FINANCES)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_EXPENSES)
)
{
?>
<li style="padding: 0; margin: 0;"><a class="menu" href="<?php echo SITE_URL?>/admin/index.php/reports">
	<img src="<?php echo  SITE_URL?>/admin/lib/layout/images/reports_icon.png" />Relatórios e despesas</a>
	<ul style="padding: 0; margin: 0;">
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, VIEW_FINANCES))
		{
		?>
		<li><a href="<?php echo adminurl('/reports/overview'); ?>">Visão geral</a></li>
		<li><a href="<?php echo adminurl('/finance/viewcurrent'); ?>">Relatórios financeiros</a></li>
		<li><a href="<?php echo adminurl('/reports/aircraft'); ?>">Relatórios de aeronaves</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_EXPENSES))
		{
		?>
		<li><a href="<?php echo adminurl('/finance/viewexpenses'); ?>">Despesas</a></li>
		<?php
		}
		?>
		<li></li>
	</ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PROFILE_FIELDS)
)
{
	?>
<li style="padding: 0; margin: 0;"><a class="menu" href="#">
	<img src="<?php echo  SITE_URL?>/admin/lib/layout/images/settings_icon.gif" />Site e Configurações</a>
	<ul style="padding: 0; margin: 0;">
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN))
		{
?>
		<li><a href="<?php echo adminurl('/settings'); ?>">Configurações Gerais</a></li>
		<li><a href="<?php echo adminurl('/maintenance/options'); ?>">Opções de manutenção</a></li>
		<li><a href="<?php echo adminurl('/logs'); ?>">Registros de atividade de administração</a></li>
		<li><a href="<?php echo adminurl('/templatediffs');?>">Diffs de modelo</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PROFILE_FIELDS))
		{
		?>
		<li><a href="<?php echo adminurl('/settings/customfields'); ?>">Adicinar Campos no cadastro</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN))
		{
		?>
		<?php
		if(Config::Get('PHPVMS_CENTRAL_ENABLED') == true || Config::Get('VACENTRAL_ENABLED') == true )
			echo '<li><a href="'.adminurl('/vacentral').'">vaCentral Settings</a></li>';
		?>
		<?php
		}
		?>
		<li><a href="<?php echo adminurl('/dashboard/about');?>">Sobre o phpVMS</a></li>
		<li></li>
	</ul>
</li>
<?php
}
?>
<?php
if(strlen($MODULE_NAV_INC) > 0)
{
?>
<li style="padding: 0; margin: 0;"><a class="menu" href="#">
<img src="<?php echo  SITE_URL?>/admin/lib/layout/images/settings_icon.gif" />Addons</a>
	<ul style="padding: 0; margin: 0;">
	<?php echo $MODULE_NAV_INC; ?>
	</ul>
</li>
<?php
}
?>