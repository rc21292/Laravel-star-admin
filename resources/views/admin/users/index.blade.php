@extends('layouts.master')
@section('title','User List')
@section('content')
<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
            <a class="btn btn-success float-right" href="{{ route('admin.users.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
        </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.user.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.user.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.user.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.user.fields.roles') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr data-entry-id="{{ $user->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            <td>
                                @foreach($user->roles()->pluck('name') as $role)
                                <span class="badge badge-info">{{ $role }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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
@section('scripts')

@endsection