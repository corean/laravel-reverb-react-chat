<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', static function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('channel_for_everyone', static function ($user) {
    return true;
});
