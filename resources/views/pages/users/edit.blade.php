@extends('layouts.master')
@section('css')
@toastr_css
@section('title') 
edit my profile 
@stop


@endsection
@section('page-header')
<!-- breadcrumb --> 
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto" id="profile-title">My profile</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0" id="profile-soustitle">/ edit profile</span>
        </div> 
    </div>
</div> 
<!-- breadcrumb -->
@endsection 
@section('content')
<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong></strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                      
                    </div>
                </div><br>

                {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                <div class="">

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label  class="mr-sm-2 modal-attribut" >Name: <span class="tx-danger">*</span></label>
                            {!! Form::text('name', null, array('class' => 'form-control','required')) !!}
                        </div>

                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label  class="mr-sm-2 modal-attribut" >email: <span class="tx-danger">*</span></label>
                            {!! Form::text('email', null, array('class' => 'form-control','required')) !!}
                        </div>
                    </div>

                </div>

                <div class="row mg-b-20">
                    <div class="parsley-input col-md-6" id="lnWrapper">
                        <label  class="mr-sm-2 modal-attribut" >Password: <span class="tx-danger">*</span></label>
                        {!! Form::password('password', array('class' => 'form-control','required')) !!}
                    </div>

                    <div class="parsley-input col-md-6 " id="lnWrapper">
                        <label  class="mr-sm-2 modal-attribut" > Confirm Password: <span class="tx-danger">*</span></label>
                        {!! Form::password('confirm-password', array('class' => 'form-control','required')) !!}
                    </div>
                </div>
                <br><br>
              
                
                <div class="mg-t-30">
                    <button class="btn btn-primary pd-x-20" type="submit" style="background-color:lightpink; border-color: lightpink;">submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
@include('layouts.footer')

</div>
<!-- row closed -->
</div>

<!-- Container closed -->
</div>
<!-- main-content closed -->

 @include('layouts.footer-scripts')
@section('js')


@endsection
