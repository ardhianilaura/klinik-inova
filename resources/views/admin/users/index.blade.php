@extends('layouts.app')

@section('konten')
<h1>List Users</h1>
<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Tambahkan Obat</a>

@if(session('success'))
<div class="alert alert-success" style="margin-top: 20px;">{{ session('success') }}</div>
@endif

<div class="table-responsive" style="margin-top: 20px;"> <!-- Adjust margin-top for spacing -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center">Nama User</th>
                <th class="text-center">Email</th>
                <th class="text-center">Role</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            @php
            // Define background color based on role using if-else
            if ($user->role === 'admin') {
            $roleClass = 'label-primary';
            } elseif ($user->role === 'dokter') {
            $roleClass = 'label-success';
            } elseif ($user->role === 'pegawai') {
            $roleClass = 'label-warning';
            } elseif ($user->role === 'kasir') {
            $roleClass = 'label-info';
            } else {
            $roleClass = 'label-default';
            }
            @endphp
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-center">
                    <span class="label {{ $roleClass }}">
                        {{ ucfirst($user->role) }}
                    </span>
                </td>
                <td class="text-center">
                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection