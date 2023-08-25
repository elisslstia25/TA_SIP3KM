<x-app>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-3 pt-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Pengumuman</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/pengumuman') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="control-label">Pengumuman</label>
                                <textarea type="text-area" cols="30" rows="10" name="pengumuman" class="form-control">
                                </textarea>
                            </div>
                            <button class="btn btn-dark btn-block">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

</x-app>