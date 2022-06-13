@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Questions
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
Questions
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

            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                Add Questions
            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>questions</th>
                            <th>reply</th>
                            <th>Processes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($questions as $question)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->reply}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $question->id }}"
                                        title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $question->id }}"
                                        title="Delete"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit{{ $question->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5  class="modal-title" id="exampleModalLabel">
                                                Edit Question
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- edit_form -->
                                            <form action="{{ route('questions.update', 'test') }}" method="post">
                                                {{ method_field('patch') }}
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="question_ar"
                                                               class="mr-sm-2 modal-attribut">question-ar
                                                            :</label>
                                                        <input id="question_ar" type="text" name="question_ar"
                                                               class="form-control"
                                                               value="{{ $question->getTranslation('question', 'ar') }}"
                                                               required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $question->id }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="question_en"
                                                               class="mr-sm-2 modal-attribut">question-en
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{ $question->getTranslation('question', 'en') }}"
                                                               name="question_en" required>
                                                    </div>
                                                     <div class="col">
                                                        <label for="question_fr"
                                                               class="mr-sm-2 modal-attribut">question-fr
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{ $question->getTranslation('question', 'fr') }}"
                                                               name="question_fr" required>
                                                    </div>
                                                </div><br>
                                                 <div class="row">
                                                    <div class="col">
                                                        <label for="reply_ar"
                                                               class="mr-sm-2 modal-attribut">reply-ar
                                                            :</label>
                                                        <input id="reply_ar" type="text" name="reply_ar"
                                                               class="form-control"
                                                               value="{{ $question->getTranslation('reply', 'ar') }}"
                                                               required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="{{ $question->id }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="reply_en"
                                                               class="mr-sm-2 modal-attribut">reply-en
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{ $question->getTranslation('reply', 'en') }}"
                                                               name="reply_en" required>
                                                    </div>
                                                     <div class="col">
                                                        <label for="reply_fr"
                                                               class="mr-sm-2 modal-attribut">reply-fr
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                               value="{{ $question->getTranslation('reply', 'fr') }}"
                                                               name="reply_fr" required>
                                                    </div>
                                                </div><br>
                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                            class="btn btn-success">submit</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $question->id }}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                delete question
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('questions.destroy', 'test') }}"
                                                  method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                Warning_delete
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="{{ $question->id }}">
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


<!-- add_modal_class -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLabel">
                    Add questions
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class=" row mb-30" action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="repeater">
                            <div data-repeater-list="List_questions">
                                <div data-repeater-item>
                                    <div class="row">

                                        <div class="col">
                                            <label for="question_ar" class="mr-sm-2 modal-attribut-two"> question-ar
                                            </label>
                                            <input class="form-control" type="text" name="question_ar" />
                                        </div>


                                        <div class="col">
                                            <label for="question_en"
                                                class="mr-sm-2 modal-attribut-two">question-en
                                                </label>
                                            <input class="form-control" type="text" name="question_en" />
                                        </div>
                                         <div class="col">
                                            <label for="question_fr"
                                                class="mr-sm-2 modal-attribut-two">question-fr
                                                </label>
                                            <input class="form-control" type="text" name="question_fr" />
                                        </div>
                                             

                                        <div class="col">
                                            <label for="reply_ar"
                                                class="mr-sm-2 modal-attribut-two">reply-ar
                                                </label>
                                            <input class="form-control" type="text" name="reply_ar" />
                                        </div>


                                        <div class="col">
                                            <label for="reply_en"
                                                class="mr-sm-2 modal-attribut-two">reply-en
                                                </label>
                                            <input class="form-control" type="text" name="reply_en" />
                                        </div>
                                         <div class="col">
                                            <label for="reply_fr"
                                                class="mr-sm-2 modal-attribut-two">reply -fr
                                                </label>
                                            <input class="form-control" type="text" name="reply_fr" />
                                        </div>


                                        

                                        <div class="col">
                                            <label for="question_en"
                                                class="mr-sm-2 modal-attribut-two"> Processes
                                                
                                                </label>
                                            <input class="btn btn-danger btn-block" data-repeater-delete
                                                type="button" value="delete_row" />
                                        </div>
                                 
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="button" data-repeater-create type="button" value="add_row"/>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit"
                                    class="btn btn-success">submit</button>
                            </div>


                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>

</div>
</div>
</div>

</div>

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
