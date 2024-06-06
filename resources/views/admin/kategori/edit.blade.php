@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $menu }}</h4>
                    <form class="" action="{{ route('kategori.update', $lists->id) }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama"
                                value="{{ old('nama', $lists->nama) }}" oninput="this.value = this.value.toUpperCase()"
                                required placeholder="Nama" />
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select select2 status1" name="status1" id="status1">
                                <option value=""> -- Pilih --</option>
                                <option value="1" @if ($lists->aktif == 1) selected @endif> Aktif </option>
                                <option value="2" @if ($lists->aktif == 2) selected @endif> Non Aktif
                                </option>
                            </select>
                            <small class="text-danger">{{ $errors->first('status1') }}</small>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                            <a href="{{ route('kategori.index') }}" type="reset"
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
