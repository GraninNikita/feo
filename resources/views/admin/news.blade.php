
<script type="text/javascript" src="/scripts/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        theme : "modern",
        width: 600,
        height: 300,
        plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ]
    });
</script>
<!-- /TinyMCE -->
@extends('admin.admin')
@section('content')
    <h3>Добавление новости</h3>
<form action="url обработчика формы" method="post" enctype="application/x-www-form-urlencoded">
    <textarea cols="60" rows="7" id="edit_text"></textarea>
    <input type="submit" value="Сохранить" />
</form>
@endsection