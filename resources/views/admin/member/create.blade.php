@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('member.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" value="{{ old('image') }}"
                                placeholder="Image" />
                            <small class="text-danger">{{ $errors->first('image') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required
                                placeholder="Name" />
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea id="elm1" name="address"></textarea>
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Join</label>
                            <input type="date" class="form-control" name="join" value="{{ old('join') }}" required
                                placeholder="Join" />
                            <small class="text-danger">{{ $errors->first('join') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="select2 form-control mb-3 custom-select" name="type" required
                                style="width: 100%; height:36px;">
                                <option value="">Select</option>
                                <option value="Admin">Admin</option>
                                <option value="Member">Member</option>
                            </select>
                            <small class="text-danger">{{ $errors->first('kategori') }}</small>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                            <a href="{{ route('member.index') }}" type="reset"
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
