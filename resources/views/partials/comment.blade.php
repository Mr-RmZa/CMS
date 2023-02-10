<script type="text/javascript">
    $('.btn-opne').click(function(){
        $('.form-reply').css('display', 'none');
        var service = this.id;
        var servies_id = "#f-" + service;
        $(servies_id).show('slow');
    });
</script>
@foreach($comment as $comment)
    <div class="media mb-4 ml-4">
        <img class="d-flex mr-3 rounded-circle" src="/images/1666911623۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg" width="50" alt="">
        <div class="media-body">
            <h5 class="mt-0">مهمان</h5>
            <p>{{$comment->description}}</p>
            <div class="media mt-4 mb-4 row">
                <div class="col-md-12 mb-4">
                    <button type="button" class="btn btn-warning btn-opne" id="div-comment-{{$comment->id}}">پاسخ</button>
                </div>
                <div class="form-reply col-md-12" id="f-div-comment-{{$comment->id}}" style="display: none">
                    {!! Form::open(['method' => 'POST', 'route' => ['frontend.comment.reply']]) !!}
                    @include('partials.form-errors')
                    {!! Form::hidden('parent_id', $comment->id) !!}
                    {!! Form::hidden('post_id', $post->id) !!}
                    <div class="form-group">
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
                    </div>

                    <div class="form-group mt-3">
                        {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                @include('partials.comment', ['comment'=>$comment->replies])
            </div>
        </div>

    </div>
@endforeach
