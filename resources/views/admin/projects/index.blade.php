@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.projects.title')
    @can('project_create')

        <a href="{{ route('admin.projects.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>

    @endcan
    </h3>
    @can('project_csv_import')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.projects.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.projects.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('project_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('project_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                    <th>@lang('global.projects.fields.name')</th>
                    <th>@lang('global.projects.fields.long_name')</th>
                    <th>@lang('global.projects.fields.description')</th>
                    <th>@lang('global.projects.fields.objectives')</th>
                    <th>@lang('global.projects.fields.website')</th>
                    <th>@lang('global.projects.fields.start-date')</th>
                    <th>@lang('global.projects.fields.end-date')</th>
                    <th>@lang('global.projects.fields.logo')</th>
                    @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('project_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.projects.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.projects.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [@can('project_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan{data: 'name', name: 'name'},
                {data: 'long_name', name: 'long_name'},
                {data: 'description', name: 'description'},
                {data: 'objectives', name: 'objectives'},
                {data: 'website', name: 'website'},
                {data: 'start_date', name: 'start_date'},
                {data: 'end_date', name: 'end_date'},
                {data: 'logo', name: 'logo'},

                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection
