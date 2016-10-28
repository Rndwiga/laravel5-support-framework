@extends('backend.appTemplate')

@section('main')

    @include('backend.partials.entete', ['title' => trans('back/comments.dashboard')])

      @foreach ($comments as $comment)
    <div class="panel {!! $comment->seen? 'panel-default' : 'panel-info' !!}">
        <div class="panel-heading {!! $comment->user->valid? '' : 'border-red' !!}">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-lg-3">{{ trans('back/comments.author') }}</th>
                        <th class="col-lg-3">{{ trans('back/comments.date') }}</th>
                        <th class="col-lg-3">{{ trans('back/comments.post') }}</th>
                        <th class="col-lg-1">{{ trans('back/comments.valid') }}</th>
                        <th class="col-lg-1">{{ trans('back/comments.seen') }}</th>
                        <th class="col-lg-1"></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-primary"><strong>{{ $comment->user->username }}</strong></td>
                    <td>{{ $comment->created_at }}</td>
                    <td>{{ $comment->post->title }}</td>
                    <td>{!! Form::checkbox('valide', $comment->user->id, $comment->user->valid) !!}</td>
                    <td>{!! Form::checkbox('seen', $comment->id, $comment->seen) !!}</td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['comment.destroy', $comment->id]]) !!}
                            {!! Form::destroyBootstrap(trans('back/comments.destroy'), trans('back/comments.destroy-warning'), 'btn-xs') !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="panel-body">
            {!! $comment->content !!}
        </div>
    </div>
    @endforeach

@endsection

@section('scripts')

    <script>

    <script>

        $(function() {

            // Seen gestion
            $(":checkbox[name='seen']").change(function() {
                $(this).parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
                $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
                $.ajax({
                    url: 'commentseen/' + this.value,
                    type: 'PUT',
                    data: "seen=" + this.checked
                })
                .done(function() {
                    $('.fa-spin').remove();
                    $('input[type="checkbox"]:hidden').show();
                })
                .fail(function() {
                    $('.fa-spin').remove();
                    var chk = $('input[type="checkbox"]:hidden');
                    chk.parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
                    chk.show().prop('checked', chk.is(':checked') ? null:'checked');
                    alert('{{ trans('back/comments.fail') }}');
                });
            });

            // Valid gestion
            $(":checkbox[name='valide']").change(function() {
                var cases = $(":checkbox[name='valide'][value='" + this.value + "']");
                cases.prop('checked', this.checked);
                cases.parents('.panel-heading').toggleClass('border-red');
                cases.hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
                $.ajax({
                    url: '{!! url('uservalid') !!}' + '/' + this.value,
                    type: 'PUT',
                    data: "valid=" + this.checked
                })
                .done(function() {
                    $('.fa-spin').remove();
                    $('input[type="checkbox"]:hidden').show();
                })
                .fail(function() {
                    $('.fa-spin').remove();
                    var cases = $('input[type="checkbox"]:hidden');
                    cases.parents('.panel-heading').toggleClass('border-red');
                    cases.show().prop('checked', cases.is(':checked') ? null:'checked');
                    alert('{{ trans('back/comments.fail') }}');
                });
            });

        });

    </script>

@endsection
