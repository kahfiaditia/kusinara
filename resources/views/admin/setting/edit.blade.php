@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('setting.update', Crypt::encryptString($data->id)) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Apps</label>
                            <input type="text" class="form-control" name="apps" value="{{ $data->apps }}"
                                placeholder="Nama Aplikasi" />
                            <small class="text-danger">{{ $errors->first('apps') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" value="{{ $data->kecamatan }}"
                                required placeholder="Kecamatan" />
                            <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Kota</label>
                            <input type="text" class="form-control" name="kota" value="{{ $data->kota }}"required
                                placeholder="Kota" />
                            <small class="text-danger">{{ $errors->first('kota') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" value="{{ $data->provinsi }}"
                                required placeholder="Propinsi" />
                            <small class="text-danger">{{ $errors->first('provinsi') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="address" value="{{ $data->address }}" required
                                placeholder="Alamat" />
                            <small class="text-danger">{{ $errors->first('address') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $data->email }}" required
                                placeholder="Email" />
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="call" value="{{ $data->call }}" required
                                placeholder="Nomor Telepon" />
                            <small class="text-danger">{{ $errors->first('call') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" class="form-control" name="youtube" value="{{ $data->youtube }}" required
                                placeholder="Link Youtube" />
                            <small class="text-danger">{{ $errors->first('youtube') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{ $data->facebook }}"
                                required placeholder="Link Facebook" />
                            <small class="text-danger">{{ $errors->first('facebook') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram" value="{{ $data->facebook }}"
                                required placeholder="Link instagram" />
                            <small class="text-danger">{{ $errors->first('instagram') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Legalitas</label>
                            <input type="text" class="form-control" name="legalitas" value="{{ $data->legalitas }}"
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
