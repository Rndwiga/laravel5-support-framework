 <?php

return  [
    'pannels' => [
        [
            'textColor' => 'text-custom',
            'icon' => 'icon-paper-plane',
            'iconColor' => 'bg-icon-custom',
            'model' => \App\Models\Contact::class,
            'name' => 'back/admin.new-messages',
            'url' => 'contact',
            'total' => 'back/admin.messages',
        ],
        [
            'textColor' => 'text-warning',
            'icon' => 'icon-people',
            'iconColor' => 'bg-icon-warning',
            'model' => \App\Models\User::class,
            'name' => 'back/admin.new-registers',
            'url' => 'user/sort',
            'total' => 'back/admin.users',
        ],
        [
            'textColor' => 'text-inverse',
            'icon' => 'icon-pencil',
            'iconColor' => 'bg-icon-inverse',
            'model' => \App\Models\Post::class,
            'name' => 'back/admin.new-posts',
            'url' => 'blog',
            'total' => 'back/admin.posts',
        ],
        [
            'textColor' => 'text-danger',
            'icon' => 'icon-bubbles',
            'iconColor' => 'bg-icon-danger',
            'model' => \App\Models\Comment::class,
            'name' => 'back/admin.new-comments',
            'url' => 'comment',
            'total' => 'back/admin.comments',
        ],
    ],
];
