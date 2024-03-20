@extends('layouts.app')

@section('title', 'Users')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-button">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
                            </div>
                            <div class="card-body">
                                {{-- <div class="float-right">
                                    <form method="GET" action="{{ route('users.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Roles</th>
                                            <th>Created </th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    @if($user->roles == 'ADMIN')
                                                        <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}" class="rounded-circle" width="35">
                                                    @else
                                                        <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}" class="rounded-circle" width="35">
                                                    @endif
                                                    <div class="d-inline-block ml-2">{{ $user->name }}</div>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>
                                                    @if ($user->roles == 'ADMIN')
                                                    <div class="badge badge-primary">{{ $user->roles }}</div>
                                                    @else
                                                    <div class="badge badge-success">{{ $user->roles }}</div>
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    @if ($user->roles != 'ADMIN')
                                                        <div class="d-flex justify-content-center">
                                                            <a href='{{ route('user.edit', $user->id) }}'
                                                                class="btn btn-sm btn-info btn-icon">
                                                                <i class="fas fa-edit"></i>
                                                                Edit
                                                            </a>
                                                            <form action="{{ route('user.destroy', $user->id) }}"
                                                                method="POST" class="ml-2">
                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                <input type="hidden" name="_token"
                                                                    value="{{ csrf_token() }}" />
                                                                <button
                                                                    class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                    <i class="fas fa-times"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach



                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $users->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
