<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row mb-5 ml-2">
                <div class="col-lg-3 col-md-6 bg-info rounded text-dark">
                    <div class="panel info-box panel-white p-2">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">6<!-- <?php echo number_format($all_post_views); ?> --></p>
                                <span class="info-box-title">Page Views</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="far fa-fw fa-newspaper"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 bg-info ml-2 rounded text-dark">
                    <div class="panel info-box panel-white p-2">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p><span class="counter">12<!-- <?php echo number_format($all_posts); ?> --></span></p>
                                <span class="info-box-title">All Info</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 bg-info ml-2 rounded text-dark">
                    <div class="panel info-box panel-white p-2">
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p><span class="counter">21<!-- <?php echo number_format($all_posts); ?> --></span></p>
                                <span class="info-box-title">Inbox</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="fas fa-fw fa-envelope"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->