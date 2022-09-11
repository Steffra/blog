<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'My first blogpost',
            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            'published_at' => '2022-09-11 15:16',
            'user_id' => '1'
        ]);
        Post::create([
            'title' => 'My second blogpost',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rhoncus augue a elementum aliquam. Vestibulum aliquet sapien risus, in dictum diam mattis nec. Integer consequat, ligula non finibus pulvinar, nibh nisl pellentesque mauris, vitae sagittis orci ligula at eros. Morbi eu accumsan justo. Praesent quis consequat elit, malesuada blandit tellus. Pellentesque a dolor nec est suscipit tincidunt in vitae mi. Suspendisse tincidunt tortor a ipsum tristique, nec viverra nisl dapibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed nunc nulla, cursus vel pharetra quis, faucibus et nibh. Etiam non justo eu nisi euismod auctor sit amet et libero. Curabitur porttitor vitae orci in fermentum. Duis rhoncus, quam tempus iaculis condimentum, urna justo pellentesque velit, et auctor lorem metus id lorem.

            Sed dictum luctus mi, vitae lobortis erat dignissim vitae. Maecenas hendrerit convallis sapien ut cursus. Phasellus egestas dolor id neque malesuada pretium. Maecenas tincidunt porttitor massa, vitae tristique lorem blandit ac. Maecenas finibus eros eget orci faucibus, a suscipit lacus pellentesque. Nam eu ultrices risus. Proin vitae nibh at nisl hendrerit pharetra eu ac dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse et lorem nisi. Sed eu consectetur magna, malesuada cursus dolor.

            Nulla libero lectus, euismod eu tincidunt eget, vehicula sed nunc. Mauris quis tempus dolor. Proin sit amet porta nisl, elementum dignissim tellus. Aliquam at nunc non metus laoreet rutrum vestibulum nec mauris. Aliquam finibus, augue et pretium faucibus, tellus augue pellentesque elit, a venenatis lectus nisl quis urna. Cras non leo non urna cursus convallis in ac mauris. Sed rutrum sagittis ipsum. Donec ut pulvinar quam. Etiam in malesuada odio, et tempor est. Phasellus neque erat, porttitor at dui sit amet, vehicula ullamcorper nunc. Maecenas pretium massa molestie tortor fermentum, non rhoncus massa auctor. Nunc dignissim tincidunt erat, eu ornare diam mattis sed. Fusce lorem ante, convallis in orci sit amet, semper tempus tortor.

            Ut semper dolor quis sem ornare elementum. Donec dictum pulvinar elit, ut posuere mauris dapibus a. Sed eu viverra velit. Pellentesque gravida suscipit consequat. Mauris porta hendrerit sollicitudin. Nunc tristique justo dapibus urna tincidunt molestie. Nullam aliquam augue id eros fermentum, mattis tincidunt nisl dictum. Aenean faucibus lobortis varius. Mauris et purus arcu. Vivamus ac aliquam lorem, ut molestie est. Quisque nisi turpis, sodales in porttitor vitae, vestibulum ac lectus. Nam ut maximus felis. Nullam finibus nibh in leo rutrum semper. Donec fermentum odio efficitur augue auctor, nec tempus mi congue.

            Fusce justo ipsum, dictum id fermentum dictum, rutrum ac lacus. Integer vehicula est malesuada, aliquam justo ac, vehicula nibh. Fusce pharetra magna et metus mollis, eu condimentum neque sodales. Donec volutpat pharetra ipsum, quis posuere lacus pharetra a. Praesent non maximus mi, eu molestie arcu. Aenean vehicula sem a erat commodo aliquet. Duis consequat tempus velit nec tincidunt.",
            'published_at' => '2022-09-11 15:20',
            'user_id' => '1'
        ]);
        Post::create([
            'title' => 'Admins first post',
            'body' => "This is a very short blogpost.",
            'published_at' => '2022-09-11 16:57',
            'user_id' => '2'
        ]);

        Post::create([
            'title' => 'Admins second post, this time longer than previously',
            'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed turpis eget ipsum posuere mattis quis viverra velit. Aliquam eu efficitur sem. Vestibulum sed viverra massa. Sed eget sem eleifend, volutpat orci id, maximus ex. Phasellus gravida nibh nulla, id elementum est cursus ut. Sed a massa lacinia, ornare risus et, accumsan sapien. Donec at ullamcorper sapien, nec convallis risus. Mauris varius, lorem vitae posuere aliquam, nulla dolor accumsan ligula, vel rhoncus purus augue quis dolor. Praesent eget accumsan augue, at sodales metus. Integer elementum tempor dolor, sit amet malesuada ipsum commodo eget. Fusce tempor ornare est in blandit. Aliquam sit amet rutrum orci. Maecenas porttitor, nulla ac tincidunt fringilla, leo lorem vehicula ipsum, eu rhoncus velit elit at dolor. Nam rhoncus finibus augue ut sagittis. Quisque sed augue et metus vulputate pulvinar sit amet finibus orci.

            Proin scelerisque, risus auctor convallis tincidunt, ipsum turpis blandit diam, nec iaculis lectus quam vitae eros. Phasellus fermentum leo eu elit efficitur, et scelerisque lorem rhoncus. Morbi at lobortis tellus. Fusce nec arcu molestie, pretium risus non, finibus ex. Quisque metus augue, aliquam at suscipit non, rhoncus at sem. Pellentesque pellentesque neque ac purus pellentesque egestas. Vestibulum at luctus nisi, nec iaculis nunc. Sed ullamcorper velit sit amet leo efficitur, vitae scelerisque sapien dapibus. Sed enim risus, accumsan eget metus quis, auctor tristique dui. Nulla pellentesque urna elementum dapibus porta. Sed aliquam dapibus sollicitudin. Duis sit amet lacus efficitur, porta lacus id, lobortis dolor.

            Suspendisse luctus hendrerit mi, euismod auctor quam ullamcorper nec. Vivamus vel nulla id felis sodales ullamcorper. Praesent condimentum nunc non tristique eleifend. Praesent vel blandit tortor. Cras et sollicitudin lectus. Curabitur vitae urna ex. Phasellus tempor, ex in placerat pharetra, justo urna lobortis magna, in sollicitudin quam nunc vel massa. Vestibulum pretium congue vulputate. Fusce ornare sapien sit amet purus maximus rhoncus.",
            'published_at' => '2022-09-11 17:32',
            'user_id' => '2'
        ]);
    }
}
