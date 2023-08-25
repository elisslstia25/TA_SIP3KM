<x-dosen>

<section class="content">
        <div class="container-fluid">
            <p class="h1 mb-0 text-gray-800" style="font-size: 40px">Dashboard</p>
            <hr class="sedebar-divider d-none d-md-block">
            <div>
                <p class="h4 mb-0 text-gray-800" style="font-size: 20px">Selamat Datang</p>
            </div>
            <div>
                <h4 class="h6 mb-0 text-gray-900" style="font-size: 35px"></h4>
            </div>
            <!-- Penelitian -->
            <div class="row" style="margin-top: 4%">
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-check"></i></span>

                        <div class="info-box-content" style="color: #059bac">
                            <span class="info-box-text">Penelitian Di Setujui</span>
                            <span class="info-box-number">{{$penelitianDisetujui}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>

                        <div class="info-box-content" style="color: #a40808">
                            <span class="info-box-text">Penelitian Di Tolak</span>
                            <span class="info-box-number">{{$penelitianDitolak}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- Pengabdian -->
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-check"></i></span>

                        <div class="info-box-content" style="color: #059bac">
                            <span class="info-box-text">Pengabdian Di Setujui</span>
                            <span class="info-box-number">{{$pengabdianDisetujui}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-3 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>

                        <div class="info-box-content" style="color: #a40808">
                            <span class="info-box-text">Pengabdian Di Tolak</span>
                            <span class="info-box-number">{{$pengabdianDitolak}}
                                
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- fix for small devices only -->
                
                <!-- /.col -->
            </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                
                <!-- /.col -->
            </div>
        </div>
        <!--/. container-fluid -->
    </section>

</x-dosen>