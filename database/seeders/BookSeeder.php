<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            'title' => 'Tutorial Laravel',
            'slug' => 'tutorial-laravel',
            'sinopsis' => 'saya suka laravel jadi saya buat buku ini',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum est quam deserunt consectetur vero. Amet vitae vel porro sint, rerum quisquam aspernatur fugiat! Aut, tempora libero veritatis in incidunt alias architecto sapiente possimus rerum non aliquid exercitationem optio, tempore delectus praesentium nisi a? Qui, necessitatibus odio consequatur cupiditate eius ipsa sunt debitis, autem odit quis harum? Recusandae neque est odio tempore facilis ducimus pariatur ab amet porro nisi voluptatibus iure laudantium molestiae impedit, mollitia vitae aliquid sapiente ea deleniti unde et provident? Assumenda, nisi saepe incidunt dolores sed mollitia repellat soluta adipisci nemo autem voluptates et quae ipsum minima nobis impedit? Magnam praesentium, ad, ullam ut exercitationem sit ex cumque molestiae tenetur iusto corrupti rem adipisci earum, cum tempora libero eligendi asperiores reprehenderit blanditiis et aut doloribus ipsam. Eaque aut dolores nulla labore ab ullam laudantium mollitia dicta quidem veritatis deserunt, asperiores quibusdam rem totam atque praesentium non assumenda incidunt. Velit alias consequatur voluptate, eveniet repudiandae officiis debitis facilis commodi ipsa magni laborum nulla qui animi illum facere et. Impedit libero suscipit repellendus eos? Nesciunt recusandae corporis eos incidunt dignissimos? Eos minima quis laborum, saepe facilis laudantium tempore iusto exercitationem commodi, dolorum sapiente deleniti. Dicta quae eum deserunt porro necessitatibus perspiciatis provident quidem quia consectetur earum quo atque libero, facere ex tempore a exercitationem ut reiciendis pariatur! Eaque commodi veritatis delectus architecto sequi porro sunt ab voluptatibus eos possimus, hic qui quidem velit, doloremque odit omnis magni nemo neque dolor sit esse obcaecati temporibus quo. Recusandae debitis maiores iste natus doloremque id dolores culpa quis, eius hic adipisci porro fugiat consequatur ullam nobis aspernatur dignissimos cumque omnis tempora ratione vero delectus temporibus nesciunt suscipit? Temporibus natus sunt explicabo vero debitis neque molestias, nisi pariatur omnis sapiente magnam sequi impedit ab aspernatur deserunt iusto cupiditate quibusdam id voluptate veniam dolorem. Dicta accusamus molestiae quas quis quia numquam similique soluta earum cumque obcaecati cupiditate porro placeat at doloremque, minima praesentium quos sapiente totam? Iusto, fugiat ratione molestias accusantium amet enim animi cumque eos laudantium minima nihil culpa, eius expedita id quaerat accusamus sint reiciendis iste perferendis provident quod asperiores quo alias mollitia. Optio asperiores modi sequi ex quo est quasi! Nam eius unde nesciunt laborum? Natus amet rerum quas alias cum? Similique explicabo, cum perspiciatis commodi quasi nihil cupiditate maiores deleniti voluptatum. Sunt itaque sapiente sequi laborum voluptas hic dolores in. Rem illo, deserunt itaque ut impedit facere alias ipsum nam aliquam?',
            'publisher' => 'gramedia',
            'author_id' => 1,
            'release_date' => 2024-2-1,
            'price' => 80000,
            'stock' => 122,
            'isbn' => 231251114,
            'rating' => 2,
            'status_id' => 1
        ]);
    }
}
