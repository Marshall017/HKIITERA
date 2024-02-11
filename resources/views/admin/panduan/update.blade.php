@extends('layouts.adminapp')

@section('content')
<div class="container py-5" style="background-color:#B80000; border-radius: 25px;">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <span class="font-weight" style="font-size: 30px; color: white; margin-left: 10px;">Edit Panduan</span>
    </div>

    <div class="row py-6">
        <div class="col-lg-12 mx-auto"> 
            <div class="card rounded shadow border-2"> 
                <div class="card-body p-5 bg-white rounded">
                    <form method="POST" action="{{ route('panduan.update', $panduans->id) }}" enctype="multipart/form-data">   
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="kategori" class="col-md-4 col-form-label">Kategori</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $panduans->kategori }}" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="textfile" class="col-md-4 col-form-label">Text</label>
                            <div class="col-md-8">
                                <textarea id="textfile" name="textfile" style="background-color: #EBF1FA; width: 100%; height: 200px;">{{ $panduans->textfile }}</textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label">Upload Gambar</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="gambar" name="gambar" style="background-color:#EBF1FA">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" style="background-color: #338BFD;color:white">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
