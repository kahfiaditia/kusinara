@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('setting.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Apps</label>
                            <input type="text" class="form-control" name="apps" value="{{ old('apps') }}"
                                placeholder="Nama Aplikasi" />
                            <small class="text-danger">{{ $errors->first('apps') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}"
                                required placeholder="Kecamatan" />
                            <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" class="form-control" name="kota" value="{{ old('kota') }}" required
                                placeholder="Kota" />
                            <small class="text-danger">{{ $errors->first('kota') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi') }}"
                                required placeholder="Propinsi" />
                            <small class="text-danger">{{ $errors->first('provinsi') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" required
                                placeholder="Alamat" />
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required
                                placeholder="Email" />
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="call" value="{{ old('call') }}" required
                                placeholder="Nomor Telepon" />
                            <small class="text-danger">{{ $errors->first('Call') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" class="form-control" name="youtube" value="{{ old('youtube') }}"
                                placeholder="Link Youtube" />
                            <small class="text-danger">{{ $errors->first('youtube') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}"
                                placeholder="Link Facebook" />
                            <small class="text-danger">{{ $errors->first('facebook') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}"
                                placeholder="Link Instagram" />
                            <small class="text-danger">{{ $errors->first('instagram') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Legalitas</label>
                            <input type="text" class="form-control" name="legalitas" value="{{ old('legalitas') }}"
                                placeholder="Legalitas" />
                            <small class="text-danger">{{ $errors->first('legalitas') }}</small>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <a href="{{ route('setting.index') }}" type="reset"
                                class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
