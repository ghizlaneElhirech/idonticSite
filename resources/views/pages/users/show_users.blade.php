@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
   Visitors List
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
 Visitors List
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">

<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         
            <button  type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
               add user
            </button>
           
            
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            
                            <th>operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($users as $user)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td>
                                   
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $user->id }}"
                                        title="delete"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                               
                            </tr>

                           


                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5  class="modal-title"
                                                id="exampleModalLabel">
                                                delete the user
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('users.destroy', 'test') }}"
                                                  method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                warning
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="{{ $user->id }}">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                            class="btn btn-danger">submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>



</div>
</div>
</div>

</div>
<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLabel">
                   ADD USER
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2 modal-attribut" >Name
                                :</label>
                            <input id="name" type="text" name="name" class="form-control">
                        </div>
                       
                    </div>
                    <div class="form-group">
                       <label for="email" class="modal-attribut">Email:</label>
                        <input id="email" type="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                       <label for="password"class="modal-attribut">Password:</label>
                        <input id="password" type="password" name="password" class="form-control" required>
                    </div>
                    
                     <div class="form-group">
                       <label for="confirm-password" class="modal-attribut">Confirm Password:</label>
                        <input id="confirm-password" type="password" name="confirm-password" class="form-control" required>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="submit-user">submit</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
