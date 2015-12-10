@if($news->count())
    @foreach($news as $item)
        <div class='row'>
            <div class='col-sm-3 hidden-xs'>
            </div>
            <div class='col-sm-6'>
                <h4><a href='{{link_loc()}}/news/{{ $item->id }}'>{{ $item->title }}</a></h4>
                <p class='small'>{{ $item->created_at }}</p>
                <p>{!! $item->message !!}</p>
            </div>
        </div>
    @endforeach
    <div class='row'>
        <div class='col-sm-3 hidden-xs'>
        </div>
        <div class='col-sm-6'>
            {!! $news->render() !!}
        </div>
    </div>
@else
    <div class='row'>
        <div class='col-sm-3 hidden-xs'>
        </div>
        <div class='col-sm-6'>
            <p>{{ trans('user/news.no_news') }}</p>
        </div>
    </div>
@endif