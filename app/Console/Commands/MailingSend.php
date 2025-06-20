<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Mailing;
use App\Models\MailData;
use App\Mail\DefaultMailing;


class MailingSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mailingsend';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send out mailings if the schedule is met';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mailings = Mailing::where('sent', false)
            ->where('schedule', '<=', now())
            ->get();

        foreach ($mailings as $mailing) {
            if (!$mailing->user_data_created) {
                $this->info('Creating mail data.');
                $this->createMailData($mailing);
            }
            $this->info('Sending mail.');
            $this->sendMail($mailing);
        }

        $this->info('Mailings sent successfully.');
    }

    private function createMailData($mailing)
    {

        $alreadyCreatedIds = MailData::where('mailing_id', $mailing->id)
            ->pluck('user_id')
            ->toArray();

        foreach ($mailing->mailingGroup->users() as $user) {
            if (in_array($user->id, $alreadyCreatedIds)) {
                continue;
            }

            $mailData = new MailData();
            $mailData->mailing_id = $mailing->id;
            $mailData->user_id = $user->id;
            $mailData->body = $this->createBody($mailing->body, $user);
            $mailData->sent = false;
            $mailData->save();
        }

        $mailing->user_data_created = true;
        $mailing->save();
    }

    private function createBody($body, $user)
    {
        return str_replace('[name]', $user->name, $body);
    }

    private function sendMail($mailing)
    {
        foreach ($mailing->unsentmailData as $mailData) {
            Mail::to($mailData->user->email)
                ->send(new DefaultMailing($mailing->title, $mailData->body));
            $mailData->sent = true;
            $mailData->save();
        }
        $mailing->sent = true;
        $mailing->save();
    }
}
