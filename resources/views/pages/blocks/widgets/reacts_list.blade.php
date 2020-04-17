<div class="post-additional-info inline-items" style="border: none; margin-bottom: 10px;">
    <a href="#" class="post-add-icon inline-items" data-toggle="modal" data-target="#listReactModal{{ $post->id }}">
        <strong>
            <strong class="count-reacts"> {{ $post->reacts->count() }} </strong>
            @lang('person reacted this post')
        </strong>
    </a>
    <div class="comments-shared">
        <a href="#" class="post-add-icon inline-items">
            <strong>{{ $post->comments->count() }} @lang('comments')</strong>
        </a>
        @if ($post->shares->isNotEmpty())
        <a href="#" class="post-add-icon inline-items" data-toggle="modal" data-target="#shareUsersModal{{ $post->id }}">
            <strong> {{ $post->shares->count() }} @lang('shares')</strong>
        </a>
        @endif
    </div>
</div>

@include('pages.blocks.modals.share_users')
@include('pages.blocks.modals.list_react_post')
