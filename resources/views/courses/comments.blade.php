




            @foreach ($comments as $comment)
                <div class="col-md-8 ">
                    <div class="card">
                    <div class="card-header"><h2> @if($comment->student()){{ $comment->student()->name }} @endif</h2></div>
                  <div class="card-body">

                    <h4>{{$comment['body']}}</h4>

                 </div>


            </div>
        </div>

        @endforeach



