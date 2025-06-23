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
        $this->updateUser($request->get('user'), $user);
        $this->upsertUserFodmaps($request->get('fodmaps') ?? [], $user->id);
        $this->deleteUnlinkedMailingGroups($request->get('mailing_groups') ?? [], $user->id);
        $this->upsertUserMailingGroups($request->get('mailing_groups') ?? [], $user->id);
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

    private function deleteUnlinkedMailingGroups(array $mailingGroups, int $user_id)
    {
        $userMailingGroup = UserMailingGroup::where('user_id', $user_id);
        if (!empty($mailingGroups)) {
            $userMailingGroup->whereNotIn('mailing_group_id', $mailingGroups);
        }
        $userMailingGroup->delete();
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
