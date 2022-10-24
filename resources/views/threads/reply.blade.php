<div class="body bg-indigo-50  p-2 m-2">
    <a href="" class="text-primary">{{ $reply->owner->name }}</a>
    Said {{ $reply->created_at->diffForHumans() }}
    <hr>
    {{ $reply->body }}
</div><?php
