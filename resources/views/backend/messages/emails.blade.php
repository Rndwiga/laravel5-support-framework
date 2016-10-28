@extends('backend.appTemplate')

@section('main')

    @include('backend.partials.entete', ['title' => trans('back/messages.dashboard')])
    <div class="row">
    @include('backend.partials.emailNav')
    <!-- Right Sidebar -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="btn-toolbar m-t-20" role="toolbar">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-inbox"></i></button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-exclamation-circle"></i></button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-trash-o"></i></button>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i>
                                                    <b class="caret"></b>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0);">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i>
                                                    <b class="caret"></b>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="javascript:void(0);">Separated link</a></li>
                                                    </ul>
                                                </div>

                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                      More
                                                      <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                      <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                      <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- End row -->

                                    <div class="panel panel-default m-t-20">
                                        <div class="panel-body p-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover mails m-0">
                                                    <tbody>
                                                      @foreach ($messages as $message)
                                                        <tr class="{!! $message->seen? ' ' : 'unread' !!}">
                                                            <td class="mail-select">
                                                              {!! Form::checkbox('seen', $message->id, $message->seen) !!}
                                                                <div class="checkbox checkbox-primary m-r-15">
                                                                    <input id="checkbox1" type="checkbox">
                                                                    <label for="checkbox1"></label>
                                                                </div>

                                                                <i class="fa fa-star m-r-15 text-muted"></i>

                                                                <i class="fa fa-circle m-l-5 text-warning"></i>
                                                            </td>

                                                            <td>
                                                                <a href="email-read.html" class="email-name">{{ $message->name }}</a>
                                                            </td>

                                                            <td class="hidden-xs">
                                                                <a href="email-read.html" class="email-msg">{!! HTML::mailto($message->email, $message->email) !!}</a>
                                                            </td>
                                                            <td style="width: 20px;">
                                                                <i class="fa fa-paperclip"></i>
                                                            </td>
                                                            <td class="text-right">
                                                                {{ $message->created_at }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div> <!-- panel body -->
                                    </div> <!-- panel -->

                                    <div class="row">
                                        <div class="col-xs-7">
                                            Showing 1 - 20 of 289
                                        </div>
                                        <div class="col-xs-5">
                                            <div class="btn-group pull-right">
                                              <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                              <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>



                                </div> <!-- end Col-9 -->

                            </div><!-- End row -->

    @foreach ($messages as $message)
        <div class="panel {!! $message->seen? 'panel-default' : 'panel-warning' !!}">
            <div class="panel-heading"> 
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-lg-1">{{ trans('back/messages.name') }}</th>
                            <th class="col-lg-1">{{ trans('back/messages.email') }}</th>
                            <th class="col-lg-1">{{ trans('back/messages.date') }}</th>
                            <th class="col-lg-1">{{ trans('back/messages.seen') }}</th>
                            <th class="col-lg-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-primary"><strong>{{ $message->name }}</strong></td>
                            <td>{!! HTML::mailto($message->email, $message->email) !!}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{!! Form::checkbox('seen', $message->id, $message->seen) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $message->id]]) !!}
                                    {!! Form::destroyBootstrap(trans('back/messages.destroy'), trans('back/messages.destroy-warning'), 'btn-xs') !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panel-body">
                {{ $message->message }}
            </div>
        </div>
    @endforeach

@endsection

@section('scripts')

    <script>

        $(function () {
            $(':checkbox').change(function () {
                $(this).parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
                $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
                $.ajax({
                    url: 'contact/' + this.value,
                    type: 'PUT',
                    data: 'seen=' + this.checked
                })
                .done(function () {
                    $('.fa-spin').remove();
                    $('input[type="checkbox"]:hidden').show();
                })
                .fail(function () {
                    $('.fa-spin').remove();
                    var chk = $('input[type="checkbox"]:hidden');
                    chk.parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
                    chk.show().prop('checked', chk.is(':checked') ? null : 'checked');
                    alert('{{ trans('back/messages.fail') }}');
                });
            });
        });

    </script>

@endsection
