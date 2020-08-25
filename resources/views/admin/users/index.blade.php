@extends('admin.default')

@section('page-header')
    Users <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.users.create') }}" style="background-color:#ffc117;" class="btn ">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.users.edit', $item->id) }}">{{ $item->name }}</a></td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.users.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="text-dark ti-pencil-alt"></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.users.destroy', $item->id), 
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}
    
                                            <button style=" background: none!important;border: none;padding: 0!important;" class="btn btn-link"  title="{{ trans('app.delete_title') }}"><i class="text-dark ti-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            
            </table>
            <div class="paginator">
				{{ $items->appends($_GET)->onEachSide(1)->links() }}
		    </div>
        </div>
    </div>

@endsection