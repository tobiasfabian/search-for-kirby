<?php

namespace Kirby\Search;

use Kirby\Cms\Event;
use Kirby\Cms\File;
use Kirby\Cms\Page;
use Kirby\Cms\User;

return [
    '*:after' => function (
        Event $event,
        Page $page = null,
        Page $newPage = null,
        Page $oldPage = null,
        File $file = null,
        File $newFile = null,
        File $oldFile = null,
        User $user = null,
        User $newUser = null,
        User $oldUser = null
    ) {

        // skip unwanted event types
        if (in_array($event->type(), ['page', 'file', 'user']) === false) {
            return;
        }

        // skip if specific options set to false
        if ($event->type() === 'page' && option('search.entries.pages', true) === false) {
            return;
        }
        if ($event->type() === 'file' && option('search.entries.files', true) === false) {
            return;
        }
        if ($event->type() === 'user' && option('search.entries.users', true) === false) {
            return;
        }

        // skip if deactivated
        if (option('search.hooks', true) === false) {
            return;
        }

        $index = Index::instance();

        // skip if no index exists yet
        if ($index->hasIndex() === false) {
            return false;
        }

        $model = $page ?? $file ?? $user;
        $newModel = $newPage ?? $newFile ?? $newUser;
        $oldModel = $oldPage ?? $oldFile ?? $oldUser;

        // insert
        if (in_array($event->action(), [
            'create',
            'duplicate'
        ]) === true) {
            return $index->insert($model);
        }

        // update
        if (in_array($event->action(), [
            'update',
            'changeName',
            'changeTemplate',
            'changeTitle',
            'changeEmail'
        ]) === true) {
            return $index->update($oldModel->id(), $newModel);
        }

        // move
        if (in_array($event->action(), [
            'changeSlug',
            'changeRole',
            'changeStatus'
        ]) === true) {
            return $index->move($oldModel, $newModel);
        }

        // delete
        if ($event->action() === 'delete') {
            return $index->delete($model);
        }
    }
];
