<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feed::create([
            'id_user' => 1,
            'caption' => 'Aute nulla laborum fugiat consectetur ut pariatur enim consectetur commodo ad. Nostrud aute labore ad ad. Sit elit dolor consectetur consequat do.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 1,
            'caption' => 'Laboris minim enim est laboris enim duis qui. Officia cillum et veniam eiusmod ipsum irure cupidatat culpa eiusmod. Irure labore cupidatat est velit ex.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 1,
            'caption' => 'Velit tempor deserunt sint nostrud dolore ullamco deserunt aliquip cupidatat dolore irure nulla. Officia nisi tempor ullamco eiusmod reprehenderit ut aute culpa voluptate exercitation nulla sunt. Laborum minim esse eu cupidatat dolore nisi ut exercitation exercitation magna laboris mollit labore. Magna voluptate ex et laboris ut elit anim sit id fugiat aliquip.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 2,
            'caption' => 'Do sunt ullamco pariatur occaecat ipsum. Velit id cillum eiusmod occaecat pariatur. Duis dolor labore consequat excepteur irure est reprehenderit aute deserunt. Eiusmod tempor amet ad pariatur occaecat. Deserunt laboris est laboris incididunt qui eiusmod pariatur do mollit labore commodo cupidatat laboris sint.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 2,
            'caption' => 'Enim adipisicing consequat voluptate eu amet non ut sit magna cillum. Fugiat eiusmod cillum est do ut exercitation eu quis officia cupidatat. Nisi incididunt aute eu aliquip sunt pariatur ipsum reprehenderit aliqua pariatur. Et sint exercitation officia nostrud reprehenderit cupidatat.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 2,
            'caption' => 'Et eu ex duis consectetur sint in aliquip fugiat sint veniam in dolor eiusmod fugiat. Ut reprehenderit est eu labore minim Lorem. Eu qui veniam consectetur reprehenderit quis sit duis veniam anim aliqua do. Labore et ad do fugiat ex esse ea incididunt ea ad. Minim culpa laboris velit nulla aliquip duis reprehenderit labore elit aliqua ex. Deserunt proident officia elit ad adipisicing consectetur minim incididunt ipsum pariatur ut nulla tempor. Ad ea veniam quis enim ad incididunt magna anim magna sit voluptate et pariatur adipisicing.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 2,
            'caption' => 'Laborum sunt labore non enim nulla nulla id mollit consequat incididunt id. Adipisicing culpa ullamco sunt veniam ullamco exercitation ipsum est nisi adipisicing minim exercitation amet deserunt. Mollit aute reprehenderit ad veniam laboris deserunt esse culpa nostrud. Velit velit deserunt labore ipsum velit occaecat ex velit veniam. Est sit culpa velit voluptate ullamco minim duis consequat ex eiusmod esse. Mollit et occaecat incididunt ut et id.',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'id_user' => 1,
            'caption' => 'Proident dolor laboris incididunt sit elit ad elit non et esse ad nostrud incididunt. Elit ea proident fugiat sunt cupidatat velit aute dolor eu nulla incididunt. In dolore elit sint cillum tempor. Culpa enim cillum excepteur in nulla id. Non sunt culpa esse commodo ea eiusmod adipisicing tempor dolor proident aliquip commodo aliquip. Deserunt magna excepteur pariatur eiusmod esse.',
            'picture_path' => 'D:Tes'
        ]);
    }
}
