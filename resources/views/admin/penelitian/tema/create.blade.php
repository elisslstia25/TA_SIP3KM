<x-app>

    <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title"> Data Create</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/penelitian/tema-add') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="control-label">Tema Penelitian</label>
                                <input type="text" class="form-control" name="tema">
                            </div>

                                <button class="btn btn-primary btn-block">
                                    Save
                                </button>

                        </form>
                        <form action="{{ url('admin/penelitian/skema-add') }}" method="post">
                            @csrf
                            <div class="mb-3 ">
                                <label for="" class="control-label">Skema Penelitian</label>
                                <input type="text" class="form-control" name="skema">
                            </div>

                                <button class="btn btn-primary btn-block">
                                    Save
                                </button>

                        </form>
                    </div>
                </div>
        </div>
    </div>


</x-app>
