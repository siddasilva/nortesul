	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<h1 class="page-title">Downloads</small></h1>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
			            <?php 
		if(!$allcategories)
		{
			echo '<div class="col-lg-12"><div class="alert alert-info"><h4>Nenhum Download</h4><p>Nenhum download foi adicionado.</p></div></div>';
		} else {
			foreach($allcategories as $category) {
        ?>
        
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $category->name?></h3>
                </div>
                <div class="box-body">
                    <?php	
                        # This loops through every download available in the category
                        $alldownloads = DownloadData::GetDownloads($category->id);

                        if(!$alldownloads)
                        {
echo '<p class="text-muted">Nenhum Download Nessa Categoria.</p>';
                            $alldownloads = array();
                        }

                        foreach($alldownloads as $download)
                        {
                    ?>
                    
                    <strong><?php echo $download->name?></strong>
                    <p class="text-muted"><?php echo $download->description?></p>
                    <a href="<?php echo url('/downloads/dl/'.$download->id);?>">Download</a>
                    <hr>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php
            }
		}
        ?>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>