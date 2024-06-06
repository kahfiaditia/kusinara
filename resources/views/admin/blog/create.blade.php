@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('blog.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control select select2 kategori" name="kategori" id="kategori">
                                <option value=""> -- Pilih Kategori --</option>
                                @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}"> {{ $data->nama }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">{{ $errors->first('kategori') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required
                                placeholder="Title" />
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" value="{{ old('image') }}"
                                placeholder="Image" required />
                            <small class="text-danger">{{ $errors->first('image') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea id="elm1" name="deskripsi"></textarea>
                            <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                            <a href="{{ route('blog.index') }}" type="reset"
                                class="btn btn-secondary waves-effect m-l-5">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
