
<script type="text/javascript" src="/scripts/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="js/javascript.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />

@extends('admin.admin')
@section('content')
    <h3>Добавление новости</h3>
<form action="news" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <p>Выберите картинку на главной</p>
    <input type="file" id="imagePrev" name="imagePrev">

    <script>
        function readerHandler(e2)
        {
            var store = document.getElementById('storage');
            store.innerHTML=e2.target.result;
        }

        function readfile(e1)
        {
            var fileobj = e1.target.files[0];
            var fr = new FileReader();
            fr.onload = readerHandler;
            fr.readAsText(fileobj);
        }
        function imageHandler(e2)
        {
            var store = document.getElementById('imgstore');
            store.innerHTML='<img src="' + e2.target.result+ '"   width= "90px" height= "50px">';
        }

        function loadimage(e1)
        {
            var filename = e1.target.files[0];
            var fr = new FileReader();
            fr.onload = imageHandler;
            fr.readAsDataURL(filename);
        }

        window.onload=function()
        {
            var x = document.getElementById("getimage");
            x.addEventListener('change', readfile, false);
            var y = document.getElementById("getimage");
            y.addEventListener('change', loadimage, false);
        }
    </script>
    <br>
    <p>Заголовок</p>
    <input id="header" name="header">
    <textarea cols="80" rows="10" id="editor1" name="editor1"></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
    <input  type="submit" value="Сохранить" />
    {{--<input type="button" class="btn-primary btn-sm btn-block" value="Сохранить">--}}
</form>
    <div class='row'>
        <div class='col-xs-12 col-sm-6 col-sm-offset-3'>
            <table class='table'>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Дата создания</th>
                    <th>Заголовок</th>
                    <th>Текст новости</th>

                </tr>
                @foreach($news as $item)
                    <tr data-id={{ $item->id }}>
                        <td><a href='/admin/news?remove={{ $item->id }}' data-toggle='tooltip' title='Удалить'><span class='glyphicon glyphicon-remove'></span></a></td>
                        <td><a class='edit_link' data-id={{ $item->id }} data-toggle='tooltip' title='Редактировать' href='#'><span class='glyphicon glyphicon-edit'></span></a></td>
                        <td>{{ $item->created_at }}</td>
                        <td data-title>{{ $item->header }}</td>
                        <td data-message>{{ $item->text }}</td>
                    </tr>
                @endforeach
            </table>
            {!! $news->render() !!}
        </div>
    </div>

    <script>
        var current_id = 0;
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            $('.edit_link').click(function(){
                if ( current_id ) {
                    $('tr[data-id=' + current_id +']').removeClass('info');
                }
                // current_id = $(this).data('id');
                var id = current_id = $(this).data('id');
                $('tr[data-id=' + id +']').addClass('info');
                $('#type_input').val('update');
                $('#record_id').val(id);
                $('#type_header').text('Редактирование записи');
                $('#title').val( $('tr[data-id=' + id + ']').find('td[data-title]').text() );
                $('#message').data('markdown').setContent(
                        toMarkdown( $('tr[data-id=' + id + ']').find('td[data-message]').text() )
                );
                $('#cancel_div').removeClass('hidden');
                $('#submit_div').addClass('col-sm-6');
            });
            $('#cancel').click(function(e){
                e.preventDefault();
                if ( current_id ) {
                    $('tr[data-id=' + current_id +']').removeClass('info');
                }
                $('#type_input').val('insert');
                $('#type_header').text('Добавление записи');
                $('#title').val('');
                $('#message').data('markdown').setContent('');
                $('#cancel_div').addClass('hidden');
                $('#submit_div').removeClass('col-sm-6');
                current_id = 0;
            });
        });
        function parseMessage()
        {
            $('#message').data('markdown').setContent(
                    $('#message').data('markdown').parseContent()
            );
            return true;
        }
    </script>

@endsection