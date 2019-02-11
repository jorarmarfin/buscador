<?php

$factory->define(AppArticle::class, function (FakerGenerator $faker) {
    $tags = collect(['php', 'ruby', 'java', 'javascript', 'bash'])
        ->random(2)
        ->values()
        ->all();

    return [
        'title' => $faker->sentence,
        'body' => $faker->text,
        'tags' => $tags,
    ];
});