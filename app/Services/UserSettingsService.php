<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserFodmap;
use App\Models\UserMailingGroup;
use Illuminate\Support\Arr;

class UserSettingsService
{
    /**
     * Update user settings
     *
     * @param Request $request
     * @param string $id
     * @return void
     */
    public function updateUserSettings(Request $request, User $user)
    {
        // $request->validate([
        //     // 'name' => 'required|string|max:255',
        //     // 'email' => 'required|string|email|max:255',
        //     // 'language_id' => 'exists:languages,id',
        //     'fodmaps' => 'array',
        //     'fodmaps.*' => 'boolean',
        //     // 'mailing_groups' => 'array',
        //     // 'mailing_groups.*' => 'boolean',
        // ]);

        $this->updateUser($request->get('user'), $user);
        $this->upsertUserFodmaps($request->get('fodmaps') ?? [], $user->id);
        $this->deleteUnlinkedMailingGroups($request->get('mailing_groups'), $user->id);
        $this->upsertUserMailingGroups($request->get('mailing_groups'), $user->id);
    }

    private function updateUser(array $userData, $user)
    {
        $user->fill($userData)->save();
    }

    private function upsertUserFodmaps(array $fodmaps, int $user_id)
    {
        $fodmaps['user_id'] = $user_id;
        UserFodmap::upsert([$fodmaps], 'user_id');
    }

    private function deleteUnlinkedMailingGroups($mailingGroups, int $user_id)
    {
        UserMailingGroup::where('user_id', $user_id)
            ->whereNotIn('mailing_group_id', $mailingGroups)
            ->delete();
    }

    private function upsertUserMailingGroups(array $mailingGroups, int $user_id)
    {
        UserMailingGroup::upsert(
            Arr::map($mailingGroups, function ($mailingGroup) use ($user_id) {
                return [
                    'user_id' => $user_id,
                    'mailing_group_id' => $mailingGroup,
                    'deleted_at' => null
                ];
            }),
            'user_id'
        );
    }
}
