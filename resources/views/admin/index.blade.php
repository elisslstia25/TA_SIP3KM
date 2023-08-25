<x-app>

    <section class="content">
        <div class="container-fluid">
            <p class="h1 mb-0 text-gray-800" style="font-size: 40px">Dashboard</p>
            <hr class="sedebar-divider d-none d-md-block">
            <div>
                <p class="h4 mb-0 text-gray-800" style="font-size: 20px">Selamat Datang</p>
            </div>
            <!-- Info boxes -->
            <div class="row" style="margin-top: 4%">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-inbox"></i></span>

                        <div class="info-box-content" style="color: #059bac">
                            <span class="info-box-text">Penelitian Masuk</span>
                            <span class="info-box-number">
                                {{ $penelitianMasuk}}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-inbox"></i></span>

                        <div class="info-box-content" style="color: #059bac">
                            <span class="info-box-text">Pengabdian Masuk</span>
                            <span class="info-box-number">{{$pengabdianMasuk}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                
                <!-- /.col -->
            </div>
        </div>
        <!--/. container-fluid -->
    </section>

</x-app>