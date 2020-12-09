<?php

return [
    'baseUrl' => 'https://soundblog.netlify.app/',
    'production' => true,
    'siteName' => 'SoundBlog',
    'siteDescription' => 'The blog of Soundlog, the app where top publishers unlock their catalog insights.',
    'siteAuthor' => 'SoundLog - Matt Basile',

        // collections
        'collections' => [
            'posts' => [
                'author' => 'Dre', // Default author, if not provided in a post
                'sort' => '-date',
                'path' => 'blog/{filename}/index.html',
            ],
            'categories' => [
                'path' => '/blog/categories/{filename}/index.html',
                'posts' => function ($page, $allPosts) {
                    return $allPosts->filter(function ($post) use ($page) {
                        return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                    });
                },
            ],
        ],
    
];
