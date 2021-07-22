@include('includes.headerdash')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">


        <div class="row">
         

            <div class="col-4">
                <div class="card card-widget">
                    <div class="card-body">
                        <h5 class="text-muted">This Month</h5>
                        <h2 class="mt-4">$6,932.60</h2>
                        <span>Total Revenue</span>
                        <div class="mt-4">
                            <h4>2,365</h4>
                            <h6>Online Earning <span class="pull-right">80%</span></h6>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar gradient-1" style="width: 80%;" role="progressbar"><span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4>1,250</h4>
                            <h6 class="m-t-10 text-muted">Offline Earning <span class="pull-right">50%</span></h6>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4>1,250</h4>
                            <h6 class="m-t-10 text-muted">Yearly Saving <span class="pull-right">35%</span></h6>
                            <div class="progress mb-3" style="height: 7px">
                                <div class="progress-bar gradient-4" style="width: 35%;" role="progressbar"><span class="sr-only">35% Complete</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mt-4">
                                    <h4>5,250</h4>
                                    <h6 class="m-t-10 text-muted">Budget Pending <span class="pull-right">70%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar gradient-8" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div> -->
                    </div>
                </div>
            </div>

         
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <div class="stat-text">Today Expenses</div>
                            <div class="stat-digit gradient-3-text"><i class="fa fa-usd"></i>8500</div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only">50% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <div class="stat-text">Income Detail</div>
                            <div class="stat-digit gradient-4-text"><i class="fa fa-usd"></i>7800</div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar gradient-4" style="width: 40%;" role="progressbar"><span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="stat-widget-one">
                        <div class="stat-content">
                            <div class="stat-text">Task Completed</div>
                            <div class="stat-digit gradient-4-text"><i class="fa fa-usd"></i> 500</div>
                        </div>
                        <div class="progress mb-3">
                            <div class="progress-bar gradient-4" style="width: 15%;" role="progressbar"><span class="sr-only">15% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- #/ container -->
</div>
@include('includes.footerdash')