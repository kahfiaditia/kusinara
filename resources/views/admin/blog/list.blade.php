@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-muted mb-4 font-13">
                            <div class="header-title">
                                <h4 class="page-title mb-2">{{ $menu }}
                                </h4>
                                <div class="float-right align-item-center mt-2">
                                    <a href="{{ route('blog.create') }}"
                                        class="btn btn-info px-4 align-self-center report-btn">Add Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $list)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $list->kategori ? $list->kategori->nama : '' }}</td>
                                    <td class="text-center">
                                        @if ($list->image != null)
                                            <img src="{{ URL::asset('files/blog/' . $list->image) }}" width="45x"
                                                alt="profile-user" class="rounded-circle" />
                                        @endif
                                    </td>
                                    <td>
                                        <?php
                                        if (strlen($list->title) > 25) {
                                            $titik = '...';
                                        } else {
                                            $titik = null;
                                        }
                                        ?>
                                        <label data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="{{ $list->title }}" aria-describedby="tooltip121408">
                                            {{ substr($list->title, 0, 25) . $titik }}
                                        </label>
                                    </td>
                                    <td>
                                        <?php
                                        if (strlen($list->deskripsi) > 30) {
                                            $titik = '...';
                                        } else {
                                            $titik = null;
                                        }
                                        ?>
                                        <label data-toggle="tooltip" data-placement="top"
                                            data-original-title="{{ $list->deskripsi }}" aria-describedby="tooltip121408">
                                            {{ substr($list->deskripsi, 0, 30) . $titik }}
                                        </label>
                                    </td>
                                    <td>
                                        <label data-toggle="tooltip" data-placement="top"
                                            data-original-title="{{ $list->aktif == '1' ? 'Aktif' : 'Non Aktif' }}"
                                            aria-describedby="tooltip121408">
                                            {{ $list->aktif == '1' ? 'Aktif' : 'Non Aktif' }}
                                        </label>
                                    </td>
                                    <td>
                                        <?php $id = Crypt::encryptString($list->id); ?>
                                        <form class="delete-form" action="{{ route('blog.destroy', $id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('blog.edit', $id) }}" class="btn btn-warning btn-sm"
                                                    data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm delete_confirm"
                                                    data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
